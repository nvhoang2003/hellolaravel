<?php

namespace App\Http\Controllers;


use App\Reposity\AdminRepos;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
public function index(){
    $admin = AdminRepos::getAllAdmin();
    return view('Admin.index',
    [
    'admin'=>$admin,
    ]);
}



function formValidate(Request $request){
    return \Illuminate\Support\Facades\Validator::make(
        $request ->all(),
        [
            'username' => ['required'
            ],
//                'image' => ['required'],
            'contact' => ['required']

        ],
        [
            'username.required' => 'username can not be empty',
            'contact.required' => 'contact can not be empty'
        ]
    );
}

public function edit($admin)
{
    $admin = AdminRepos::getAdminById($admin);


    return view(
        'Admin.edit',
        ["admin" => $admin[0]]);
}

public function update(Request $request, $username)
{
    if ($username != $request->input('username')) {
        //id in query string must match id in hidden input
        return redirect()->action('AdminController@index');
    }

    $this->formValidate($request)->validate(); //shortcut

    $admin = (object)[
        'password' => $request->input('password'),
        'username' => $request->input('username'),
        'contact' => $request->input('contact'),
        'email' => $request->input('email'),
        'pass_hash' => sha1($request->input('password'))
    ];
    AdminRepos::update($admin);

    return redirect()->action('AdminController@index')
        ->with('msg', 'Update Successfully');
}
}
