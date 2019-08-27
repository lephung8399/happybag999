<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\giohangchitietModel;
use App\Model\giohangModel;
use App\Model\hoadonModel;
use App\Model\san_phamModel;
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
	public function  delete($id){
		$order = hoadonModel::find($id);
		$order->delete();
		return redirect()->route('admin.don_hang');
	}
	public function view_don_hang($id){
		$order = hoadonModel::where('id',$id)->first();
//		dd($order);
		$giohangchitiet = giohangchitietModel::where('id',$order->id_gio_hang_chi_tiet)->first();
//		dd($giohangchitiet);

		$giohang = giohangModel::where('id',$giohangchitiet->id_gio_hang)->first();
//		dd($giohang);

		$sanpham = san_phamModel::where('id',$giohang->id_san_pham)->first();
//		dd($sanpham);
		return view('admin.view_don_hang',['order' => $order,
												'giohangchitiet' => $giohangchitiet,
												'giohang' => $giohang,
												'sanpham' => $sanpham]);
	}

	public  function process_update_don_hang($id){
		$donhang = hoadonModel::find($id);
		$donhang->ho_ten = request('ho_ten');
		$donhang->email = request('email');
		$donhang->dia_chi = request('dia_chi');
		$donhang->tinh_thanh = request('tinh_thanh');
		$donhang->so_dien_thoai = request('so_dien_thoai');
		$donhang->ghi_chu = request('ghi_chu');
		$donhang->tinh_trang = request('tinh_trang');
//        dd($donhang);
		$donhang->save();
		return redirect()->route('admin.view_don_hang',$id);
	}
}
