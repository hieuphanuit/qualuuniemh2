@extends('admin/master')
@section('content')

<div class="container">
	<div class="suaNguoiDung">
		<h1>Sửa người dùng</h1>
		<hr>
		<form action='{{url("/admin/nguoidung/$user->id/edit")}}' method="POST">
			<div class="form-group">
				<label for="username">Tên tài khoản:</label>
				<input type="text" name="username" id="username" class="form-control" value="{{$user->username}}" readonly>
			</div>
			@if($errors->has('HoVaTen'))
				<tr>
					<p style="color:red">{{$errors->first('HoVaTen')}}</p>
				</tr>
			@endif
			<div class="form-group">
				<label for="HoVaTen">Họ và tên:</label>
				<input type="text" name="HoVaTen" id="HoVaTen" class="form-control" value="{{$user->HoVaTen}}">
			</div>
			
			@if($errors->has('NgaySinh'))
				<tr>
					<p style="color:red">{{$errors->first('NgaySinh')}}</p>
				</tr>
			@endif
			<div class="form-group">
				<label for="NgaySinh">Ngày sinh:</label>
				<input type="date" name="NgaySinh" id="NgaySinh" class="form-control" value="{{$user->NgaySinh}}">
			</div>
			
			@if($errors->has('GioiTinh'))
			<tr>
				<p style="color:red">{{$errors->first('GioiTinh')}}</p>
			</tr>
			@endif
			<div class="form-group">
				<label for="GioiTinh">Giới Tính:</label>
				<select  class="form-control" id="GioiTinh" name="GioiTinh" value="{{$user->GioiTinh}}">
					<option value="Nam">Nam</option>
					<option value="Nữ">Nữ</option>
					<option value="Khác">Khác</option>
				</select>
			</div>
			@if($errors->has('SoDienThoai'))
			<tr>
				<p style="color:red">{{$errors->first('SoDienThoai')}}</p>
			</tr>
			@endif
			<div class="form-group">
				<label for="SoDienThoai">Số điện thoại:</label>
				<input type="number" name="SoDienThoai" id="SoDienThoai" class="form-control" value="{{$user->SoDienThoai}}">
			</div>
			@if($errors->has('email'))
			<tr>
				<p style="color:red">{{$errors->first('email')}}</p>
			</tr>
			@endif
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
			</div>
			<div class="form-group">
				<label for="DiaChi">Địa chỉ:</label>
				<input type="text" name="DiaChi" id="DiaChi" class="form-control" value="{{$user->DiaChi}}">
			</div>
			<div class="form-group">
				<label for="ThanhPho">Thành phố:</label>
				<input type="text" name="ThanhPho" id="ThanhPho" class="form-control" value="{{$user->ThanhPho}}">
			</div>
			<div class="form-group">
				<label for="Quan">Quận:</label>
				<input type="text" name="Quan" id="Quan" class="form-control" value="{{$user->Quan}}">
			</div>
			<div class="form-group">
				<button class="btn btn-info" type="submit" id="loginbutton">Sửa đổi</button>
			</div>
			{!! csrf_field() !!}
		</form>
	</div>
</div>
@endsection