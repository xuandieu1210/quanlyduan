<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Duan;

class DuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $duan =  DB::table('duan')
        //     ->leftjoin('hoadon', 'duan.id', '=', 'hoadon.idduan')
        //     ->leftjoin('thanhtoan', 'duan.id', '=', 'thanhtoan.idduan')
        //     ->select('duan.*', 'hoadon.*', 'thanhtoan.*')
        //      ->get();

        $data = DB::table('duans')->orderBy('id', 'ASC')->get();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       

    // add other fields
        
        if ($request['id'] == null) {
            $duan= new Duan();
            $duan->tenduan= $request['tenduan'];
            $duan->mota= $request['mota'];
            $duan->tenkhachhang= $request['tenkhachhang'];
            $duan->diachi= $request['diachi'];
            $duan->thongtinlanhdao= $request['thongtinlanhdao'];
            $duan->thongtinketoan= $request['thongtinketoan'];
            $duan->thongtinkythuat= $request['thongtinkythuat'];
            $duan->masothue= $request['masothue'];
            $duan->sohopdong= $request['sohopdong'];
            $duan->ngayhopdong= $request->date('ngayhopdong');
            $duan->ngayketthuchopdong= $request->date('ngayketthuchopdong');
            $duan->giatrihopdongchuabaogom= $request['giatrihopdongchuabaogom'];
            $duan->ghichu= $request['ghichu'];
            $duan->save();
        } else {
            $duan= new Duan::find($request['id'] );
            $duan->tenduan= $request['tenduan'];
            $duan->mota= $request['mota'];
            $duan->tenkhachhang= $request['tenkhachhang'];
            $duan->diachi= $request['diachi'];
            $duan->thongtinlanhdao= $request['thongtinlanhdao'];
            $duan->thongtinketoan= $request['thongtinketoan'];
            $duan->thongtinkythuat= $request['thongtinkythuat'];
            $duan->masothue= $request['masothue'];
            $duan->sohopdong= $request['sohopdong'];
            $duan->ngayhopdong= $request->date('ngayhopdong');
            $duan->ngayketthuchopdong= $request->date('ngayketthuchopdong');
            $duan->giatrihopdongchuabaogom= $request['giatrihopdongchuabaogom'];
            $duan->ghichu= $request['ghichu'];
            $duan->save();
            
        }

        $data = DB::table('duans')->orderBy('id', 'ASC')->get();
        return view('index', compact('data'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
