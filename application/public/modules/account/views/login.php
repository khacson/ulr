<div class="container">
    <div class="box-wrapper">				
        <div class="box box-border">
            <div class="box-body form-register">
                <h4>Đăng nhập</h4>
                <form>
                    <div class="form-group">
                        <label>Email hoạc số điện thoại</label>
                        <input type="text" name="username" id="log_username" class="form-control f-log">
                    </div>
                    <div class="form-group">
                        <label class="fw">Mật khẩu
                            <a href="<?= base_url(); ?>quen-mat-khau.html" class="pull-right">Quên mật khẩu?</a>
                        </label>
                        <input type="password" name="password" id="log_password" class="form-control f-log">
                    </div>
                    <div class="form-group text-right">
                        <button  type="button" id="login_btn" class="btn btn-primary btn-block">Đăng nhập</button>
                    </div>
                    <div class="form-group text-center">
                        <span class="text-muted">Bạn chưa có tài khoản?</span>
                    </div>
                    <div class="form-group text-right">
                        <button id="register" type="button" data-href="<?= base_url(); ?>dang-ky.html" class="btn btn-info btn-block">Đăng ký</button>
                    </div>
                </form>
            </div>
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
                    notify.warning('Vui lòng nhập email/số điện thoại');
                    return false;
                }
                // check password
                var log_password = $('#log_password').val().trim();
                if (log_password.length === 0) {
                    $('#log_password').addClass('err');
                    notify.warning('Vui lòng nhập mật khẩu');
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
                        notify.success(obj.msg);
                    } else { // that bai
                        notify.error(obj.msg);
                    }
                }).fail(function (x) {
                    f_run = false;
                    notify.error("Đăng nhập bị lỗi, vui lòng thực hiện lại");
                });
            }
        });
    });
</script>