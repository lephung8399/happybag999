<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class hoadonModel extends Model
{
	protected $table = 'hoa_don';
	public $timestamps = true;
	protected $fillable =['tinh_trang','tong_tien','id_gio_hang_chi_tiet','	ho_ten','so_dien_thoai','dia_chi','email','ghi_chu','tinh_thanh','created_at','updated_at'];
}
