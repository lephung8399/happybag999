<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\loaiModel;
// use Illuminate\Http\Request;
use Request;



class loaiController extends Controller
{
    public function  view_all() {
        $array = loaiModel::all();
    	return view("admin.loai",['array' => $array]);
    }
    // function process_update_loai($ma){
    // 	$loai = new loaiModel();
    // 	$loai->ma = $ma;
    // 	$loai->ten_loai = Request::post'ten_loai';
    // 	$loai->update();


    // 	return redirect()->route('admin.loai');
    // }
    public function process_insert_loai(){
        $loai                = new loaiModel();
        $loai->ten_loai = Request::get('ten_loai');
        $loai->save();

        //điều hướng
        // dd($loai);
        return redirect()->route('admin.loai');
    }
    public function process_update_loai($id){
        $loai = loaiModel::find($id);
		$loai->ten_loai = request('ten_loai');
//        dd($loai);
		$loai->save();
         return redirect()->route('admin.loai');
    }
}
