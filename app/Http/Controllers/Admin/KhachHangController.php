<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\khachhangModel;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function  view_all() {
        $array = khachhangModel::all();
    	return view("admin.khach_hang",['array' => $array]);
    }

    public  function  profile_id($id){
    	$profile = khachhangModel::where('id',$id)->first();
//    	dd($profile);
    	return view('admin.profile',['profile' => $profile]);
	}
	public  function  process_update_profile($id){
		$profile_update = khachhangModel::find($id);
		$profile_update->email = request('email');
		$profile_update->name = request('name');
		$profile_update->dia_chi = request('dia_chi');
		$profile_update->sdt = request('sdt');
		$profile_update->gioi_tinh = request('gioi_tinh');
//        dd($profile_update);
		$profile_update->save();
		return redirect()->route('admin.profile', $id);
	}
}
