<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LinhVuc;


class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linhvuc=DB::table('linh_vucs')->whereNull('deleted_at')->get();
        return view('ds-linh-vuc',compact('linhvuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them-moi-linh-vuc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $linh_vuc=new LinhVuc;
       $linh_vuc->ten_linh_vuc=$request->ten_linh_vuc;
       $linh_vuc->save();
       return redirect('/linh-vuc')->with('success','Thêm mới thành công',compact('linhvuc'));

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
        $linh_vuc=LinhVuc::find($id);
        $linh_vuc->ten_linh_vuc;
         return view('update-linh-vuc',compact('linh_vuc'));
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
         $linh_vuc=LinhVuc::find($id);
         $linh_vuc->ten_linh_vuc=$request->ten_linh_vuc;
         $linh_vuc->save();
      
       
       return redirect('/linh-vuc')->with('success','Thêm mới thành công');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linh_vuc=LinhVuc::find($id);
        $linh_vuc->delete();
          return redirect('/linh-vuc')->with('success','Xóa thành công');
    }

    public function thungrac()
    {
          $linhvuc=LinhVuc::onlyTrashed()->get();
        return view('thung-rac-linh-vuc',compact('linhvuc'));

    }

    public function phuchoi($id)
    {   
        //$linhvuc=LinhVuc::onlyTrashed($id)->restore();
        LinhVuc::withTrashed()->where('id',$id)->restore();
      
 return redirect('/linh-vuc')->with('success','phục hồi thành công');
    }

}
