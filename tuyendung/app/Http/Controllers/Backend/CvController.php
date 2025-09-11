<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function cv (){
        return view ('Backend/cv');
    }
    //
}
