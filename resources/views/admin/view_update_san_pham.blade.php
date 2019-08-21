@extends('layouts.master')
@section('header')
@section('content')
<form action="{{ route('admin.PROCESS_update') }}" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	<b>Tên sản phẩm:</b><input type="text" name="ten_san_pham" class="form-control" style="width: 50%" value="{{$san_pham->ten_san_pham}}">
	<br>
	<input type="hidden" name="ma" value="{{$san_pham->ma}}">
	<b>Giá:</b><input type="number" name="gia" class="form-control" style="width: 50%">
	<br>
	<b>Loại:</b> <select name="ma_loai" id="" style="width: 30%" class="form-control">
				<option value="-1">--Loại--</option>
				<option value="1">VALI</option>
				<option value="2">TÚI XÁCH</option>
				<option value="3">BALO</option>
				<option value="4">PHỤ KIỆN DU LỊCH</option>
				
		  </select>
	<br>
	<p></p>
	<b>Kiểu dáng:</b><input type="text" name="kieu_dang" class="form-control" style="width: 50%" value="">
	<br>
	<b>Chất liệu:</b><input type="text" name="chat_lieu" class="form-control" style="width: 50%">
	<br>
	<b>Màu sắc:</b><input type="text" name="mau_sac" class="form-control" style="width: 50%">
	<br>
	<b>Size:</b><input type="text" name="size" class="form-control" style="width: 50%">
	<br>
	<textarea name="mo_ta" style="width: 50%; height: 200px" placeholder="Mô tả..."></textarea>
	<br>
	<b>Ảnh:</b><input type="file" name="anh" class="form-control" style="width: 50%" multiple>
	<br>
	<b>Số lượng:</b><input type="number" name="so_luong" class="form-control" style="width: 50%">
	
	<br>
	<input type="hidden" name="tinh_trang"  value="1" class="form-control" style="width: 50%"><br>
	<div class="form-group">
		<button class="btn btn-success">
			Sửa
		</button>
		<button class="btn btn-danger">
			<a href="{{ URL::previous() }}">
				Quay Lại
			</a>
		</button>
	</div>
</form>
@endsection