<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\giohangchitietModel;
use App\Model\hoadonModel;
use Illuminate\Http\Request;

class don_hangController extends Controller
{
	public  function index(){
		$order = hoadonModel::All();
//		dd($order);

		$giohangchitiet = giohangchitietModel::where('tinh_trang','$order->id_gio_hang_chi_tiet')->get();
//		dd($giohangchitiet);
		return view('admin.don_hang',['order' => $order,'giohangchitiet' => $giohangchitiet]);
	}
}
