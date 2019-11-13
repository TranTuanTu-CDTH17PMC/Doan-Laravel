<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\NguoiChoi;
class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nguoi_choi=DB::table('nguoi_chois')->whereNull('deleted_at')->get();
        return view('ds-nguoi-choi',compact('nguoi_choi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('them-moi-nguoi-choi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nguoi_choi=new NguoiChoi;
        $nguoi_choi->ten_dang_nhap=$request->ten_dang_nhap;
        $nguoi_choi->mat_khau=$request->mat_khau;
        $nguoi_choi->email=$request->email;

        $file=$request->hinh_dai_dien;
        $filename=$file->getClientOriginalName();
        $file->move('img/',$filename);
        $nguoi_choi->hinh_dai_dien=$filename;


        
        $nguoi_choi->diem_cao_nhat=$request->diem_cao_nhat;
        $nguoi_choi->credit=$request->credit;
        $nguoi_choi->save();
       return redirect('/nguoi-choi')->with('success','Thêm mới thành công',compact('nguoichoi'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $nguoi_choi=NguoiChoi::find($id);
        $nguoi_choi->ten_dang_nhap;
        $nguoi_choi->mat_khau;
        $nguoi_choi->email;
         return view('update-nguoi-choi',compact('nguoi_choi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $nguoi_choi=NguoiChoi::find($id);
        $nguoi_choi->ten_dang_nhap=$request->ten_dang_nhap;
        $nguoi_choi->mat_khau=$request->mat_khau;
        $nguoi_choi->email=$request->email;

        $file=$request->hinh_dai_dien;
        $filename=$file->getClientOriginalName();
        $file->move('img/',$filename);
        $nguoi_choi->hinh_dai_dien=$filename;

        $nguoi_choi->save();

         return redirect('/nguoi-choi')->with('success','cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nguoi_choi=NguoiChoi::find($id);
        $nguoi_choi->delete();
         return redirect('/nguoi-choi')->with('success','xóa thành công');
    }

    public function thungrac()
    {
          $nguoi_choi=NguoiChoi::onlyTrashed()->get();
        return view('thung-rac-nguoi-choi',compact('nguoi_choi'));

    }

    public function phuchoi($id)
    {   
        //$nguoi_choi=NguoiChoi::onlyTrashed($id)->restore();
        NguoiChoi::withTrashed()->where('id',$id)->restore();
      
 return redirect('/nguoi-choi')->with('success','phục hồi thành công');
    }
}
