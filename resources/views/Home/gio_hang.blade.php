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
			<center><h3>GIỎ HÀNG</h3></center>
			<table style="width: 90%; height: max-height;border: 2px solid; margin: auto">
				<tr style="border: 1px solid">
					<td style="border: 1px solid; text-align: center;"><strong>Hình ảnh</strong></td>
					<td style="border: 1px solid; text-align: center;"><strong>Sản phẩm</strong></td>
					<td style="border: 1px solid; text-align: center;"><strong>Giá</strong></td>
					<td style="border: 1px solid; text-align: center;"><strong>Color</strong></td>
					<td style="border: 1px solid; text-align: center;"><strong>Size</strong></td>
					<td style="border: 1px solid; text-align: center;"><strong>Số lượng</strong></td>
					<td style="border: 1px solid; text-align: center;"><strong>Thành tiền</strong></td>
					<td style="border: 1px solid; text-align: center;"><strong>Xóa</strong></td>
				</tr>
				<tr>
					<td style="border: 1px solid; text-align: center;">ád</td>
					<td style="border: 1px solid; text-align: center;">ád</td>
					<td style="border: 1px solid; text-align: center;">ád</td>
					<td style="border: 1px solid; text-align: center;">ád</td>
					<td style="border: 1px solid; text-align: center;">ád</td>
					<td style="border: 1px solid; text-align: center;">ád</td>
					<td style="border: 1px solid; text-align: center;">ád</td>
					<td style="border: 1px solid; text-align: center;">
						<p>
							<i class="fa fa-trash remove-cart"></i>
						</p>
					</td>
				</tr>
			</table>
		<br>
			@include('home.footer')
	</div>
</body>
</html>