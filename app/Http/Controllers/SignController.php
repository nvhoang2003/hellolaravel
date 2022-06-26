<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SignController extends Controller
{
    //
    public function login(){
        return view('Sign.login');
    }

    public function signin(Request $request){
        $this->formValidate($request)->validate();
        Session::put('username', $request->input('username'));
        return redirect()->route('Event.index');
    }

    function formValidate(Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'username' => ['required'],
                'password'=> ['required',
                    function($attribute, $value , $fail){
                        global $request;
                        $key = 0;
                        $admin = AdminRepos::getAllAdmin();
                        $pass = sha1($request->input('password'));
                        foreach ($admin as $a){
                            if($a->username == $request->input('username')){
                                 $admin = AdminRepos::getAdminById($request->input('username'));
                                    if($admin[0]->PASSWORD == $pass){
                                        $key =1;
                                    } else {
                                        $key = 0;
                                    }
                            }
                        }
                        if($key != 1){
                            $fail('Wrong Pass. Please Enter Correct Password!!');
                        }
                    },
                ]


            ],
            [
                'username.required' => 'username can not be empty',
            ]
        );
    }
    public function signout(){
        if (Session::has('username')){
            Session::forget('username');
        }
        return redirect()->action('SignController@login');
    }


}
