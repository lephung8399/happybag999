<?php

namespace App\Http\Controllers\HomePage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\san_phamModel;
use App\Model\loaiModel;



class homepageController extends Controller
{
    public function  index() {
    	$array = san_phamModel::all();
    	$array_loai = loaiModel::all();

    	return view("Home.index",['array' => $array,'array_loai' => $array_loai]);

    }
  	
}
