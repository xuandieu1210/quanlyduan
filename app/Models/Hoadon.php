<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    use HasFactory;
     protected $fillable = [
		'ngayxuat',
		'sotien'
		'idduan'
	];
}
