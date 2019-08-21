@extends('layouts.master')
@section('header')


@section('content')

<div class="row">
	<div class="col-md-12">
		<table class="table table-striped">
			
			<tr>
				<th>Mã</th>
				<th>Tên Loại</th>
				<th>Chức Năng</th>
				
			</tr>
			@foreach ($array as $loai)
				<form action="{{ route('admin.loai.process_update_loai',$loai->ma) }}" method="post">
					{{csrf_field()}}
					<tr>
						<td>
							<input type="hidden" name="ma" class="form-control" value="{{$loai->ma}}">
							{{$loai->ma}}</td>
						<td>
							<input type="text" name="ten_loai" value="{{$loai->ten_loai}}" class="form-control">
						</td>
						<td>
								<button type="submit" class="btn btn-info">Sửa</button>
						</td>
					</tr>
				</form>
			@endforeach
			<form method="post" action="{{ route('admin.loai.process_insert_loai') }}">
				{{csrf_field()}}
				<tr>
					<td></td>
					<td>
						<input type="text" name="ten_loai" value="" class="form-control" placeholder="Nhập tên thể loại...">
						
					</td>
					<td>
						<button type="submit" class="btn btn-success">
							Thêm Loại
						</button>
					</td>
				</tr>
			</form>
		</table>
	</div>
</div>
@endsection