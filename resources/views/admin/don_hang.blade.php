@extends('layouts.master')
@section('header')
@section('content')
	<h2>Order List</h2>

	<table id="example">
		<thead>
			<tr>
				<th>ID Order</th>
				<th>Thông tin đơn hàng</th>
				<th>Ghi chú</th>
				<th>Ngày đặt hàng</th>
				<th>Tổng hóa đơn</th>
				<th>Trạng thái</th>
			</tr>
		</thead>
		<tbody>
		@foreach($order as $array)
			<tr>
				<td>{{$array->id}}</td>
				<td>
					<b>{{$array->ho_ten}}</b><br>
						{{$array->dia_chi}} - {{$array->tinh_thanh}}<br>
						{{$array->so_dien_thoai}} <br>
						{{$array->email}}<br>
						<a href="{{ route('admin.view_don_hang',['id' => $array->id]) }}">Xem</a>
						<a href="{{ route('admin.delete_don_hang',['id' => $array->id]) }}">Xóa</a>
				</td>
				<td>{{$array->ghi_chu}}</td>
				<td>{{$array->created_at->format('d/m/y H:i:s')}}</td>
				<td>{{$array->tong_tien}} VNĐ</td>

				<td>
					@if($array->tinh_trang == 1)
						Đã hoàn thành
					@else
						Đang xử lí...
					@endif
				</td>

			</tr>
		@endforeach
		</tbody>
	</table>
	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
	<script>
        $(function(){
            $("#example").dataTable();
        })
	</script>
	<!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

	<!-- jQuery -->
	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>

	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
@endsection
