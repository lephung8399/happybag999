<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/list_product.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/16e84f8131.js"></script>

</head>
<body>
<div class="main">
	@include('home.header')

	<div class="section">
		<div id="panel" style="background-image: url({{asset('images/panel.JPG')}}); background-repeat: repeat-x;text-align: center;">
			<div style="height: 50px; width: 100%; padding-top: 25px ">
					<span style="padding-top: 15px"><b>
					<a href="{{route('index')}}" style="text-decoration: none; color: #80786d; ">HOME</a> /
					<a href="" style="text-decoration: none; color: #80786d; ">
						@foreach($loailoai as $aaa)
						{{$aaa->ten_loai}}
						@endforeach
					</a></b>
					</span>
			</div>
		</div>
		<p>
			<div class="content">
				<div class="left">
					<div class="category_left">
						<table style=" border: 2px solid black; width: 100%; height: 100%;">
							<tr class="tr_table_category">
								<td  class="td_table_category" style="text-transform: uppercase;">túi xách</td>
								<td></td>
							</tr>
							<tr style="padding-left: 10px">
								<td class="td_table_category" >
									abcdc
								</td>
								<td>+</td>
							</tr>
							<tr  style="padding-left: 10px">
								<td class="td_table_category">abcdc</td>
								<td>+</td>
							</tr>
							<tr  style="padding-left: 10px">
								<td class="td_table_category">abcdc</td>
								<td>+</td>

							</tr>
						</table>
					</div>
					<div class="spacing_category">
					</div>
					<div class="filter">
						<table style=" border: 2px solid black; width: 100%; height: 100%;">
							<tr class="tr_table_category">
								<td class="td_table_category" style="text-transform: uppercase;">bộ lọc</td>
							</tr>
							<tr>
								<td>
									<table style="width: 100%; height: 100%; margin: auto">
										<tr style="height: 35px ;width: 100%">
											<td style="height: 35px; width: 100%; margin: auto;  text-align: center;">
												<div style="width: 90%; margin: auto; background-color: #f2e7d5">
													<a href="" style="text-decoration: none; color: black">
														X XÓA TẤT CẢ
													</a>
												</div>
											</td>
										</tr>
										<tr style="height: 120px; width: 100%; background-color: ">
											<td>
												<table>
													<tr>
														<td class="td_table_category"><b>KÍCH THƯỚC</b></td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> S(5)
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> M(4)
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> L(3)
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> XL(2)
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr style="height: 330px; width: 100% ; background-color: ">
											<td>
												<table>
													<tr>
														<td class="td_table_category"><b>MÀU SẮC</b></td>
													</tr>
													<tr>
														<td class="td_table_category" style="display: inline-block;">	<a href="#">
																<div style="width: 10px; height: 10px; background-color: #cfc4a6; border:1px; display: inline-block;"></div> Taupe</a>
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<div style="width: 10px; height: 10px; background-color: #f5f5dd; border:1px; display: inline-block;"></div> Beige
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<div style="width: 10px; height: 10px; background-color: #ffffff; border:1px; display: inline-block;"></div> White
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<div style="width: 10px; height: 10px; background-color: #faebd8; border:1px; display: inline-block;"></div> Off White
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<div style="width: 10px; height: 10px; background-color: #e84c3d; border:1px; display: inline-block;"></div> Red
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<div style="width: 10px; height: 10px; background-color: #434a54; border:1px; display: inline-block;"></div> Black
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<div style="width: 10px; height: 10px; background-color: #c09a6b; border:1px; display: inline-block;"></div> Camel
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<div style="width: 10px; height: 10px; background-color: #f39c11; border:1px; display: inline-block;"></div> Orange
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<div style="width: 10px; height: 10px; background-color: #5d9cec; border:1px; display: inline-block;"></div> Blue
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<div style="width: 10px; height: 10px; background-color: #a0d468; border:1px; display: inline-block;"></div> Green
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<div style="width: 10px; height: 10px; background-color: #f1c40f; border:1px; display: inline-block;"></div> Yellow
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<div style="width: 10px; height: 10px; background-color: #974b00; border:1px; display: inline-block;"></div> Brown
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<div style="width: 10px; height: 10px; background-color: #fccacd; border:1px; display: inline-block;"></div> Pink
														</td>
													</tr>

												</table>
											</td>
										</tr>
										<tr style="height: 200px; width: 100%">
											<td>
												<table>
													<tr>
														<td class="td_table_category"><b>KHOẢNG GIÁ</b></td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> $19.00 - $20.00 (1)
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> $29.00 - $30.00 (2)
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> $89.00 - $93.00 (1)
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> $92.00 - $113.00 (1)
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> $117.00 - $122.00 (1)
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> $125.00 - $130.00 (1)
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr style="height: 120px; width: 100%">
											<td>
												<table>
													<tr>
														<td class="td_table_category"><b>KÍCH THƯỚC</b></td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> 40x60cm(4)
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> 60x90cm(3)
														</td>
													</tr>
													<tr>
														<td class="td_table_category">
															<input type="checkbox" name=""> 80x120cm(4)
														</td>
													</tr>

												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
					<div class="spacing_category">
					</div>
					<div style="width: 100% ;background-color: blue; height: 275px">
						<img src="{{asset('images/20_off_all.JPG')}}" alt="" style="width: 100%; height: 100%">
					</div>
				</div>
				<div class="spacing"></div>
				<div class="right">
					<div class="describe">
						<h5>TÚI XÁCH</h5>
		<p></p>
		<span style="font-size: 14px">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</span>
	</div>
	<div class="category">
		<div class="category_title">
			<h5>DANH MỤC CON</h5>
		</div>
		<div class="category_panel">

			<div class="category_panel_detail">
				<a href="#">
					<img src="{{asset('images/category_panel.JPG')}}" alt="">
				</a>
				Túi cỡ nhỏ
			</div>
			<div class="category_panel_detail">
				<a href="#">
					<img src="{{asset('images/category_panel.JPG')}}" alt="">
				</a>
				Túi tầm trung
			</div>
			<div class="category_panel_detail">
				<a href="#">
					<img src="{{asset('images/category_panel.JPG')}}" alt="">
				</a>
				Túi cỡ lớn
			</div>
		</div>
	</div>
	<div class="content_product">
		<br>
		<div id="sap_xep_product">
			<div style=" text-align: right;">
				Sắp xếp:

				<select class="browser-default custom-select" style="display: inline-block; width: 250px">
					<option selected>Bán chạy nhất</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
		<div class="list_product">
			@foreach($array_sanpham as $sanpham)
			<a href="{{ route("product_detail",$sanpham->id) }}" style="color: black">
				<div class="product_detail" id="product_1">
					<img src="{{ asset('images/' . $sanpham->anh ) }}" alt="" style="width: 250px; height: 150px">
					<div style="text-align: center;">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
					<div style="text-align: center;">
						{{$sanpham->ten_san_pham}}<br>
						${{$sanpham->gia}}<br>
						<div class="bold">
							<a href="#">
								<div id="bold_radius" style="background: red"></div>
							</a>
							<a href="#">
								<div id="bold_radius" style="background: blue"></div></a>
							<a href="#">
								<div id="bold_radius" style="background: grey"></div></a>
						</div>
					</div>
				</div>
				</a>
			@endforeach


		</div>

		<div id="pagination" >
			<nav aria-label="Page navigation example" >
				<ul class="pagination pg-blue" style="padding-left: 275px">
					<li class="page-item">
						<a class="page-link" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">Previous</span>
						</a>
					</li>
					<li class="page-item"><a class="page-link">1</a></li>
					<li class="page-item"><a class="page-link">2</a></li>
					<li class="page-item"><a class="page-link">3</a></li>
					<li class="page-item">
						<a class="page-link" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Next</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<p>
			<br>
			<span style="font-size: 14px">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</span>

	</div>

</div>
</div>
</div>



@include('home.footer')
</div>
<!-- rating star box -->

</body>
</html>
