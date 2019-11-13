<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\GoiCredit;

class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $goicredit=DB::table('goi_credits')->whereNull('deleted_at')->get();
        return view('ds-goi-credit',compact('goicredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('them-moi-goi-credit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $goicredit=new GoiCredit;
       $goicredit->ten_goi=$request->ten_goi;
         $goicredit->credit=$request->credit;
           $goicredit->so_tien=$request->so_tien;
       $goicredit->save();
       return redirect('/goi-credit')->with('success','Thêm mới thành công',compact('goicredit'));
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
        $goicredit=GoiCredit::find($id);
       $goicredit->ten_goi;
         $goicredit->credit;
           $goicredit->so_tien;
         return view('update-goi-credit',compact('goicredit'));
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
       $goicredit=GoiCredit::find($id);
         $goicredit->ten_goi=$request->ten_goi;
         $goicredit->credit=$request->credit;
           $goicredit->so_tien=$request->so_tien;
       $goicredit->save();
      
       
       return redirect('/goi-credit')->with('success','Thêm mới thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goicredit=GoiCredit::find($id);
        $goicredit->delete();
          return redirect('/goi-credit')->with('success','Xóa thành công');
    }

     public function thungrac()
    {
          $goicredit=GoiCredit::onlyTrashed()->get();
        return view('thung-rac-goi-credit',compact('goicredit'));

    }

    public function phuchoi($id)
    {   
        //$linhvuc=LinhVuc::onlyTrashed($id)->restore();
        GoiCredit::withTrashed()->where('id',$id)->restore();
      
 return redirect('/goi-credit')->with('success','phục hồi thành công');
    }

}
