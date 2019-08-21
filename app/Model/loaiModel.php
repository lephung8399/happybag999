<?php

namespace App\Model;

use DB;
use Illuminate\Database\Eloquent\Model;

class loaiModel extends Model
{
    protected $table = 'loai';
    public $timestamps = false;
    protected $fillable =['	ten_loai'];
}
