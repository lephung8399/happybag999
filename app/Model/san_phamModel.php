<?php

namespace App\Model;

use DB;
use Illuminate\Database\Eloquent\Model;

class san_phamModel extends Model
{
	protected $table='san_pham';

	public $timestamps = false;
	protected $fillable =['	ten_san_pham','gia','anh','so_luong','kieu_dang','chat_lieu','mau_sac','size','mo_ta','tinh_trang'];
	
}
