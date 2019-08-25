<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class giohangchitietModel extends Model
{
     protected $table = 'gio_hang_chi_tiet';
    public $timestamps = false;
    protected $fillable =['tong_tien','tinh_trnag','so_san_pham','id_gio_hang',];

}
