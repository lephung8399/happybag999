@extends('layouts.master')
@section('header')
@section('content')

<table id="datatable" class="table table-hover table-sm table-bordered table-striped">
        <!--Table head-->
        <thead>
            <tr style="background-color: #5d6b7b">
                <th class="th-sm" style="color: white">Name
                </th>
                <th class="th-sm" style="color: white">Email
                </th>
                <th class="th-sm" style="color: white">Address
                </th>
                <th class="th-sm" style="color: white">Phone
                </th>
                <th class="th-sm" style="color: white">Gender
                </th>
                
            </tr>
        </thead>
        <tbody>
            
            @foreach ($array as $khach_hang)
            <tr>
                <th class="th-sm">
                    <img src="../../../../img/module_table_bottom.png" alt="" style="width: 25px; height: 25px; background-color:red">
                    {{$khach_hang->name}}
                </th>
                <th class="th-sm">
                    {{$khach_hang->email}}
                </th>
                <th class="th-sm">
                   {{$khach_hang->dia_chi}}
                </th>
                <th class="th-sm">
                    {{$khach_hang->sdt}}
                </th>
                 <th class="th-sm">
                 	@if($khach_hang->gioi_tinh == 1)
                 	 	Nam
                 	@else
                 	 	Nữ
                 	@endif
                </th>
               
                
            </tr>
            @endforeach
        </tbody>
    </table>

<script>
    $(document).ready(function () {
    $('#datatable').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
</script>

@endsection