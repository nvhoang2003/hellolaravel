<?php

namespace App\Http\Controllers;

use App\Reposity\CusRepos;

class CusController extends Controller
{
    public function index(){
        $cus = CusRepos::getAllCus();
        return view('Cus.indexCus',
            [
                'cus'=>$cus,
            ]);
    }
    public function edit($cusid)
    {
        $cus = CusRepos::getCusById($cusid);


        return view(
            'Cus.updateCus',
            ["cus" => $cus[0]]);
    }
    public function update(Request $request, $cusid)
    {
        if ($cusid != $request->input('cusid')) {
            //id in query string must match id in hidden input
            return redirect()->action('CusController@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $cus = (object)[
            'cusid' => $request->input('cusid'),
            'username' => $request->input('username'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'contact' => $request->input('contact'),
            'email' => sha1($request->input('email')),
            'address' => sha1($request->input('address'))

        ];
        CusRepos::update($cus);

        return redirect()->action('CusController@index')
            ->with('msg', 'Update Successfully');
    }

}
