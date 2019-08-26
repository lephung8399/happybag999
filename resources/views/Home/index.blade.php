<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sudo</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('css/responsive_header.css')}}">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  <style>
	  /* Make the image fully responsive */
	  .carousel-inner img {
	      width: 100%;
	      height: 100%;
	  }
	  </style>

	<script src="https://kit.fontawesome.com/16e84f8131.js"></script>
	<!-- Slide product -->
	<link rel="stylesheet" href="OwlCarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="OwlCarousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
	<script src="{{asset('OwlCarousel/docs/assets/vendors/jquery.min.js')}}"></script>
	<script src="{{asset('OwlCarousel/docs/assets/owlcarousel/owl.carousel.min.js')}}"></script>


</head>
<body>
	<div class="main">
			@include('home.header')

			<main class="main_body">
				<div class="slide">
					<!-- <img src="public/images/slide.JPG" style="width: 1870px; height: 710px"> -->
					<!-- slide show -->
					<div id="demo" class="carousel slide" data-ride="carousel">

					  <!-- Indicators -->
					  <ul class="carousel-indicators">
					    <li data-target="#demo" data-slide-to="0" class="active"></li>
					    <li data-target="#demo" data-slide-to="1"></li>
					    <li data-target="#demo" data-slide-to="2"></li>
					  </ul>

					  <!-- The slideshow -->
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="{{asset('images/slide.JPG')}}" alt="Los Angeles" width="1100" height="500">
					    </div>
					    <div class="carousel-item">
					      <img src="{{asset('images/slide.JPG')}}" alt="Chicago" width="1100" height="500">
					    </div>
					    <div class="carousel-item">
					      <img src="{{asset('images/bag.JPG') }}" alt="New York" width="1100" height="500">
					    </div>
					  </div>

					  <!-- Left and right controls -->
					  <a class="carousel-control-prev" href="#demo" data-slide="prev">
					    <span class="carousel-control-prev-icon"></span>
					  </a>
					  <a class="carousel-control-next" href="#demo" data-slide="next">
					    <span class="carousel-control-next-icon"></span>
					  </a>
					</div>
				</div>
				<p>
				<div class="block">
					<div class="tittle">
						<center><h5 style="color: red">BỘ SƯU TẬP MỚI </h5></center>
						<center><h1>BÁN CHẠY NHẤT </h1></center>
					</div>
					<div class="product">

						<div class="owl-carousel">
							@foreach ($array as $sanpham)
							<label><a href="{{ route("product_detail",$sanpham->id) }}" style="color: black">
						  <div>
						  	<div class="zoom_image" style="width: 100%; height: 100%">
						  		<img src="{{ asset('images/' . $sanpham->anh ) }}" style="width: 100%; height: 100%">
						  	</div>

						  	<center>
						  		<!-- rating star -->
							  	<div class="container">
							  		<div class="row">
									    <div class="col-lg-12">
									      <span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
									    </div>
								  </div>
								</div>
								<!-- Tên SP -->

								{{$sanpham->ten_san_pham}}<br>

								<b>{{$sanpham->gia}}đ</b>
							</center>

						  </div>
						  </a></label>
						  @endforeach
						</div>



					</div>
						<div class="row" id="category">
							@foreach ($array_loai as $ten_loai)
							<div class="col" id="category1">
								<a href="{{route('product_list',$ten_loai->id)}}" style="text-decoration: none;color: black">{{$ten_loai->ten_loai}}</a>
							</div>
							@endforeach
							<div class="col" id="category2">
								<a href="#" style="text-decoration: none;color: black">HÀNG MỚI</a>
							</div>
							<div class="col" id="category3">
								<a href="#" style="text-decoration: none;color: black">NHẬN ĐẶT HÀNG</a>
							</div>

						</div>


						<div class="tittle">
							<center><h5 style="color: red">XU HƯỚNG</h5></center>
							<center><h1>BALO</h1></center>
						</div>

						<div class="product">

						<div class="owl-carousel">
						@foreach($vali as $array_vali)
						  <div>
						  	<div class="zoom_image" style="width: 100%; height: 100%">
						  		<img src="{{ asset('images/' . $array_vali->anh ) }}">

						  	</div>

						  	<center>
						  		<!-- rating star -->
						  	<div class="container">
						  		<div class="row">
								    <div class="col-lg-12">
								      <span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
								    </div>
							  </div>
							</div>
								<!-- Tên SP -->
								{{$array_vali->ten_san_pham}} <br>
								<!-- Giá sp -->
								<b>{{$array_vali->gia}}đ</b>
							</center>
						  </div>
						@endforeach


						</div>


					</div>
						<div class="row" id="category">
							@foreach($array_loai as $ten_loai)
							<div class="col" id="category1"><a href="{{route('product_list',$ten_loai->id)}}" style="text-decoration: none; color: black"><strong>{{$ten_loai->ten_loai}}</strong></a></div>
							@endforeach
							<div class="col" id="category5">HÀNG MỚI</div>
						</div>

						<div class="tittle">
							<center><h5 style="color: red">MỚI NHẤT</h5></center>
							<center><h1>TIN TỨC</h1></center>
						</div>
						<div class="product">

						<div class="owl-carousel">
						  <div><img src="{{asset('images/baggg.JPG')}}">

						  	<center>
						  		<!-- rating star -->
						  	<div class="container">						  	<div class="row">
							    <div class="col-lg-12">
							      <div class="star-rating">
							        <span class="fa fa-star-o" data-rating="1"></span>
							        <span class="fa fa-star-o" data-rating="2"></span>
							        <span class="fa fa-star-o" data-rating="3"></span>
							        <span class="fa fa-star-o" data-rating="4"></span>
							        <span class="fa fa-star-o" data-rating="5"></span>
							        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
							      </div>
							    </div>
							  </div>
							</div>
								<!-- Tên SP -->
								Balo Santan Barbara SBL98273 <br>
								<!-- Giá sp -->
								<b>3900000đ</b>
						</center>
						  </div>
						  <div> <img src="public/images/baggg.JPG">
						  	<center>
						  		<!-- rating star -->
						  	<div class="container">						  	<div class="row">
							    <div class="col-lg-12">
							      <div class="star-rating">
							        <span class="fa fa-star-o" data-rating="1"></span>
							        <span class="fa fa-star-o" data-rating="2"></span>
							        <span class="fa fa-star-o" data-rating="3"></span>
							        <span class="fa fa-star-o" data-rating="4"></span>
							        <span class="fa fa-star-o" data-rating="5"></span>
							        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
							      </div>
							    </div>
							  </div>
							</div>
								<!-- Tên SP -->
								Balo Santan Barbara SBL98273 <br>
								<!-- Giá sp -->
								<b>3900000đ</b>
						</center>

						   </div>
						  <div> <img src="public/images/baggg.JPG">
						  		<center>
						  		<!-- rating star -->
						  	<div class="container">						  	<div class="row">
							    <div class="col-lg-12">
							      <div class="star-rating">
							        <span class="fa fa-star-o" data-rating="1"></span>
							        <span class="fa fa-star-o" data-rating="2"></span>
							        <span class="fa fa-star-o" data-rating="3"></span>
							        <span class="fa fa-star-o" data-rating="4"></span>
							        <span class="fa fa-star-o" data-rating="5"></span>
							        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
							      </div>
							    </div>
							  </div>
							</div>
								<!-- Tên SP -->
								Balo Santan Barbara SBL98273 <br>
								<!-- Giá sp -->
								<b>3900000đ</b>
						</center>

						  </div>
						  <div> <img src="public/images/baggg.JPG"> </div>
						  <div> <img src="public/images/baggg.JPG"> </div>
						  <div> <img src="public/images/baggg.JPG"></div>
						  <div> <img src="public/images/baggg.JPG"> </div>
						</div>


						</div>
						<div id="serviceee">
							<div id="serviceee1">
								<center>
									<img src="{{asset('images/serviceee1.JPG')}}">
									<p><b>MIỄN PHÍ VẬN CHUYỂN</b></p>
									<p>Cho đơn hàng từ 500.000đ. Xem hàng trước khi thanh toán.</p>
								</center>
							</div>
							<div id="serviceee2">
								<center>
									<img src="{{asset('images/serviceee2.JPG')}}">
									<p><b>MIỄN PHÍ VẬN CHUYỂN</b></p>
									<p>Cho đơn hàng từ 500.000đ. Xem hàng trước khi thanh toán.</p>
								</center>
							</div>
							<div id="serviceee3">
								<center>
									<img src="{{asset('images/serviceee3.JPG')}}">
									<p><b>MIỄN PHÍ VẬN CHUYỂN</b></p>
									<p>Cho đơn hàng từ 500.000đ. Xem hàng trước khi thanh toán.</p>
								</center>
							</div>
							<div id="serviceee4">
								<center>
									<img src="{{asset('images/serviceee4.JPG')}}">
									<p><b>MIỄN PHÍ VẬN CHUYỂN</b></p>
									<p>Cho đơn hàng từ 500.000đ. Xem hàng trước khi thanh toán.</p>
								</center>
							</div>
						</div>
				</div>
			</main>

			@include('home.footer')

	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			  $(".owl-carousel").owlCarousel();
			});
				</script>
				<script type="text/javascript">
					$('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    nav:true,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:3
			        },
			        1000:{
			            items:4
			        }
			    }
			})
	</script>




</body>
</html>




