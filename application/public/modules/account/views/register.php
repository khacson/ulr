<div class="container">
	<div class="box-wrapper">				
		<div class="box box-border">
			<div class="box-body form-register">
				<h4>Đăng ký thành viên</h4>
				<form>
					<div class="form-group">
						<label>Họ tên</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label>Điện thoại</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label class="fw">Mật khẩu</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label class="fw">Xác nhân mật khẩu</label>
						<input type="password" name="cfpassword" class="form-control">
					</div>
					<div class="form-group text-right">
						<button type="button" class="btn btn-primary btn-block">Đăng ký</button>
					</div>
					<div class="form-group text-center">
						<span class="text-muted">Bạn đã có tài khoản?</span> 
					</div>
					<div class="form-group text-right">
						<button id="login" type="button" class="btn btn-info btn-block">Đăng nhập</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var url = '<?= base_url() ?>';
	var suffix = '';
    var control = 'account';
	$(function(){
		$('#login').click(function(){
			window.location = url + 'dang-nhap.html';
		});
	});
</script>