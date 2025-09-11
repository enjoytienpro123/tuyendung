<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vieclam;

class HomeController extends Controller
{
    //trang home
    public function index(){
        //hiển thị việc làm đang có is_active là hiển thị
        $vieclam =Vieclam::where ('is_active',1)
                        ->orderBy('created_at','desc')
                        ->paginate(6);
        return view ("Frontend/home",compact('vieclam'));

    }

    public function job(){
         $vieclam =Vieclam::where ('is_active',1)
                        ->orderBy('created_at','desc')
                        ->paginate(4);
        return view ("Frontend/job",compact('vieclam'));

    }

    public function chitietvieclam($id){
        // Lấy chi tiết 1 việc làm theo ID
        $vieclam = Vieclam::where('is_active', 1)
                        ->findOrFail($id);

        // Lấy việc làm liên quan — ví dụ: cùng công ty, hoặc 3 việc làm mới nhất
        $relatedJobs = Vieclam::where('is_active', 1)
                            ->where('id', '!=', $id) // loại trừ chính nó
                            ->orderBy('created_at', 'desc')
                            ->limit(4)
                            ->get();

        return view("Frontend/chitietvieclam", compact('vieclam', 'relatedJobs'));
    }

    public function chitietcongty(){
        return view ("Frontend/chitietcongty");

    }

    public function dangtin(){
        return view ("Frontend/dangtin");

    }

    public function taocv (){
        return view ('Frontend/taocv');
    }
    //
}
