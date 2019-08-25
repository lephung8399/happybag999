<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\san_phamModel;
use Illuminate\Http\Request;
// use Request;
use Storage;

class san_phamController extends Controller
{

    public function  view_all() {
    	$array = san_phamModel::all();
    	// dd($array);
    	return view("admin.san_pham",['array' => $array]);
    }
    public function view_insert()
	{
		return view("admin.view_insert_san_pham");
	}
	public function process_insert(Request $request)
	{
		$san_pham                = new san_phamModel();
        $san_pham->ten_san_pham = request('ten_san_pham');
        $san_pham->gia = request('gia');
        $san_pham->id_loai = request('id_loai');
        $san_pham->kieu_dang = request('kieu_dang');
        $san_pham->chat_lieu = request('chat_lieu');
        $san_pham->mau_sac = request('mau_sac');
        $san_pham->size = request('size');
        $san_pham->mo_ta = request('mo_ta');
        $san_pham->so_luong = request('so_luong');
        $san_pham->tinh_trang = request('tinh_trang');
		$san_pham->save();
		//điều hướng

		return redirect()->route('admin.sanpham');
	}
	public function delete($id){
		san_phamModel::where('id',$id)->delete();

		//điều hướng
		return redirect()->route('admin.sanpham');
	}
	PUBLIC function view_update($id = null)
    {
        // $san_pham = new san_phamModel();
        // $san_pham->ma = $ma;
        // $array_sanpham = $san_pham->do_getOne();
        // // dd($array_sanpham);
        // if ($array_sanpham !== null) {
        //     return view("admin.view_update_san_pham", ['array' => $array_sanpham]);
        // } else {
        //     return redirect()->route('admin.sanpham');
        // }

        $san_pham = san_phamModel::where('id',$id)->first();
        // dd($san_pham->ten_san_pham);
        if (!empty($san_pham)) {
            return view("admin.view_update_san_pham", ['san_pham' => $san_pham]);
        } else {
            return redirect()->route('admin.sanpham');
        }
    }

    PUBLIC function PROCESS_update($id)
    {
            $san_pham = san_phamModel::findOrfail($id);

            $san_pham->ten_san_pham = request('ten_san_pham');
            $san_pham->gia = request('gia');
            $san_pham->id_loai = request('id_loai');
            $san_pham->kieu_dang = request('kieu_dang');
            $san_pham->chat_lieu = request('chat_lieu');
            $san_pham->mau_sac = request('mau_sac');
            $san_pham->size = request('size');
            $san_pham->mo_ta = request('mo_ta');
            $san_pham->so_luong = request('so_luong');
            $san_pham->tinh_trang = request('tinh_trang');
        $san_phamt->save();

        return redirect()->route('admin.sanpham');
    }
    public function upload_image($id = null){

    	$san_pham = san_phamModel::where('id',$id)->first();
        // dd($san_pham->ten_san_pham);
        if (!empty($san_pham)) {
            return view("admin.view_upload_sanpham", ['san_pham' => $san_pham]);
        } else {
            return redirect()->route('admin.sanpham');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [

                'anh' => 'required',
                'anh.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if($request->hasfile('anh'))
         {

            foreach($request->file('anh') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
            }
         }
         // dd($image);

         $sanpham = san_phamModel::where('id',$request->id);
         $sanpham->update([
            'anh' => $name
         ]);

        // dd($sanpham);
        return redirect()->route('admin.sanpham');
//        return back()->with('success', 'Your images has been successfully');
    }

}
