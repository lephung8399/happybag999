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
		$san_pham->ten_san_pham = Request::get('ten_san_pham');
		$san_pham->gia          = Request::get('gia');
		$san_pham->ma_loai        = Request::get('ma_loai');
		$san_pham->kieu_dang        = Request::get('kieu_dang');
		$san_pham->chat_lieu        = Request::get('chat_lieu');
		$san_pham->mau_sac        = Request::get('mau_sac');
		$san_pham->size        = Request::get('size');
		$san_pham->mo_ta        = Request::get('mo_ta');
		$san_pham->anh        = "CXACAC";
		$san_pham->so_luong        = Request::get('so_luong');
		$san_pham->tinh_trang        = Request::get('tinh_trang');
		$san_pham->save();		

		//điều hướng
		// dd($san_pham);
		return redirect()->route('admin.sanpham');
	}
	public function delete($id){
		san_phamModel::where('id',$id)->delete();

		//điều hướng
		return redirect()->route('admin.sanpham');
	}
	PUBLIC function view_update($ma = null)
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

    PUBLIC function PROCESS_update()
    {
        $san_pham = san_phamModel::where('id',Request::get('id'))->first();

        $san_pham->update([
        	"ten_san_pham " => Request::get('ten_san_pham'),
			"gia          " => Request::get('gia'),
			"ma_loai        " => Request::get('ma_loai'),
			"kieu_dang        " => Request::get('kieu_dang'),
			"chat_lieu        " => Request::get('chat_lieu'),
			"mau_sac        " => Request::get('mau_sac'),
			"size        " => Request::get('size'),
			"mo_ta        " => Request::get('mo_ta'),
			"anh        " => "CXACAC",
			"so_luong        " => Request::get('so_luong'),
			"tinh_trang        " => Request::get('tinh_trang'),
        ]);

        return redirect()->route('admin.sanpham');
    }
    public function upload_image($ma = null){
    	
    	$san_pham = san_phamModel::where('id',$id)->first();
        // dd($san_pham->ten_san_pham);
        if (!empty($san_pham)) {
            return view("admin.view_upload_sanpham", ['san_pham' => $san_pham]);
        } else {
            return redirect()->route('admin.sanpham');
        }
    }
    // public function process_upload_image(Request $request){
    // 	$file = Request::file('anh');
    // 	$path = Storage::disk('public/img')->put('',$file);
    // 	$san_pham = san_phamModel::where('ma',Request::get('ma'))->first();
    // 	$san_pham->anh = 'anh';
    // 	$san_pham->save();

    // 	return $path;




    //     $file = $request->file('anh');
    //     $duoi = $file->getClientOriginalExtension();
    //     if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
    //         return redirect('admin/thongtinadmin/'.$id)->with('loi','Bạn chỉ chọn được file jpg,jpeg,png');
    //     }
    //     $name = $file->getClientOriginalName();// lấy cả đuôi luôn

    //     $tenHinh = str_random(4)."_".$name;
    //     while (file_exists("upload/user/".$tenHinh)) {
    //         $tenHinh = str_random(4)."_".$name;
    //     }
    //     $file->move("upload/user",$tenHinh);
    //     $san_pham = san_phamModel::where('ma',Request::get('ma'))->first();
    //     $san_pham->anh = "upload/user/".$tenHinh;
    //     $san_pham->save();
    	   
    // }
    public function process_upload_image(Request $request)
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

         $sanpham = san_phamModel::where('id',$request->id);
         $sanpham->update([
            'anh' => $name
         ]);

        // dd($sanpham);
        return back()->with('success', 'Your images has been successfully');
    }

}
