<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
//        dd(\Auth::user()->hasVerifiedEmail());  //检测邮箱验证
        return view('pages.root');
    }
}
