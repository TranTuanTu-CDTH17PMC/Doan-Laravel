<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $redirectTo='trang-chu';
    public function DangNhap()
    {
    	return view('dang-nhap');
    }

      public function getadmin(Request $request)
    {
        $ten_dang_nhap = $request->ten_dang_nhap;
        return $ten_dang_nhap;
    
    }


    public function XuLyDangNhap(Request $request)
    {
    	$ten_dang_nhap=$request->ten_dang_nhap;

        $mat_khau=$request->mat_khau;

        if(Auth::attempt(['ten_dang_nhap' => $ten_dang_nhap,'password'=> $mat_khau])){
            
            return redirect()->route('trang-chu')->with('ten_dang_nhap',$ten_dang_nhap);
        }
            
         return redirect()->route('dang-nhap')->with('thongbao','Đăng nhập thất bại');
           
    }
     public function LayId()
    {
        return Auth::User();
    }
    public function DangXuat()
    {
        Auth::logout();
        return redirect()->route('dang-nhap');
    }
}
