<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    //
    public function ask(){
        return view('bookworm.manualAuth.login');
    }
}
