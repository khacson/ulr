<div class="container">
	<div class="box-wrapper">				
		<div class="box box-border">
			<div class="box-body form-register">
				<h4>Cấp lại mật khẩu</h4>
				<form>
					<div class="form-group">
						<label>Mật khẩu mới</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label class="fw">Xác nhận mật khẩu mới</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group text-right">
						<button  type="button" class="btn btn-primary btn-block">Cấp lại mật khẩu</button>
					</div>
					<div class="form-group text-center">
						<span class="text-muted"></span>
					</div>
					<div class="form-group text-right">
						<button id="register" type="button" data-href="<?=base_url();?>dang-nhap.html" class="btn btn-info btn-block">Đăng nhập</button>
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