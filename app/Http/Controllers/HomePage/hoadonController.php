<?php

namespace App\Http\Controllers\HomePage;
use App\Http\Controllers\Controller;

use App\Model\hoadonModel;
use App\Model\loaiModel;
use Illuminate\Http\Request;

class hoadonController extends Controller
{
    public function thanh_toan_process(Request $request){

		$hoadon                = new hoadonModel();
		$hoadon->ho_ten = request('ho_ten');
		$hoadon->so_dien_thoai = request('so_dien_thoai');
		$hoadon->email = request('email');
		$hoadon->dia_chi = request('dia_chi');
		$hoadon->tinh_thanh = request('tinh_thanh');
		$hoadon->ghi_chu = request('ghi_chu');
		$hoadon->id_gio_hang_chi_tiet = request('id_gio_hang_chi_tiet');
		$hoadon->tinh_trang = request('tinh_trang');
		$hoadon->tong_tien = request('tong_tien');

//		dd($hoadon);
		$hoadon->save();
		return redirect()->route('dat_hang_thanh_cong');


	}
	public function thanh_cong()
{
	$array_loai = loaiModel::all();
	return view('home.dat_hang_thanh_cong',['array_loai' => $array_loai]);
}
}
