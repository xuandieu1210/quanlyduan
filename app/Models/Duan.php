<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Duan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
		'tenduan',
		'mota',
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

 public function hoadon(): HasMany
    {
        return $this->hasMany(Hoadon::class);
    }


     public function thanhtoan(): HasMany
    {
        return $this->hasMany(Thanhtoan::class);
    }
}
