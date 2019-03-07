<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
			<br><br><h2 >Đăng ký thành công</h2>
			<img src="<?=url_tmpl();?>icon/register_success_ui.png">
			<h3>Chào, Nguyễn Tất Huy</h3>
			<p class="success-title">Thank you for verifying your Mobile No.We have sent you an email "faisalkhan.chat@gmail.com" with your details
	Please go to your above email now and login.</p>
			<a href="<?=base_url();?>dang-nhap" class="btn btn-success">   Đăng nhập</a>
		<br><br>
        </div>
	</div>
</div>
<style>
    .err {
        border-color: red !important;
    }
</style>
<script type="text/javascript">
    var url = '<?= base_url() ?>';
    var suffix = '';
    var control = 'account';
    var f_run = false; // co check running
    $(function () {
        // Su kien focus vao input trong form login
        $(document.body).on({
            focusin: function () {
                $(this).removeClass('err');
            },
            change: function () {
                $(this).removeClass('err');
            }
        }, ".f-log");

        // Su kien nhan nut login
        $('#login_btn').on('click', function () {
            if (!f_run) {
                // check username
                var log_username = $('#log_username').val().trim();
                if (log_username.length === 0) {
                    $('#log_username').addClass('err');
                    alert('Vui lòng nhập email/số điện thoại');
                    return false;
                }
                // check password
                var log_password = $('#log_password').val().trim();
                if (log_password.length === 0) {
                    $('#log_password').addClass('err');
                    alert('Vui lòng nhập mật khẩu');
                    return false;
                }
                f_run = true;
                $.ajax({
                    type: "POST",
                    url: url + control + '/login_process' + suffix,
                    data: {username: log_username, password: log_password}
                }).done(function (r) {
                    f_run = false;
                    var obj = JSON.parse(r);
                    if (obj.errcode === '1') { // thanh cong
                        alert(obj.msg);
                    } else { // that bai
                        alert(obj.msg);
                    }
                }).fail(function (x) {
                    f_run = false;
                    alert("Mạng internet không ổn định, vui lòng thực hiện lại");
                });
            }
        });
    });
</script>