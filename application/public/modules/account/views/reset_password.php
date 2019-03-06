<div class="container">
    <div class="box-wrapper">               
        <div class="box box-border">
            <div class="box-body form-reset_pass">
                <h4>Đặt lại mật khẩu</h4>
                <form>
                    <div class="form-group">
                        <label class="fw">Mật khẩu mới</label>
                        <input type="password" name="password" id="reset_pass" class="form-control f-rp" value="123456">
                        <input type="hidden" id="reset_token" value="<?=$token;?>">
                    </div>
                    <div class="form-group">
                        <label class="fw">Xác nhận mật khẩu</label>
                        <input type="password" name="cfpassword" id="reset_repass" class="form-control f-rp" value="123456">
                    </div>
                    <div class="form-group text-right">
                        <button type="button" id="cp_btn" class="btn btn-primary btn-block">Đồng ý</button>
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
        }, ".f-rp");

        // Su kien nhan nut register
        $('#cp_btn').on('click', function () {
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
                    url: url + control + '/accountChangePassword' + suffix,
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
        var token = $('#reset_token').val().trim();
        var reset_pass = $('#reset_pass').val().trim();
        var reset_repass = $('#reset_repass').val().trim();
        if (reset_pass.length === 0) {
            rt = {'status': 'fail', 'msg': 'Vui lòng nhập mật khẩu', 'ele': 'reset_pass'};
        } else if (reset_pass !== reset_repass) {
            rt = {'status': 'fail', 'msg': 'Mật khẩu không khớp, vui lòng kiểm tra lại', 'ele': 'reset_repass'};
        } else {
            var data = {'pass': reset_pass, 'token': token};
            rt = {'status': 'pass', 'msg': 'Đang gửi thông tin đổi mật khẩu, vui lòng đợi trong giây lát', 'ele': '', 'data': data};
        }
        return rt;
    }
    function checkEmailValid(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
</script>