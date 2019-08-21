<?php

namespace App\Model;

use DB;
use Illuminate\Database\Eloquent\Model;

class khachhangModel extends Model
{
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable =['	name','	password','	email','gioi_tinh','dia_chi','sdt','ma_quyen','created_at','updated_at'];
}
