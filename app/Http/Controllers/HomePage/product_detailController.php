<?php

namespace App\Http\Controllers\HomePage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\san_phamModel;

class product_detailController extends Controller
{
    public function index($id){
    	$array = san_phamModel::all();
    	$sanpham = san_phamModel::find($id);
    	// $array = san_phamModel::where('ma',Request::get('ma'))
    	// dd($ma);
    	// dd($sanpham);
		return view("Home.product_detail",['array' => $array,'sanpham'=> $sanpham]);

    }
}
