<?php

namespace App\Http\Controllers\HomePage;
use App\Http\Controllers\Controller;

use App\Model\loaiModel;
use App\Model\san_phamModel;
use Illuminate\Http\Request;

class product_listController extends Controller
{
	public function index($id)
	{
		$array_loai = loaiModel::all();
		$array_sanpham = san_phamModel::where('id_loai',$id)->get();
		$loailoai = loaiModel::where('id',$id)->get();
//		dd($loailoai);
		return view('home.product_list',['array_loai' => $array_loai,'array_sanpham' => $array_sanpham, 'loailoai' => $loailoai]);
	}
}
