@extends('layouts.master')
@section('header')
@section('content')
	<h2>Mã Hóa Đơn: {{$order->id}}</h2>
<div>
	<form action="{{route('admin.process_update_don_hang',$order->id)}}" method="POST">
		{{csrf_field()}}
		<div class="form-row">

			<div class="form-group col-md-6">
				<label for="">Tên khách hàng</label>
				<input type="text" class="form-control" id="inputEmail4" name="ho_ten" value="{{$order->ho_ten}}">
{{--				<input type="hidden" value="{{$order->id}}">--}}
			</div>
			<div class="form-group col-md-6">
				<label for="">Email</label>
				<input type="email" class="form-control" id="inputPassword4" name="email" value="{{$order->email}}">
			</div>

		</div>
		<!-- Default input -->
		<div class="form-group">
			<label for="">Địa chỉ</label>
			<input type="text" class="form-control" id="inputAddress" name="dia_chi" value="{{$order->dia_chi}}">
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="">Tỉnh thành</label>
				<input type="text" class="form-control" id="inputCity" name="tinh_thanh" value="{{$order->tinh_thanh}}">
			</div>
			<div class="form-group col-md-6">
				<label for="">Số điện thoại</label>

				<div class="input-group mb-2 mr-sm-2">
					<div class="input-group-prepend">
						<div class="input-group-text">+84</div>
					</div>
					<input type="text" class="form-control" id="inputZip" name="so_dien_thoai" value="{{$order->so_dien_thoai}}">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="">Ghi chú</label>
			<input type="text" class="form-control" id="inputAddress2" name="ghi_chu" value="{{$order->ghi_chu}}">
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="">Sản Phẩm</label>
				<input type="text" class="form-control" id="inputCity" name="ten_san_pham" value="{{$sanpham->ten_san_pham}}" disabled="disabled">
			</div>
			<div class="form-group col-md-6">
				<label for="">Số Lượng</label>
				<input type="text" class="form-control" id="inputZip" name="so_luong" value="{{$giohang->so_luong}}" disabled="disabled">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="">Ngày đặt hàng</label>
				<input type="text" class="form-control" id="inputCity" name="created_at" value="{{$order->created_at->format('d/m/y H:i:s')}}" disabled="disabled">
			</div>
			<div class="form-group col-md-6">
				<label for="">Tình trạng</label><br>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" class="custom-control-input" id="defaultInline1" name="tinh_trang"
						@if($order->tinh_trang == 1)
						checked="checked" @endif value="1"
					>
					<label class="custom-control-label" for="defaultInline1">Đã hoàn thành</label>
				</div>

				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" class="custom-control-input" id="defaultInline2" name="tinh_trang"
						   @if($order->tinh_trang == 0)
						   checked="checked" @endif value="0"
					>

					<label class="custom-control-label" for="defaultInline2">Đang xử lí...</label>
				</div>
			</div>
		</div>
		<div class="form-row">

			<div class="form-group col-md-6">
				<label for="">Phương thức thanh toán</label>
				<input type="text" class="form-control" id="inputCity" name="" disabled="disabled" value=" Thanh toán khi giao hàng (COD)">
			</div>
			<div class="form-group col-md-6">
				<label for="">Tổng số tiền</label>
				<input type="text" class="form-control" id="inputCity" name="" disabled="disabled" value="{{$order->tong_tien}} VNĐ">
			</div>

		</div>
		<button class="btn btn-danger">
			<a href="{{ URL::previous() }}">
				Quay Lại
			</a>
		</button>
		<span style="margin-left: 325px">
			<button type="submit" class="btn btn-info btn-rounded" style="width: 200px; ">Cập nhật</button>
		</span>

	</form>
</div>




@endsection
