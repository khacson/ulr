<div class="container">
    <div class="box-wrapper">				
        <div class="box box-border">
            <div class="box-body form-register">
                <h4>Quên mật khẩu</h4>
                <form>
                    <div class="form-group">
                        <label>Địa chỉ email</label>
                        <input type="text" name="username" id="fg_username" class="form-control f-fg">
                    </div>
                    <div class="form-group text-right">
                        <button id="rp_btn" type="button" class="btn btn-info btn-block">Đồng ý</button>
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
        // Su kien focus vao input trong form quen pass
        $(document.body).on({
            focusin: function () {
                $(this).removeClass('err');
            },
            change: function () {
                $(this).removeClass('err');
            }
        }, ".f-fg");

        // Su kien nhan nut reset password
        $('#rp_btn').on('click', function () {
            if (!f_run) {
                // check username
                var fg_username = $('#fg_username').val().trim();
                if (fg_username.length === 0) {
                    $('#fg_username').addClass('err');
                    alert('Vui lòng nhập email');
                    return false;
                }
                if (!checkEmailValid(fg_username)) {
                    $('#fg_username').addClass('err');
                    alert('Vui lòng nhập email hợp lệ');
                    return false;
                }
                f_run = true;
                $.ajax({
                    type: "POST",
                    url: url + control + '/createResetPassword' + suffix,
                    data: {email: fg_username}
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
    function checkEmailValid(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
</script>