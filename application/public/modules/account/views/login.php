<div class="container">
	<div class="box-wrapper">				
		<div class="box box-border">
			<div class="box-body form-register">
				<h4>Đăng nhập</h4>
				<form>
					<div class="form-group">
						<label>Số điện thoại hoạc email</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label class="fw">Mật khẩu
							<a href="forgot.html" class="pull-right">Quên mật khẩu?</a>
						</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group text-right">
						<button class="btn btn-primary btn-block">Đăng nhập</button>
					</div>
					<div class="form-group text-center">
						<span class="text-muted">Bạn chưa có tài khoản?</span> <a href="register.html">Tạo tài khoản</a>
					</div>
					<div class="title-line">
						Hoặc
					</div>
					<div class="row">
						<div class="col-md-6">
							<a href="<?=filter_var($facebookUrl, FILTER_SANITIZE_URL)?>" class="btn btn-social btn-block facebook"><i class="ion-social-facebook"></i>Facebook</a>
						</div>
						<div class="col-md-6">
							<a href="<?=filter_var($authUrl, FILTER_SANITIZE_URL)?>" class="btn btn-social btn-block googleplus "><i class="ion-social-googleplus"></i> Google+</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type='text/javascript' src="<?= url_tmpl() ?>js/jquery.json.js"></script>
<script type="text/javascript">
	var url = '<?= base_url() ?>';
	var suffix = '';
    var control = 'account';
	$(function(){
		
	});
	
</script>