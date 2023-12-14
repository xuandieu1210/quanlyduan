<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Duan;

class DutoanController extends Controller
{
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
}
