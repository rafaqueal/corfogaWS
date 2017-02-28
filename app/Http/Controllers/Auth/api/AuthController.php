<?php

namespace App\Http\Controllers\Auth\API;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
 

  public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');
        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->errorUnauthorized();
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->errorInternal();
        }

        // all good so return the token
        return response()->json(["token"=> $token, "user" => $credentials])->setStatusCode(200);

    }


    public function register(Request $request){
        return User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            ]);
    }

    public function index(){
        return User::all();
    }


    public function show($id){
            try{

                $user = JWTAuth::parseToken()->toUser();

                if(!$user){
                    return $this->response->errorNotFund('user not found');
                }

            }catch(\Tymon\JWTAuth\Exceptions\TokenInvalidException $ex){
               return $this->response->error('something went wrong');
            
            }
             return $this->response->array(compact('user'))->setStatusCode(200);
    }


    public function getToken(){

        $token = JWTAuth::getToken();
        if(!$token){
            return $this->response->errorUnauthorized('Token is invalid');
        }

        try{
            $refreshedToken = JWTAuth::refresh($token);
        }catch(JWTException $ex){
            $this->response->error('something went wrong');
        }

        return $this->response->array(compact('refreshedToken'));
    } 


    public function destroy(){
        $user = JWTAuth::parseToken()->authenticate();
        if(!$user){
            //fail the delete process
        }

        $user->delete();
    }







}