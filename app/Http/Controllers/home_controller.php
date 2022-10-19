<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhanvien;
use App\Models\gioitinh;
use Illuminate\Support\Facades\DB;
use App\Helper\giohang;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Mail\tuyendung_email;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class home_controller extends Controller
{
    public function index(Request $request){
        return view('home');
    }

    public function home(Request $request){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function banbe(){
        return view('banbe');
    }
    public function canhan(){
        return view('canhan');
    }
    public function nguoithan(){
        return view('nguoithan');
    }
}
