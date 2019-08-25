<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.main{
			width: 100%;
			height: 700px;
			background-color:
		}
		.infor{
			width: 65%;
			height: max-height;
			background-color: /*blue*/;
			float: left;
            border-bottom: 1px solid grey;
		}
		.product{
			width: 35%;
			height: 550px;
			background-color: /*yellow*/;
			float: left;

            border-left: 1px grey solid;
		}
	</style>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<div class="main">
        <form action="{{ route('thanh_toan') }}" method="POST">
            {{csrf_field()}}
            <div class="infor">
                <div style="width: 100%; height: 100px;background-color: white">
                    <img src="{{asset('images/logo.png')}}" style="height: 40%; margin-top: 30px; margin-left: 60px">
                </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for=""><h4 style="margin-left: 60px"><strong>Thông tin mua hàng</strong></h4></label>
                      <input type="text" class="form-control" id="" placeholder="Họ tên(*)" style="width: 80%;margin-left: 60px" name="ho_ten">
                    </div>
                    <div class="form-group col-md-6">
                      <label for=""><h4 style="margin-left: 60px"><strong>Vận chuyển</strong></h4></label>
                      <span class="form-control" style="width: 80%;margin-left: 60px">
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="321" name="4" checked>
                          <label class="custom-control-label" for="defaultChecked">Giao hàng tận nơi<span style="text-align: right; margin-left: 100px">0đ</span></label>
                        </div>
                      </span>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="number" class="form-control" id="" placeholder="Số điện thoại(*)" style="width: 80%;margin-left: 60px" name="so_dien_thoai">
                    </div>
                   <label for=""><h5 style="margin-left: 60px"><strong>Hình thức thanh toán</strong></h5></label><br>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="" placeholder="Email(*)" style="width: 80%;margin-left: 60px" name="email">
                    </div>
                    <div class="form-group col-md-6">
                      <span class="form-control" style="width: 80%;margin-left: 60px; height: 70px">
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="123" name="1" checked="checked">
                          <label class="custom-control-label"> Thanh toán khi giao hàng (COD)</label>
                          <input type="radio" class="custom-control-input" id="defaultUnchecked" name="2" >
                          <label class="custom-control-label" >Thanh toán chuyển khoản</label>

                        </div>
                      </span>
                    </div>

                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="" placeholder="Địa chỉ(*)" style="width: 80%;margin-left: 60px" name="dia_chi">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                        <select name= "tinh_thanh" class="form-control" style="width: 325px;margin-left: 60px">
                            <option value="An Giang">---Chọn Tỉnh---
                            <option value="An Giang">An Giang
                            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                            <option value="Bắc Giang">Bắc Giang
                            <option value="Bắc Kạn">Bắc Kạn
                            <option value="Bạc Liêu">Bạc Liêu
                            <option value="Bắc Ninh">Bắc Ninh
                            <option value="Bến Tre">Bến Tre
                            <option value="Bình Định">Bình Định
                            <option value="Bình Dương">Bình Dương
                            <option value="Bình Phước">Bình Phước
                            <option value="Bình Thuận">Bình Thuận
                            <option value="Bình Thuận">Bình Thuận
                            <option value="Cà Mau">Cà Mau
                            <option value="Cao Bằng">Cao Bằng
                            <option value="Đắk Lắk">Đắk Lắk
                            <option value="Đắk Nông">Đắk Nông
                            <option value="Điện Biên">Điện Biên
                            <option value="Đồng Nai">Đồng Nai
                            <option value="Đồng Tháp">Đồng Tháp
                            <option value="Đồng Tháp">Đồng Tháp
                            <option value="Gia Lai">Gia Lai
                            <option value="Hà Giang">Hà Giang
                            <option value="Hà Nam">Hà Nam
                            <option value="Hà Tĩnh">Hà Tĩnh
                            <option value="Hải Dương">Hải Dương
                            <option value="Hậu Giang">Hậu Giang
                            <option value="Hòa Bình">Hòa Bình
                            <option value="Hưng Yên">Hưng Yên
                            <option value="Khánh Hòa">Khánh Hòa
                            <option value="Kiên Giang">Kiên Giang
                            <option value="Kon Tum">Kon Tum
                            <option value="Lai Châu">Lai Châu
                            <option value="Lâm Đồng">Lâm Đồng
                            <option value="Lạng Sơn">Lạng Sơn
                            <option value="Lào Cai">Lào Cai
                            <option value="Long An">Long An
                            <option value="Nam Định">Nam Định
                            <option value="Nghệ An">Nghệ An
                            <option value="Ninh Bình">Ninh Bình
                            <option value="Ninh Thuận">Ninh Thuận
                            <option value="Phú Thọ">Phú Thọ
                            <option value="Quảng Bình">Quảng Bình
                            <option value="Quảng Bình">Quảng Bình
                            <option value="Quảng Ngãi">Quảng Ngãi
                            <option value="Quảng Ninh">Quảng Ninh
                            <option value="Quảng Trị">Quảng Trị
                            <option value="Sóc Trăng">Sóc Trăng
                            <option value="Sơn La">Sơn La
                            <option value="Tây Ninh">Tây Ninh
                            <option value="Thái Bình">Thái Bình
                            <option value="Thái Nguyên">Thái Nguyên
                            <option value="Thanh Hóa">Thanh Hóa
                            <option value="Thừa Thiên Huế">Thừa Thiên Huế
                            <option value="Tiền Giang">Tiền Giang
                            <option value="Trà Vinh">Trà Vinh
                            <option value="Tuyên Quang">Tuyên Quang
                            <option value="Vĩnh Long">Vĩnh Long
                            <option value="Vĩnh Phúc">Vĩnh Phúc
                            <option value="Yên Bái">Yên Bái
                            <option value="Phú Yên">Phú Yên
                            <option value="Tp.Cần Thơ">Tp.Cần Thơ
                            <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                            <option value="Tp.Hải Phòng">Tp.Hải Phòng
                            <option value="Tp.Hà Nội">Tp.Hà Nội
                            <option value="TP  HCM">TP HCM
                        </select>
                    </div>

                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <textarea name="ghi_chu" id="" cols="30" rows="10" style="margin-left: 60px; width: 324px; height: 100px" placeholder="Ghi Chú" name="ghi_chu"></textarea>
                    </div>

                  </div>
            </div>



            <div class="product">
                <h4 style="margin-top: 20px; margin-left: 5px"><b>Đơn hàng</b></h4>
                <div style="width: 100%; height: 100px;d">
                    <table>
                        <tr>
                            <td>
                                <img src="{{ asset('images/' . $sanpham->anh ) }}" alt="" style="width: 130px; height: 100px">
                            </td>
                            <td style="width: 200px;">
                               <strong> {{$sanpham->ten_san_pham}}</strong>
                                <br>
                                {{$sanpham->mau_sac}}
                                <br>
                                {{$sanpham->size}}
                            </td>
                            <td>
                                {{$sanpham->gia * $giohang->so_luong}} VNĐ

                            </td>
                        </tr>
                    </table>
                </div>
                <div style="width: 100%; height: 70px; border-top: 1px solid grey;border-bottom: 1px solid grey">
                    <table >
                        <tr >
                            <td style="padding: 7px; width: 77%">Phí tạm tính</td>
                            <td>{{number_format($sanpham->gia * $giohang->so_luong)}}  VNĐ</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px">Phí vận chuyển</td>
                            <td>0 VNĐ</td>
                        </tr>
                    </table>
                </div>
                <div style="width: 100%; height: 50px">
                    <table>
                        <tr>
                            <td style="padding: 8px;width: 73%; border-bottom: 1px solid grey;font-size: 17px"><b>Tổng cộng:</b></td>
                            <td style="text-align: right;font-size: 17px"><b>
                                    <span value="{{$sanpham->gia * $giohang->so_luong}}" name="tong_tien">
                                        {{number_format($sanpham->gia * $giohang->so_luong)}}
                                    </span> VNĐ</b>
                                <input type="hidden" name="id_gio_hang_chi_tiet" value="{{$giohang->id}}">
                                <input type="hidden" name="tinh_trang" value="1">
                            </td>
                        </tr>
                    </table>
                </div>
                <div style="width: 100%; height: 50px">
                    <table>
                        <tr>
                            <td style="width: 65%"> <a href="#"> < Quay về giỏ hàng</a></td>
                            <td style="text-align: right">
                                <button type="submit" class="btn btn-success">Đặt hàng</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </form>
    </div>
</body>
</html>
