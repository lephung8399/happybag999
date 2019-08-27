@extends('layouts.master')
@section('header')
@section('content')
	<style>
		.number-input input[type="number"] {
			-webkit-appearance: textfield;
			-moz-appearance: textfield;
			appearance: textfield;
		}

		.number-input input[type=number]::-webkit-inner-spin-button,
		.number-input input[type=number]::-webkit-outer-spin-button {
			-webkit-appearance: none;
		}

		.number-input {
			margin-bottom: 3rem;
		}

		.number-input button {
			-webkit-appearance: none;
			background-color: transparent;
			border: none;
			align-items: center;
			justify-content: center;
			cursor: pointer;
			margin: 0;
			position: relative;
		}

		.number-input button:before,
		.number-input button:after {
			display: inline-block;
			position: absolute;
			content: '';
			height: 2px;
			transform: translate(-50%, -50%);
		}

		.number-input button.plus:after {
			transform: translate(-50%, -50%) rotate(90deg);
		}

		.number-input input[type=number] {
			text-align: center;
		}

		.number-input.number-input {
			border: 1px solid #ced4da;
			width: 10rem;
			border-radius: .25rem;
		}

		.number-input.number-input button {
			width: 2.6rem;
			height: .7rem;
		}

		.number-input.number-input button.minus {
			padding-left: 10px;
		}

		.number-input.number-input button:before,
		.number-input.number-input button:after {
			width: .7rem;
			background-color: #495057;
		}

		.number-input.number-input input[type=number] {
			max-width: 4rem;
			padding: .5rem;
			border: 1px solid #ced4da;
			border-width: 0 1px;
			font-size: 1rem;
			height: 2rem;
			color: #495057;
		}

		@media not all and (min-resolution:.001dpcm) {
			@supports (-webkit-appearance: none) and (stroke-color:transparent) {

				.number-input.def-number-input.safari_only button:before,
				.number-input.def-number-input.safari_only button:after {
					margin-top: -.3rem;
				}
			}
		}
	</style>
<form action="{{route('admin.san_pham_process_update',$san_pham->id)}}" method="POST">
	{{csrf_field()}}

		<!-- Grid row -->
		<div class="form-row">
			<!-- Default input -->
			<div class="form-group col-md-6">
				<label for="">Tên sản phẩm</label>
				<input type="text" class="form-control" id="" value="{{$san_pham->ten_san_pham}}" placeholder="Nhập tên sản phẩm..." name="ten_san_pham">
			</div>
			<!-- Default input -->
			<div class="form-group col-md-6">
				<label for="">Giá</label>
				<input type="number" class="form-control" id="" value="{{$san_pham->gia}}" placeholder="Nhập giá sản phẩm..." name="gia">
			</div>
		</div>

		<div class="form-row">
			<!-- Default input -->
			<div class="form-group col-md-6">
				<label for="">Loại sản phẩm</label>
				<select class="browser-default custom-select" name="id_loai">
					<option>--- Chọn loại sản phẩm --- </option>
					<option value="1"
						@if($san_pham->id_loai == 1)
							selected="selected"
						@endif>
						Vali
					</option>
					<<option value="2"
							 @if($san_pham->id_loai == 2)
							 selected="selected"
						@endif>
						Túi xách
					</option>
					<<option value="3"
							 @if($san_pham->id_loai == 3)
							selected="selected"
						@endif>
						Balo
					</option>
					<option value="4"
							@if($san_pham->id_loai == 4)
							selected="selected"
						@endif>
						Phụ kiện du lịch
					</option>
				</select>
			</div>
			<div class="form-group col-md-6">
					<label for="">Số lượng</label>
					<div class="def-number-input number-input safari_only">
						<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
						<input class="quantity" min="0" name="so_luong" value="{{$san_pham->so_luong}}" type="number" >
						<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
					</div>

			</div>

		</div>
		<div class="form-row">
			<div class="col">
				<label for="">Kiểu dáng</label>
				<input type="text" class="form-control" id="" placeholder="Nhập kiểu dáng sản phẩm..." name="kieu_dang" value="{{$san_pham->kieu_dang}}">
			</div>
			<div class="col">
				<label for="">Chất liệu</label>
				<input type="text" class="form-control" id="" placeholder="Nhập chất liệu sản phẩm..." name="chat_lieu" value="{{$san_pham->chat_lieu}}">
			</div>
			<div class="col">
				<label for="">Màu sắc</label>
				<input type="text" class="form-control" id="" placeholder="Nhập màu sắc sản phẩm..." name="mau_sac" value="{{$san_pham->mau_sac}}">
			</div>
			<div class="col">
				<label for="">Size</label>
				<input type="text" class="form-control" id="" placeholder="Nhập size sản phẩm..." name="size" value="{{$san_pham->size}}">
			</div>
		</div>
		<div class="form-group">
			<label for="">Mô tả</label>
			<textarea class="form-control" id=""  style="height: 100px" name="mo_ta" placeholder="Nhập mô tả sản phẩm...">{{$san_pham->mo_ta}}</textarea>
		</div>
		<div class="form-group">
			<div class="form-group col-md-6">
				<label for="">Tình trạng</label><br>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" class="custom-control-input" id="" name="tinh_trang"
							@if($san_pham->tinh_trang ==1)
						   checked="checked"  value="1"
						   @endif
					>
					<label class="custom-control-label" for="">Còn hàng</label>
				</div>

				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" class="custom-control-input" id="" name="tinh_trang"
						   @if($san_pham->tinh_trang ==0)
						   checked="checked" value="0"
						   @endif
					>

					<label class="custom-control-label" for="">Hết hàng</label>
				</div>
			</div>
		</div>
		<br>
		<div class="form-group">
			<button class="btn btn-success" type="submit">
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
