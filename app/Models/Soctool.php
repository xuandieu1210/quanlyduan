<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soctool extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'donvi',
        'soluonggiao',
        'dieuchinh',
        'soluongcaidat',
        'soluongbienban',
        'soluongthieu',
        'linkfile'
    ];
}
