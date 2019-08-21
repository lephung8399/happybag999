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
}
