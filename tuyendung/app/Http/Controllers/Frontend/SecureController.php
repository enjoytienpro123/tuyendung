<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecureController extends Controller
{
    public function dangki(){
        return view ('frontend/dangki');
    }

    public function dangnhap(){
        return view ('frontend/dangnhap');
    }

    public function quenmatkhau(){
        return view ('frontend/quenmatkhau');
    }
    //
}
