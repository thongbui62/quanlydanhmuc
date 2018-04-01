
		<div class="form">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 form_1">
						<p>Các thông tin cần lấy:</p>
					</div>
					<div class="col-sm-6 form_1">
						<p>Option form của bạn sẽ hiển thị như sau:</p>
					</div>
				</div>
				<div class="row getform">
					<div class="col-sm-6">
						{{-- <form method="POST" action="{!!route('postAddForm')!!}"> --}}
							{{-- @csrf --}}
						<table class="table table-bordered">
						  <thead>
						    <tr>
						      <th style="width: 15px">#</th>
						      <th scope="col">Trường dữ liệu</th>
						      <th scope="col" class="text-center">Sử dụng</th>
						      <th scope="col" class="text-center">Bắt buộc nhập</th>
						      <th scope="col" class="text-center">Placeholder</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Tên khách hàng</td>
						      <td class="text-center"><input type="checkbox" name="fullname" class="fullname"></td>
						      <td class="text-center"><input type="checkbox" name="check" ></td>
						      <td>
						      	<input type="text" placeholder="Tên khách hàng" name="Name">
						      	<input type="hidden" name="inputType[0]" value="">
						      	<input type="hidden" name="inputName[0]" value="">
						      	<input type="hidden" name="inputPlace[0]" value="">
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Địa chỉ</td>
						      <td class="text-center"><input type="checkbox" name="add" ></td>
						      <td class="text-center"><input type="checkbox"></td>
						      <td>
						      	<input type="text" placeholder="Địa chỉ" name="Address">
						      	<input type="hidden" name="inputType[1]" value="">
						      	<input type="hidden" name="inputName[1]" value="">
						      	<input type="hidden" name="inputPlace[1]" value="">
						      </td>

						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td >Điện thoại</td>
						      <td class="text-center"><input type="checkbox" name="tel" ></td>
						     <td class="text-center"><input type="checkbox" name="check" ></td>
						     <td><input type="number" placeholder="Điện thoại" name="Telephone">
								<input type="hidden" name="inputType[3]" value="">
						      	<input type="hidden" name="inputName[3]" value="">
						      	<input type="hidden" name="inputPlace[3]" value="">
						     </td>
						    </tr>
						    <tr>
						      <th scope="row">4</th>
						      <td>Email</td>
						      <td class="text-center"><input type="checkbox" name="email" ></td>
						      <td class="text-center"><input type="checkbox" ></td>
						      <td><input type="text" placeholder="Email" name="Email">
								<input type="hidden" name="inputType[4]" value="">
						      	<input type="hidden" name="inputName[4]" value="">
						      	<input type="hidden" name="inputPlace[4]" value="">
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">5</th>
						      <td>Người liên hệ chính</td>
						      <td class="text-center"><input type="checkbox"  name="name_main"></td>
						      <td class="text-center"><input type="checkbox" name="check" ></td>
						      <td><input type="text" placeholder="Người liên hệ chính" name="nameMain">
								<input type="hidden" name="inputType[5]" value="">
						      	<input type="hidden" name="inputName[5]" value="">
						      	<input type="hidden" name="inputPlace[5]" value="">
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">6</th>
						      <td>Điện thoại người liên hệ chính</td>
						      <td class="text-center"><input type="checkbox" name="tel_name_main"></td>
						     <td class="text-center"><input type="checkbox" ></td>
						     <td><input type="number" placeholder="Điện thoại người liên hệ chính" name="telephoneMain" >
								<input type="hidden" name="inputType[6]" value="">
						      	<input type="hidden" name="inputName[6]" value="">
						      	<input type="hidden" name="inputPlace[6]" value="">
						     </td>
						    </tr>
						    <tr>
						      <th scope="row">7</th>
						      <td>Email người liên hệ chính</td>
						      <td class="text-center"><input type="checkbox" name="email_main" ></td>
						      <td class="text-center"><input type="checkbox"></td>
						      <td><input type="text" placeholder="Email người liên hệ chính" name="emailMain">
								<input type="hidden" name="inputType[7]" value="">
						      	<input type="hidden" name="inputName[7]" value="">
						      	<input type="hidden" name="inputPlace[7]" value="">
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">8</th>
						      <td>Nhóm khách hàng</td>
						      <td colspan="3">  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mới chọn" ></td>
						     
						    </tr>
						    <tr>
						      <th scope="row">9</th>
						      <td>Sinh nhật</td>
						     <td class="text-center"><input type="checkbox" name="birth" ></td>
						      <td class="text-center"><input type="checkbox" ></td>
						      <td><input type="date" placeholder="Sinh nhật" name="Birthday">
								<input type="hidden" name="inputType[8]" value="">
						      	<input type="hidden" name="inputName[8]" value="">
						      	<input type="hidden" name="inputPlace[8]" value="">
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">10</th>
						      <td>Ngành kinh doanh</td>
						      <td class="text-center"><input type="checkbox" name="job"></td>
						      <td class="text-center"><input type="checkbox"></td>
						      <td><input type="text" placeholder="Ngành kinh doanh" name="Job">
								<input type="hidden" name="inputType[9]" value="">
						      	<input type="hidden" name="inputName[9]" value="">
						      	<input type="hidden" name="inputPlace[9]" value="">
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">11</th>
						      <td>Tỉnh/Thành phố</td>
						      <td class="text-center"><input type="checkbox" name="contry" ></td>
						      <td class="text-center"><input type="checkbox" ></td>
						      <td><input type="text" placeholder="Tỉnh/Thành phố" name="Contry">
								<input type="hidden" name="inputType[10]" value="">
						      	<input type="hidden" name="inputName[10]" value="">
						      	<input type="hidden" name="inputPlace[10]" value="">
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">12</th>
						      <td>Quận/huyện</td>
						      <td class="text-center"><input type="checkbox" name="provice"></td>
						      <td class="text-center"><input type="checkbox"></td>
						      <td><input type="text" placeholder="Quận/huyện" name="Province">
								<input type="hidden" name="inputType[11]" value="">
						      	<input type="hidden" name="inputName[11]" value="">
						      	<input type="hidden" name="inputPlace[11]" value="">
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">13</th>
						      <td>Giới tính</td>
						     <td class="text-center"><input type="checkbox" name="gender"></td>
						     <td class="text-center"><input type="checkbox" ></td>
						     <td class="text-center">
						     	<select name="Gender" id="gioitinh">
									<option value="male">Nam</option>
									<option value="female">Nữ</option>
						     	</select>
						     	<input type="hidden" name="inputType[12]" value="">
						      	<input type="hidden" name="inputName[12]" value="">
						      	<input type="hidden" name="inputPlace[12]" value="">
						     </td>
						    </tr>
						    <tr>
						      <th scope="row">14</th>
						      <td>Mô tả</td>
						      <td class="text-center"><input type="checkbox" name="content" ></td>
						      <td class="text-center"><input type="checkbox"></td>
						      <td><input type="text" placeholder="Mô tả" name="Content">
						      	<input type="hidden" name="inputType[13]" value="">
						      	<input type="hidden" name="inputName[13]" value="">
						      	<input type="hidden" name="inputPlace[13]" value=""></td>
						    </tr>
						    <tr>
						    	<td>
						    		<a href="{{-- {!!route('dashboard')!!} --}}" class="btn btn-secondary">Quay lại</a>
									
						    	</td>
						    	<td>
						    		<button class="btn-info save">Lưu</button>
									
						    	</td>
						    </tr>
						  </tbody>
						</table>
					{{-- </form> --}}
					</div>
					<div class="col-sm-4">
						<div class="card">
						  <div class="card-body">
						   {{--  <form action="{!!route('post_add_element')!!}" method="POST">
						    	@csrf --}}
						    	
						    		<div class="add">	
										<div class="form-group">
								    		<label for="exampleInputEmail1">Tên khách hàng<span>*</span></label>
								    		<input type="text" class="form-control" name="full_name" id="exampleInputEmail1" aria-describedby="emailHelp" >
								  		</div>
								  		<div class="form-group">
								    		<label for="exampleInputEmail1">Điện thoại<span>*</span></label>
								    		<input type="text" class="form-control" name="full_tel" id="exampleInputEmail1" aria-describedby="emailHelp" >	
								  		</div>
								  		<div class="form-group">
								    		<label for="exampleInputEmail1">Người liên hệ chính<span>*</span></label>
								    		<input type="text" class="form-control" name="full_main_name" id="exampleInputEmail1" aria-describedby="emailHelp" >
								  		</div>
						    		</div>
							  
							  <button type="submit" class="btn btn-warning">Đăng ký</button>
							{{-- </form> --}}
						  </div>
						</div>
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
		</div>
		</form>
