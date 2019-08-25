<?php

namespace App\Http\Controllers\HomePage;
use App\Http\Controllers\Controller;

use App\Model\giohangchitietModel;
use App\Model\giohangModel;
use App\Model\san_phamModel;
use Illuminate\Http\Request;

class giohangchitietController extends Controller
{
    public function  giohangchitiet_index($id){
        $giohang = giohangModel::findOrfail($id);
        $sanpham = san_phamModel::find($giohang->id_san_pham);
        $giohangchitiet = new giohangchitietModel();
        $giohangchitiet->so_san_pham = $giohang->so_luong;
        $giohangchitiet->id_gio_hang= $giohang->id;
        $giohangchitiet->tinh_trang = '0';
        $giohangchitiet->save();
//         dd($sanpham);
//        dd($giohang);
        return view("Home.thanh_toan",['giohang' => $giohang,'sanpham'=>$sanpham]);
    }
}
