$(document).ready(function() {
	$('.nav1').addClass('nav_click');
	$('.nav1').click(function(event) {
		$('*').removeClass('nav_click');
		$(this).toggleClass('nav_click');
	});	
	$('.nav2').click(function(event) {
		$('*').removeClass('nav_click');
		$(this).toggleClass('nav_click');
	});	
	$('.nav3').click(function(event) {
		$('*').removeClass('nav_click');
		$(this).toggleClass('nav_click');
	});	
	$('input[name="check"]').attr('checked',true);
	 $('input[name="fullname"]').click(function(){
            if($(this).prop("checked") == true){
                $('input[name="full_name"]').attr({
                	value: $('input[name="Name"]').val(),
       
                });
                 $('input[name="inputType[0]"]').attr({
                    value: $('input[name="Name"]').attr('type'),
       
                });
                 $('input[name="inputName[0]"]').attr({
                    value: $('input[name="Name"]').attr('name'),
       
                });
                  $('input[name="inputPlace[0]"]').attr({
                    value: $('input[name="Name"]').val(),
       
                });
                
            }
            else{
            	$('input[name="full_name"]').attr({
                	value:'',
       
                });
                $('input[name="inputType[0]"]').attr({
                    value: '',
       
                });
                 $('input[name="inputName[0]"]').attr({
                    value:'',
       
                });
                 $('input[name="inputPlace[0]"]').attr({
                    value:'',
       
                });

            }
        });
	  $('input[name="add"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group address">';
					x+='<label for="exampleInputEmail1">Địa chỉ</label>';
					x+='<input type="text" name="full_add" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_add"]').attr({
                	value: $('input[name="Address"]').val(),
       
                });
                $('input[name="inputType[1]"]').attr({
                    value: $('input[name="Address"]').attr('type'),
       
                });
                 $('input[name="inputName[1]"]').attr({
                    value: $('input[name="Address"]').attr('name'),
       
                });
                 $('input[name="inputPlace[1]"]').attr({
                    value: $('input[name="Address"]').val(),
       
                });
                
            }
            else
            {
            	
            	$('.address').remove();
            }
        });
	  $('input[name="tel"]').click(function(){
            if($(this).prop("checked") == true){
                $('input[name="full_tel"]').attr({
                	value: $('input[name="Telephone"]').val(),
       
                });
                $('input[name="inputType[3]"]').attr({
                    value: $('input[name="Telephone"]').attr('type'),
       
                });
                 $('input[name="inputName[3]"]').attr({
                    value: $('input[name="Telephone"]').attr('name'),
       
                });
                 $('input[name="inputPlace[3]"]').attr({
                    value: $('input[name="Telephone"]').val(),
       
                });

            }
            else
            {
            	$('input[name="full_tel"]').attr({
                	value:'',
       
                });

            }
        });
	  $('input[name="email"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group email">';
					x+='<label for="exampleInputEmail1">Email</label>';
					x+='<input type="text" name="full_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_email"]').attr({
                	value: $('input[name="Email"]').val(),
       
                });
                $('input[name="inputType[4]"]').attr({
                    value: $('input[name="Email"]').attr('type'),
       
                });
                 $('input[name="inputName[4]"]').attr({
                    value: $('input[name="Email"]').attr('name'),
       
                });
                 $('input[name="inputPlace[4]"]').attr({
                    value: $('input[name="Email"]').val(),
       
                });

            }
            else
            {
            	$('.email').remove();

            }
        });
	  $('input[name="name_main"]').click(function(){
            if($(this).prop("checked") == true){
                $('input[name="full_main_name"]').attr({
                	value: $('input[name="nameMain"]').val(),
       
                });
                $('input[name="inputType[5]"]').attr({
                    value: $('input[name="nameMain"]').attr('type'),
       
                });
                $('input[name="inputName[5]"]').attr({
                    value: $('input[name="nameMain"]').attr('name'),
       
                });
                $('input[name="inputPlace[5]"]').attr({
                    value: $('input[name="nameMain"]').val(),
       
                });

            }
            else
            {
            	$('input[name="full_main_name"]').attr({
                	value:'',
       
                });

            }
        });
	  $('input[name="tel_name_main"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group tel_name_main">';
					x+='<label for="exampleInputEmail1">Điện thoại người liên hệ chính</label>';
					x+='<input type="text" name="full_tel_main_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_tel_main_name"]').attr({
                	value: $('input[name="telephoneMain"]').val(),
       
                });
                 $('input[name="inputType[6]"]').attr({
                    value: $('input[name="telephoneMain"]').attr('type'),
       
                });
                 $('input[name="inputName[6]"]').attr({
                    value: $('input[name="telephoneMain"]').attr('name'),
       
                });
                 $('input[name="inputPlace[6]"]').attr({
                    value: $('input[name="telephoneMain"]').val(),
       
                });

            }
             else
            {
            	$('.tel_name_main').remove();

            }
        });
	  $('input[name="email_main"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group email_main">';
					x+='<label for="exampleInputEmail1">Email người liên hệ chính</label>';
					x+='<input type="text" name="full_email_main" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_email_main"]').attr({
                	value: $('input[name="emailMain"]').val(),
       
                });
                $('input[name="inputType[7]"]').attr({
                    value: $('input[name="emailMain"]').attr('type'),
       
                });
                 $('input[name="inputName[7]"]').attr({
                    value: $('input[name="emailMain"]').attr('name'),
       
                });
                  $('input[name="inputPlace[7]"]').attr({
                    value: $('input[name="emailMain"]').val(),
       
                });

            }
            else
            {
            	$('.email_main').remove();

            }
        });
	  $('input[name="birth"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group birth">';
					x+='<label for="exampleInputEmail1">Sinh nhật</label>';
					x+='<input type="text" name="full_birth" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_birth"]').attr({
                	value: $('input[name="Birthday"]').val(),
       
                });
                 $('input[name="inputType[8]"]').attr({
                    value: $('input[name="Birthday"]').attr('type'),
       
                });
                 $('input[name="inputName[8]"]').attr({
                    value: $('input[name="Birthday"]').attr('name'),
       
                });
                 $('input[name="inputPlace[8]"]').attr({
                    value: $('input[name="Birthday"]').val(),
       
                });

            }
            else
            {
            	$('.birth').remove();

            }
        });
	  $('input[name="job"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group job">';
					x+='<label for="exampleInputEmail1">Ngành kinh doanh</label>';
					x+='<input type="text" name="full_job" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_job"]').attr({
                	value: $('input[name="Job"]').val(),
       
                });
                $('input[name="inputType[9]"]').attr({
                    value: $('input[name="Job"]').attr('type'),
       
                });
                 $('input[name="inputName[9]"]').attr({
                    value: $('input[name="Job"]').attr('name'),
       
                });
                 $('input[name="inputPlace[9]"]').attr({
                    value: $('input[name="Job"]').val(),
       
                });

            }
            else
            {
            	$('.job').remove();

            }
        });
	  $('input[name="contry"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group contry">';
					x+='<label for="exampleInputEmail1">Tỉnh/thành phố</label>';
					x+='<input type="text"  name="full_contry" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_contry"]').attr({
                	value: $('input[name="Contry"]').val(),
       
                });
                 $('input[name="inputType[10]"]').attr({
                    value: $('input[name="Contry"]').attr('type'),
       
                });
                 $('input[name="inputName[10]"]').attr({
                    value: $('input[name="Contry"]').attr('name'),
                });
                  $('input[name="inputPlace[10]"]').attr({
                    value: $('input[name="Contry"]').val(),
                });
       

            }
             else
            {
            	$('.contry').remove();

            }
        });
	  $('input[name="provice"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group provice">';
					x+='<label for="exampleInputEmail1">Quận/huyện</label>';
					x+='<input type="text"  name="full_provice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
                    x+='<input type="hidden" name="full_provice_input_type" value="" />';
                    x+='<input type="hidden" name="full_provice_input_name" value="" />';
					x+='</div>';
                $('.add').append(x);
                $('input[name="full_provice"]').attr({
                	value: $('input[name="Province"]').val(),
       
                });
                $('input[name="inputType[11]"]').attr({
                    value: $('input[name="Province"]').attr('type'),
       
                });
                 $('input[name="inputName[11]"]').attr({
                    value: $('input[name="Province"]').attr('name'),
                });
                  $('input[name="inputPlace[11]"]').attr({
                    value: $('input[name="Province"]').val(),
                });
       

            }
            else
            {
            	$('.provice').remove();

            }
        });
	  $('input[name="gender"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group gender">';
					x+='<label for="exampleInputEmail1">Giới tính</label>';
					x+='<input type="text"  name="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
					x+='</div>';
                $('.add').append(x);
                $('input[name="gender"]').attr({
                	value: $('#gioitinh').val(),
       
                });
                 $('input[name="inputType[12]"]').attr({
                    value: 'option',

                });
                 $('input[name="inputName[12]"]').attr({
                    value: $('#gioitinh').attr('name'),

                });
                  $('input[name="inputPlace[12]"]').attr({
                    value: $('#gioitinh').val(),

                });
       
       

            }
             else
            {
            	$('.gender').remove();

            }
        });
	  $('input[name="content"]').click(function(){
            if($(this).prop("checked") == true){
            	var x='<div class="form-group content">';
					x+='<label for="exampleInputEmail1">Mô tả</label>';
					x+='<input type="text"  name="content" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >';
					x+='</div>';

                $('.add').append(x);
                $('input[name="content"]').attr({
                	value: $('input[name="Content"]').val(),
       
                });
                $('input[name="inputType[13]"]').attr({
                    value: $('input[name="Content"]').attr('type'),
       
                });
                 $('input[name="inputName[13]"]').attr({
                    value: $('input[name="Content"]').attr('name'),

                });
                 $('input[name="inputPlace[13]"]').attr({
                    value: $('input[name="Content"]').val(),

                });


            }
            else
            {
            	$('.content').remove();

            }
        });
	  $('.save').click(function(event) {
	  	if($('input[name="Name"]').val()==''||$('input[name="Telephone"]').val()==''||$('input[name="mainName"]').val()==''){
	  		var x=alert('Cần nhập đầy đủ thông tin ');

	  	}
	  });
});