@extends('layouts.master')
@section('header')
@section('content')

<h3>Image Sản Phẩm</h3>
<div class="container">
	<form method="post" action="{{url('admin/sanpham/store')}}" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{ $san_pham->id }}">
        <div class="input-group control-group increment" style="width: 800px">
          <input type="file" name="anh[]" class="form-control">
          <div class="input-group-btn">
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add </button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px; width: 800px">
            <input type="file" name="anh[]" class="form-control">
            <div class="input-group-btn">
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
		<button class="btn btn-danger" style="margin-top:10px">
			<a href="{{ URL::previous() }}">
				Quay Lại
			</a>
		</button>
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
  	</form>
</div>
<script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });

    });

</script>

@endsection
