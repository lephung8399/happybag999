@extends('layouts.master')
@section('header')
@section('content')

<table class="table table-striped" style="width: 100%">
<caption>
		<a href="{{ route('admin.insert_sanpham') }}">
			<button class="btn btn-success">
				Thêm Sản Phẩm
			</button>
		</a>
</caption>

<div class="product-block">
    	<div class="pro-head">
    		<h2>Products</h2>
    	</div>
    	@foreach($array as $san_pham)
    	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/pro1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="" alt="">
					</div>
	    		<div class="produ-cost">
	    			<h4>{{$san_pham->ten_san_pham}}</h4>
	    			<h5>{{$san_pham->gia}} $</h5>
	    		</div>
	    		<div class="produ-cost">
	    			<a href="{{ route('admin.view_update',['ma' => $san_pham->ma]) }}"><button type="button" class="btn btn-info">Sửa</button></a>
	    			<a href="{{ route('admin.delete_sanpham',['ma' => $san_pham->ma]) }}"><button type="button" class="btn btn-danger">Xóa</button></a><br>	
					<a href="{{ route('admin.upload_image',['ma' => $san_pham->ma]) }}"><button type="button" class="btn btn-success" >Thêm Ảnh</button></a>
				</div>
    		</div>
    	</div>
    	@endforeach
      <div class="clearfix"> </div>
    </div>
</table>
@endsection