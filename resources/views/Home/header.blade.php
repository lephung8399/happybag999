<header class="header">
					<div class="header_top">
						<div id="header_top_left"><p style="display: inline-block;">Chào Mừng Bạn Đến Happy Bag |</p>
						<p style="display: inline-block;"><i class="fas fa-phone-alt"></i> Hotline: 0983.05.05.05 </p>

						</div>
						<div id="header_top_right">
							<p style="display: inline-block;"><i class="fas fa-check"></i> Kiểm tra đơn hàng   |  </p>
							<p style="display: inline-block;"><i class="far fa-life-ring"></i> Hỗ trợ</p>
						</div>

					</div>
					<div class="header_bottom">
						<div id="logo_happy">
							<label>
								<a href="{{route('index')}}">
								<img src="{{asset('images/logo.png')}}" style="margin-top: 40px; width: 80%">
								</a>
							</label>
						</div>
						<div id="menu">
						  <ul>
							  @foreach($array_loai as $ten_loai)
								<li><a href="{{route('product_list',$ten_loai->id)}}"><strong>{{$ten_loai->ten_loai}}</strong></a></li>
							  @endforeach
							  	<li><a href="#"><strong>TIN CÔNG TY</strong></a></li>
							    <li><a href="#"><strong>LIÊN HỆ</strong></a></li>
						  </ul>
						</div>
						<div id="searh_Bar">
							<input class="form-control" type="text" placeholder="Search" aria-label="Search" style="width: 75%; margin-top: 40px; display: inline-block;">
							<label style="">
								<a href="{{ route("giohang") }}"><i class="fas fa-shopping-bag" style="width: 100%; display: inline-block; height: 100%"></i></a>
							</label>

						</div>

					</div>


			</header>
