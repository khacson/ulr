<div class="container">
    <div class="box-wrapper">				
        <div class="box box-border">
            <div class="box-body form-register">
                <h4>Đăng ký thành viên</h4>
                <form>
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" name="name" id="reg_name" class="form-control f-reg" value="Huy">
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="email" name="email" id="reg_phone" class="form-control f-reg" value="0988656070">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="reg_email" class="form-control f-reg" value="huyabc@gmail.com">
                    </div>
                    <div class="form-group">
                        <label class="fw">Mật khẩu</label>
                        <input type="password" name="password" id="reg_pass" class="form-control f-reg" value="123456">
                    </div>
                    <div class="form-group">
                        <label class="fw">Xác nhận mật khẩu</label>
                        <input type="password" name="cfpassword" id="reg_repass" class="form-control f-reg" value="123456">
                    </div>
                    <div class="form-group text-right">
                        <button type="button" id="reg_btn" class="btn btn-primary btn-block">Đăng ký</button>
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
<style>
    .err {
        border-color: red !important;
    }
</style>
<script type="text/javascript">
    var url = '<?= base_url() ?>';
    var suffix = '';
    var control = 'account';
    var f_run = false;
    $(function () {
        // Su kien focus vao input trong form register
        $(document.body).on({
            focusin: function () {
                $(this).removeClass('err');
            },
            change: function () {
                $(this).removeClass('err');
            }
        }, ".f-reg");

        // Su kien nhan nut register
        $('#reg_btn').on('click', function () {
            if (!f_run) {
                var datas = checkValid();
                if (datas.status === 'fail') {
                    $('#' + datas.ele).addClass('err');
                    alert(datas.msg);
                    return false;
                }
                f_run = true;
                $.ajax({
                    type: "POST",
                    url: url + control + '/register_process' + suffix,
                    data: datas.data
                }).done(function (r) {
                    f_run = false;
                    var obj = JSON.parse(r);
                    if (obj.errcode === '1') {
                        alert(obj.msg);
                    } else if (obj.errcode === '2') {
                        $('#reg_email').addClass('err');
                        alert(obj.msg);
                    } else {
                        alert(obj.msg);
                    }
                }).fail(function (x) {
                    f_run = false;
                    alert("Mạng internet không ổn định, vui lòng thực hiện lại");
                });
            }
        });
        // Su kien click nut login
        $('#login').click(function () {
            window.location = url + 'dang-nhap.html';
        });
    });
    /*
     * JS kiểm tra thông tin trên form hợp lệ hay không
     */
    function checkValid() {
        var rt = {'status': 'fail', 'msg': '', 'ele': ''};
        var reg_name = $('#reg_name').val().trim();
        var reg_phone = $('#reg_phone').val().trim();
        var reg_email = $('#reg_email').val().trim();
        var reg_pass = $('#reg_pass').val().trim();
        var reg_repass = $('#reg_repass').val().trim();
        if (reg_name.length === 0) {
            rt = {'status': 'fail', 'msg': 'Vui lòng nhập họ tên', 'ele': 'reg_name'};
        } else if (reg_phone.length === 0) {
            rt = {'status': 'fail', 'msg': 'Vui lòng nhập số điện thoại', 'ele': 'reg_name'};
        } else if (reg_email.length === 0) {
            rt = {'status': 'fail', 'msg': 'Vui lòng nhập địa chỉ email', 'ele': 'reg_email'};
        } else if (!checkEmailValid(reg_email)) {
            rt = {'status': 'fail', 'msg': 'Vui lòng nhập địa chỉ email đúng định dạng', 'ele': 'reg_email'};
        } else if (reg_pass.length === 0) {
            rt = {'status': 'fail', 'msg': 'Vui lòng nhập mật khẩu', 'ele': 'reg_pass'};
        } else if (reg_pass !== reg_repass) {
            rt = {'status': 'fail', 'msg': 'Mật khẩu không khớp, vui lòng kiểm tra lại', 'ele': 'reg_repass'};
        } else {
            var data = {'name': reg_name, 'phone': reg_phone, 'email': reg_email, 'pass': reg_pass};
            rt = {'status': 'pass', 'msg': 'Đang gửi thông tin đăng ký, vui lòng đợi trong giây lát', 'ele': '', 'data': data};
        }
        return rt;
    }
    function checkEmailValid(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
</script>