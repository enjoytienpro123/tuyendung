<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NhatuyendungController extends Controller
{
    public function nhatuyendung (){
        return view ('Backend/nhatuyendung');
    }
    //
}
