<div class="container">
	<div class="box-wrapper">				
		<div class="box box-border">
			<div class="box-body form-register">
				<h4>Quên mật khẩu</h4>
				<form>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group text-right">
						<button  type="button" class="btn btn-primary btn-block">Gửi mật khẩu</button>
					</div>
					<div class="form-group text-center">
						<span class="text-muted">Bạn chưa có tài khoản?</span>
					</div>
					<div class="form-group text-right">
						<button id="register" type="button" data-href="<?=base_url();?>dang-ky.html" class="btn btn-info btn-block">Đăng ký</button>
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
		$('#register').click(function(){
			window.location = url + 'dang-ky.html';
		});
	});
</script>