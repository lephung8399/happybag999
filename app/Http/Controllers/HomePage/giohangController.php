<?php

namespace App\Http\Controllers\HomePage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class giohangController extends Controller
{
    public function index(){
    	return view('Home.gio_hang');
    }

}
