@extends('master')
@section('content')


<h1>Tên Form:{!!$name[0]['name']!!}</h1>
<h2>Số thẻ  là:{!!$count!!}</h2>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Name_Input</th>
	      <th scope="col">Type_Input</th>
	      <th scope="col">Place_Input</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php $stt=0; ?>
	  	@foreach($dulieu as $value)
	  	<?php $stt++ ?>
	    <tr>
	      <th scope="row">{!!$stt;!!}</th>
	      <td>{!!$value['name_input']!!}</td>
	      <td>{!!$value['type_input']!!}</td>
	      <td>{!!$value['place_input']!!}</td>
	    </tr>
	   @endforeach
	  </tbody>
	</table>
@endsection