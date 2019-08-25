<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/detail_product.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/modal.css')}}">



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<script src="https://kit.fontawesome.com/16e84f8131.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" href="{{asset('OwlCarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('OwlCarousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css')}}">
	<script src="{{asset('OwlCarousel/docs/assets/vendors/jquery.min.js')}}"></script>
	<script src="{{asset('OwlCarousel/docs/assets/owlcarousel/owl.carousel.min.js')}}"></script>
	<style>
		@import url(http://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);
	</style>
	<style>
	.main{
		width: 70%;
		height: 400px;
		background-color: ;
	}
		#dat_hang_thanh_cong{
			width: 80%;
			height: 100%;
			background-color: ;
			margin: auto;
		}

	</style>
</head>
<body>
@include('home.header')
<div class="main">
	<div id="dat_hang_thanh_cong">
		<h1 style="color: lawngreen; margin: auto;text-align: center"><b>Đặt hàng thành công</b></h1>
		<center><img src="{{asset('images/dat_hang_thanh_cong.JPG')}}" alt="" style="width: 250px; height: 218px"></center>
		<center><span style="font-size: 18px">Chúng tôi sẽ liên hệ để xác nhận đơn hàng trong thời gian sớm nhất</span></center>
	</div>
</div>
@include('home.footer')
</body>
</html>
