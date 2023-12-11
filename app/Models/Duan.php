<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duan extends Model
{
    use HasFactory;
    protected $fillable = [
		'tenduan',
		'mota'
		'tenkhachhang',
		'diachi',
		'thongtinlanhdao',
		'thongtinketoan',
		'thongtinkythuat',
		'masothue',
		'sohopdong',
		'ngayhopdong',
		'ngayketthuchopdong',
		'giatrihopdongchuabaogom',
		'ghichu'
	];
}
