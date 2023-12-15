<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Duan;
use App\Models\Kehoach;
use App\Models\Hoadon;

class KehoachController extends Controller
{
        public function index()
    {
        // $duan =  DB::table('duan')
        //     ->leftjoin('hoadon', 'duan.id', '=', 'hoadon.idduan')
        //     ->leftjoin('thanhtoan', 'duan.id', '=', 'thanhtoan.idduan')
        //     ->select('duan.*', 'hoadon.*', 'thanhtoan.*')
        //      ->get();
        $nam = 2023;
        $data = DB::table('duans')->orderBy('id', 'ASC')->get();

        $kehoach = DB::table('kehoachs')->where('nam', $nam)->first();
        $ketqua = DB::table('hoadons')->whereYear('ngayxuat', $nam)->sum('sotien');
        $ketquathang = DB::table('hoadons')->whereYear('ngayxuat', $nam)->get();
        $giatrikh = $kehoach->kehoach;;
        $tyle = $ketqua / $giatrikh;
        $orders = Hoadon::select(
                    DB::raw('sum(sotien) as sums'), 
                    DB::raw("DATE_FORMAT(ngayxuat,'%m') as monthKey")
          )
          ->whereYear('ngayxuat', $nam)
          ->groupBy('monthKey')
          ->orderBy('monthKey', 'ASC')
          ->get();

          // $datakq = [
          //   [
          //       'Tháng 1', 0
          //   ], 
          //               [
          //       'Tháng 2', 0
          //   ], 
          //               [
          //       'Tháng 3', 0
          //   ], 
          //               [
          //       'Tháng 4', 0
          //   ], 
          //               [
          //       'Tháng 5', 0
          //   ], 
          //               [
          //       'Tháng 6', 0
          //   ], 
          //               [
          //       'Tháng 7', 0
          //   ], 
          //               [
          //       'Tháng 8', 0
          //   ], 
          //               [
          //       'Tháng 9', 0
          //   ], 
          //               [
          //       'Tháng 10', 0
          //   ], 
          //               [
          //       'Tháng 11', 0
          //   ], 
          //               [
          //       'Tháng 12', 0
          //   ]];

        $datakq = [0,0,0,0,0,0,0,0,0,0,0,0];
        foreach($orders as $order){
            $datakq[$order->monthKey - 1] = $order->sums;
        }


        return view('chart', compact('kehoach', 'giatrikh','ketqua', 'datakq' , 'tyle'));
    }
}
