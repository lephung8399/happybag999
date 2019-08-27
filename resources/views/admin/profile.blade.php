@extends('layouts.master')
@section('header')
@section('content')
	<form action="{{route('admin.profile_update',$profile->id)}}" method="POST">
		{{csrf_field()}}
		<!-- Grid row -->
		<div class="form-row">
			<!-- Default input -->
			<div class="form-group col-md-6">
				<label for="inputEmail4">Email</label>
				<input type="email" class="form-control" id="" placeholder="Nhập email của bạn..." value="{{$profile->email}}" name="email">
			</div>
			<!-- Default input -->
			<div class="form-group col-md-6">
				<label for="inputPassword4">Họ và tên</label>
				<input type="text" class="form-control" id="" placeholder="Nhập tên của bạn..." value="{{$profile->name}}" name="name">
			</div>
		</div>
		<!-- Grid row -->

		<!-- Default input -->
		<div class="form-group">
			<label for="inputAddress">Địa Chỉ</label>
			<input type="text" class="form-control"  placeholder="Nhập địa chỉ của bạn" value="{{$profile->dia_chi}}" name="dia_chi">
		</div>
		<!-- Default input -->
		<div class="form-row">
			<!-- Default input -->
			<div class="form-group col-md-6">
				<label for="inputEmail4">Số điện thoại</label>
				<input type="number" class="form-control" id="" placeholder="Nhập email của bạn..." value="{{$profile->sdt}}" name="sdt">
			</div>
			<!-- Default input -->
			<div class="form-group col-md-6">
				<label for="inputPassword4">Giới tính</label>
				<br>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" class="custom-control-input" id="defaultInline1" name="gioi_tinh"
						   @if($profile->gioi_tinh == 1)
						   checked="checked" @endif value="1"
					>
					<label class="custom-control-label" for="defaultInline1">Nam</label>
				</div>

				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" class="custom-control-input" id="defaultInline2" name="gioi_tinh"
						   @if($profile->gioi_tinh == 0)
						   checked="checked" @endif value="0"
					>

					<label class="custom-control-label" for="defaultInline2">Nữ</label>
				</div>
			</div>
		</div>
		<!-- Grid row -->
		<div class="form-row">
			<!-- Default input -->
			<div class="form-group col-md-6">
				<label for="inputCity">Ngày bắt đầu</label>
				<input type="text" class="form-control" id="inputCity" value="{{$profile->created_at}}" disabled="disabled">
			</div>
			<div class="form-group col-md-6">
				<label for="inputCity">Chức vụ</label>
				<input type="text" class="form-control" id="inputCity" value="Admin" disabled="disabled">
			</div>

		</div>
		<!-- Grid row -->
		<button type="submit" class="btn btn-success btn-md">Cập nhật</button>
	</form>
@endsection
