@extends('master')
@section('content')
<div class="alert alert-warning" role="alert">
    <strong>FORM!</strong> Thêm form vào cơ sở dữ liệu
</div>
	<form action="{!!route('postAddForm')!!}" method="POST">
		@csrf
		@include ('error')
	  <div class="form-group">
	    <label for="exampleInputEmail1">Tên Form</label>
	    <input type="text" name="form_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên form" value="{{old('form_name')}}">
	    <small id="emailHelp" class="form-text text-muted">Vui lòng nhập tên form</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Mô tả ngắn</label>
	    <input type="text" name="form_des" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả ngắn" value="{{old('form_des')}}">
	  </div>
	 
	{{-- </form> --}}
	@include('form.addElementForm');
@endsection