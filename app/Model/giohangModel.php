<?php

namespace App\Model;
use DB;

use Illuminate\Database\Eloquent\Model;

class giohangModel extends Model
{
    protected $table = 'gio_hang';
    public $timestamps = false;
    protected $fillable =['so_luong','	id_san_pham'];
}
