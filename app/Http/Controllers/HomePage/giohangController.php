<?php

namespace App\Http\Controllers\HomePage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\giohangModel;
use App\Model\san_phamModel;

class giohangController extends Controller
{
    // public function index(){
    // 	return view('Home.gio_hang');
    // }
	function add_item($id){
		$sp = san_phamModel::findOrfail($id);
		$giohang = new giohangModel();

	    $giohang->so_luong = request('so_luong');
	    $giohang->id_san_pham= $sp->id;
	    $giohang->save();
	     // dd($sp);
	    return view("Home.gio_hang",['giohang' => $giohang,'sp' => $sp]);

	}
	public function delete($id){

		giohangModel::where('id',$id)->delete();
		// dd($id);
		//điều hướng
		return redirect()->route('index');

	}
	public function thanh_toan(){
		return view('Home.thanh_toan');
	}


}
