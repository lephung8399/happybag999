<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/detail_product.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<script src="https://kit.fontawesome.com/16e84f8131.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
	 <link rel="stylesheet" href="OwlCarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="OwlCarousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
	<script src="{{asset('OwlCarousel/docs/assets/vendors/jquery.min.js')}}"></script>
	<script src="{{asset('OwlCarousel/docs/assets/owlcarousel/owl.carousel.min.js')}}"></script>
	<style>
		@import url(http://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);
	</style>
</head>
<body>
	@include('home.header')
	<div class="section">
		<div id="panel" style="background-image: url({{asset('images/panel.JPG')}}); background-repeat: repeat-x;text-align: center;">
				<div style="height: 80px; width: 100%; padding-top: 25px ">
					<span style="padding-top: 15px"><b>
					<a href="#" style="text-decoration: none; color: #80786d; ">HOME</a> /
					<a href="#" style="text-decoration: none; color: #80786d; ">BAGS</a></b>
					</span>
				</div>
		</div>
			
		<div class="content">
			<div class="intro_product">
				<div class="slider_image">
					<div id="list_images">
						<div class="demo w3-opacity w3-hover-opacity-off">
							<img src="public/images/list_images_1.jpg" alt="" 
							style="width:100%;cursor:pointer; border: 1px solid;margin-top: 8px;" onclick="currentDiv(1)">
						</div>
						<div class="demo w3-opacity w3-hover-opacity-off">
							<img src="public/images/list_images_2.jpg" alt="" 
							style="width:100%;cursor:pointer; border: 1px solid;margin-top: 8px;" onclick="currentDiv(2)">
						</div>
						<div class="demo w3-opacity w3-hover-opacity-off">
							<img src="public/images/list_images_1.jpg" alt="" 
							style="width:100%;cursor:pointer; border: 1px solid;margin-top: 8px;" onclick="currentDiv(3)">
						</div>
						<div class="demo w3-opacity w3-hover-opacity-off">
							<img src="public/images/list_images_2.jpg" alt="" 
							style="width:100%;cursor:pointer; border: 1px solid;margin-top: 8px;" onclick="currentDiv(4)">
						</div>
						<div class="demo w3-opacity w3-hover-opacity-off">
							<img src="public/images/list_images_1.jpg" alt="" 
							style="width:100%;cursor:pointer; border: 1px solid;margin-top: 8px;" onclick="currentDiv(5)">
						</div>
						<div class="demo w3-opacity w3-hover-opacity-off">
							<img src="public/images/list_images_2.jpg" alt="" 
							style="width:100%;cursor:pointer; border: 1px solid;margin-top: 8px;" onclick="currentDiv(6)">
						</div>
					</div>
					<div id="slide">
						<img class="mySlides" src="public/images/list_images_1.jpg" alt="" style="width: 100%;height: 80%">
						<img class="mySlides" src="public/images/list_images_2.jpg" alt="" style="width: 100%; display:none;height: 80%">
						<img class="mySlides" src="public/images/list_images_1.jpg" alt="" style="width: 100%; display:none;height: 80%">
						<img class="mySlides" src="public/images/list_images_2.jpg" alt="" style="width: 100%; display:none;height: 80%">
						<img class="mySlides" src="public/images/list_images_1.jpg" alt="" style="width: 100%; display:none;height: 80%">
						<img class="mySlides" src="public/images/list_images_2.jpg" alt="" style="width: 100%; display:none;height: 80%">
					</div>
				</div>
				<div class="model_image">
					<img src="public/images/image_model.JPG" alt="" style="width: 100%; height: 100%">
				</div>
				<br>
				<div id="infor_buy">
					<div style="width: 50%; height: 100%; float: left; font-size: 14px">
						<b>Balo nắp gập trang trí khóa vuông BL075</b><br>
						Mã: <b>BL075</b>
					</div>
					<div style="width: 50%; height: 100%; float: left; text-align: right">
						
				  		<button type="button" class="btn btn-danger" >MUA NGAY</button>
					  	
					 </div>
				</div>
				<div id="comment">
					<div style="width: 100%; height: 70px; ">
						<div style="float: left; width: 50%; margin-top: 20px">Bình luận</div>
						<div style="width: 50%;text-align: right ;float: left; margin-top: 20px">
							<span>Đánh giá của bạn</span>
							<div class="stars">
							    <form action="">
							      <input class="star star-5" id="star-5" type="radio" name="star"/>
							      <label class="star star-5" for="star-5"></label>
							      <input class="star star-4" id="star-4" type="radio" name="star"/>
							      <label class="star star-4" for="star-4"></label>
							      <input class="star star-3" id="star-3" type="radio" name="star"/>
							      <label class="star star-3" for="star-3"></label>
							      <input class="star star-2" id="star-2" type="radio" name="star"/>
							      <label class="star star-2" for="star-2"></label>
							      <input class="star star-1" id="star-1" type="radio" name="star"/>
							      <label class="star star-1" for="star-1"></label>
							    </form>
							</div>
						</div>
					</div>
					<div id="comment_box">
						<form action="#">
							<textarea style="width: 100%; height: 50px" id="editor" name="editor"></textarea>
							<div id="bottom_form">
								<div style="text-align: left; float: left; width: 30%; height: 100%">
									User(Xóa)
								</div>
								<div style="text-align: right; float: left; width: 70%; height: 100%">
									
										<div class="btn-group btn-group-lg mb-4" role="group" aria-label="Basic example" style="width: 30%; height: 100%; " >
								  		<button type="button" class="btn btn-danger" style="line-height: 0.5;">GỬI</button>
						  				</div>
									
								</div>
							</div>
						</form>
						<script>
							CKEDITOR.replace( 'editor' );
						</script>
						<div id="cmt_user">
							<div id="name_user">Huwng</div>
							<div id="cmt">Chào Mừng Bạn Đến Happy Bag.Chào Mừng Bạn Đến Happy Bag
							</div>
							<div id="time_cmt">
								<a href="#">Trả lời</a>          <span>15 phút trước</span>

							</div>
						</div>
				    </div>
				</div>
			</div>
			<div class="spacing"></div>
			<div class="detail_product">
				<div class="tittle">
					<b style="font-size: 16px">Balo nắp gập trang trí khóa vuông BL075</b>
					<br>
					Mã: <strong>BL075</strong>
					<br>
					Trạng thái: <strong>Còn hàng</strong>
				</div>
				<div class="price">
					<h5 style="display: inline-block;">750,000đ</h5>  ---> 
					 <del>590,000đ</del>
					 <br>
					 MÀU SẮC <br>
					 <div class="bold">
						<a href="#">
						<div id="bold_radius" style="background: red"></div>
						</a>
						<a href="#">
						<div id="bold_radius" style="background: blue"></div></a>
						<a href="#">
						<div id="bold_radius" style="background: grey"></div></a>
					  </div>
					  <br>
					  <button type="button" class="btn btn-danger" style="width: 100%">MUA NGAY</button>
					  <img src="public/images/service_product.JPG" alt="" style="width: 100%">
					  <br>
					  <!-- THÔNG SỐ SẢN PHẨM 
					  <br>
					  <img src="public/images/1.JPG" alt="" style="width: 100%">
					  <br>
					  <ol style="margin-left: 35px">
					  	<ul>
					  		<li>Mã sản phẩm: BL075</li>
					  		<li>Kiểu dáng: Balo thời trang</li>
					  		<li>Chất liệu: da tổng hợp</li>
					  		<li>Màu sắc: Đen-Trắng-Nâu</li>
					  		<li>Kích cỡ: 22cmx24cmx11cm</li>
					  	</ul>
					  </ol> -->
				  <div class="container" style="width: 100%">
					  <div class="panel-group" id="accordion">
					    <div class="panel panel-default">
					      <div class="panel-heading">
					        <h4 class="panel-title">
					          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="a_collapse">THÔNG SỐ SẢN PHẨM</a>
					        </h4>
					      </div>
					      <div id="collapse1" class="panel-collapse collapse in">
					        <div class="panel-body">
					        	<img src="public/images/1.JPG" alt="" style="width: 100%">
					        	<br>
					  <ol style="margin-left: 35px">
					  	<ul>
					  		<li>Mã sản phẩm: BL075</li>
					  		<li>Kiểu dáng: Balo thời trang</li>
					  		<li>Chất liệu: da tổng hợp</li>
					  		<li>Màu sắc: Đen-Trắng-Nâu</li>
					  		<li>Kích cỡ: 22cmx24cmx11cm</li>
					  	</ul>
					  </ol>
				        </div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"  class="a_collapse">Chính sách dổi trả</a>
				        </h4>
				      </div>
				      <div id="collapse2" class="panel-collapse collapse">
				        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="a_collapse">Hướng dẫn bảo quản</a>
				        </h4>
				      </div>
				      <div id="collapse3" class="panel-collapse collapse">
				        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				      </div>
				    </div>
				  </div> 
				</div>
				</div>
			</div>
		</div>
		<div class="san_pham_lien_quan">
			<div id="co_the_ban_se_thich">
				<img src="public/images/co_the_ban_se_thich.JPG" alt="" style="width: 50%; height: 80%; margin-left: 130px">
			</div>
			<div id="slide_san_pham_lien_quan">
				<div class="product">
              
		            <div class="owl-carousel">
		              <div><img src="public/images/baggg.JPG">
		                <center>
		                  <!-- rating star -->
			                <div class="container">               
			                	<div class="row">
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
		                <div class="container">               
		                	<div class="row">
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
		                <div class="container">               <div class="row">
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

	</div>
	@include('home.footer')
	
<script>
		function currentDiv(n) {
		  showDivs(slideIndex = n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  if (n > x.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
		  }
		  x[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " w3-opacity-off";
		}
</script>



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



