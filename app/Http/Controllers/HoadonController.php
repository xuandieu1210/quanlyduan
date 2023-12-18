<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hoadon;
use Illuminate\Support\Facades\DB;

class HoadonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('hoadons')->orderBy('id', 'ASC')->join('duans', 'duans.id', '=', 'hoadons.idduan')
            ->select('hoadons.*', 'duans.tenduan')
            ->get();
        $duan = DB::table('duans')->orderBy('id', 'ASC')->get();
        return view('hoadon', compact('data', 'duan'));
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
            $hoadon= new Hoadon();
            $hoadon->idduan= $request['idduan'];
            $hoadon->sotien= $request['sotien'];
            $hoadon->ngayxuat= $request['ngayxuat'];
            $hoadon->save();
        } else {
            $hoadon= Duan::find($request['idduan'] );
            $hoadon->idduan= $request['idduan'];
            $hoadon->sotien= $request['sotien'];
            $hoadon->ngayxuat= $request['ngayxuat'];
            $hoadon->save();
            
        }

        $data = DB::table('hoadons')->orderBy('id', 'ASC')->join('duans', 'duans.id', '=', 'hoadons.idduan')
            ->select('hoadons.*', 'duans.tenduan')
            ->get();
        $duan = DB::table('duans')->orderBy('id', 'ASC')->get();
        return view('hoadon', compact('data', 'duan'));
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
