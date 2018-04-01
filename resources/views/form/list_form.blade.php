@extends('master')
@section('content')
<div class="alert alert-warning" role="alert">
    <strong>THÔNG BÁO!</strong> DANH SÁCH FORM CÓ TRONG HỆ THỐNG</div>
    <table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Tên Form</th>
	      <th scope="col">Mô tả</th>
	      <th scope="col">Hành động</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php $sothutu=0; 

	  	?>

	  	@foreach($dulieu as $v)

	  	<?php  $sothutu++ ?>
	    <tr>
	      <th scope="row">{!!$sothutu!!}</th>
	      <td>{!!$v['name']!!}</td>
	      <td>{!!$v['des']!!}</td>
	      <td>
	      	<a href="{!!route('getEditForm')!!}/<?php echo $v['id']; ?>" class="btn btn-info fa fa-edit">Sửa</a>
	      	<a href="{!!route('deleteForm')!!}/<?php echo $v['id']; ?>" class="btn btn-danger fa fa-remove">Xóa</a>
	      	<a href="" class="btn btn-warning fa fa-remove">Thống kê số thẻ</a>
	      </td>
	    </tr>
	  </tbody>
	  @endforeach
	</table>
@endsection