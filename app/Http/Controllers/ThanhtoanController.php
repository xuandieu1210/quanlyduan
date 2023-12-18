<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thanhtoan;
use Illuminate\Support\Facades\DB;

class ThanhtoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('thanhtoans')->orderBy('id', 'ASC')->join('duans', 'duans.id', '=', 'thanhtoans.idduan')
            ->select('thanhtoans.*', 'duans.tenduan')
            ->get();
        $duan = DB::table('duans')->orderBy('id', 'ASC')->get();
        return view('thanhtoan', compact('data', 'duan'));
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
            $thanhtoan= new Thanhtoan();
            $thanhtoan->idduan= $request['idduan'];
            $thanhtoan->sotien= $request['sotien'];
            $thanhtoan->ngay= $request['ngay'];
            $thanhtoan->ghichu= $request['ghichu'];
            $thanhtoan->save();
        } else {
            $thanhtoan= Thanhtoan::find($request['idduan'] );
            $thanhtoan->idduan= $request['idduan'];
            $thanhtoan->sotien= $request['sotien'];
            $thanhtoan->ngay= $request['ngay'];
            $thanhtoan->ghichu= $request['ghichu'];
            $thanhtoan->save();
            
        }

        $data = DB::table('thanhtoans')->orderBy('id', 'ASC')->join('duans', 'duans.id', '=', 'thanhtoans.idduan')
            ->select('thanhtoans.*', 'duans.tenduan')
            ->get();
        $duan = DB::table('duans')->orderBy('id', 'ASC')->get();
        return view('thanhtoan', compact('data', 'duan'));
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
