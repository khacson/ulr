<style title="" type="text/css">
    table col.c1 { width: 45px; }
    table col.c2 { width: 60px; }
    table col.c3 { width: 200px; }
	table col.c4 { width: 150px; }
	table col.c5 { width: 200px; }
	table col.c6 { width: 200px; }
	table col.c7 { width: 100px; }
	table col.c8 { width: 90px; }
	table col.c9 { width: 90px; }
    table col.c10 { width: auto; }
</style>
<!-- BEGIN PORTLET-->
<form method="post" enctype="multipart/form-data">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-reorder"></i>
                <?= getLanguage('all', 'Search') ?>
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse">
                </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Khách hàng (<span class="red">*</span>)</label>
                        <div class="col-md-8">
                            <input type="text" name="customer_name" id="customer_name" class="searchs form-control" />
                        </div>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Điện thoại</label>
                        <div class="col-md-8">
                            <input type="text" name="phone" id="phone" class="searchs form-control" />
                        </div>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Email</label>
                        <div class="col-md-8">
                            <input type="text" name="email" id="email" class="searchs form-control" />
                        </div>
                    </div>
                </div>
			 </div>
			 <div class="row mtop10">
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Web site</label>
                        <div class="col-md-8">
                            <input type="text" name="website" id="website" class="searchs form-control" />
                        </div>
                    </div>
                </div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-4">Hình ảnh</label>
						<div class="col-md-8">
							<div class="col-md-6" style="padding:0px !important;" >
								<ul style="margin:0px;" class="button-group">
									<li class="" onclick ="javascript:document.getElementById('imageEnable').click();"><button type="button" class="btnone">Chọn hình</button></li>
								</ul>
								<input style='display:none;' accept="image/*" id ="imageEnable" type="file" name="userfile">
							</div>
							<div class="col-md-6" >
								 <span id="show"></span> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" id="token" name="<?= $csrfName; ?>" value="<?= $csrfHash; ?>" />
                        
					  </div>
			</div>
        </div>
    </div>
</form>
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption" style="margin-top:4px;">
            <i>Có <span class='viewtotal'>0</span> Khách hàng</i>
        </div>
        <div class="tools">
           <ul class="button-group pull-right" style="margin-top:-3px; margin-bottom:5px;">
                            <li id="search">
                                <button type="button" class="button">
                                    <i class="fa fa-search"></i>
                                    <?= getLanguage('all', 'Search') ?>
                                </button>
                            </li>
                            <li id="refresh">
                                <button type="button" class="button">
                                    <i class="fa fa-refresh"></i>
                                    <?= getLanguage('all', 'Refresh') ?>
                                </button>
                            </li>
                            <?php if (isset($permission['add'])) { ?>
                                <li id="save">
                                    <button type="button" class="button">
                                        <i class="fa fa-plus"></i>
                                        <?= getLanguage('all', 'Add') ?>
                                    </button>
                                </li>
                            <?php } ?>
                            <?php if (isset($permission['edit'])) { ?>
                                <li id="edit">
                                    <button type="button" class="button">
                                        <i class="fa fa-save"></i>
                                        <?= getLanguage('all', 'Edit') ?>
                                    </button>
                                </li>
                            <?php } ?>
                            <?php if (isset($permission['delete'])) { ?>
                                <li id="delete">
                                    <button type="button" class="button">
                                        <i class="fa fa-times"></i>
                                        <?= getLanguage('all', 'Delete') ?>
                                    </button>
                                </li>
                            <?php } ?>
                        </ul>
        </div>
    </div>
    <div class="portlet-body">
        <div class="portlet-body">
            <div id="gridview" >
                <table class="resultset" id="grid"></table>
                <!--header-->
                <div id="cHeader">
                    <div id="tHeader">    	
                        <table id="tbheader" width="100%" cellspacing="0" border="1" >
                            <?php for ($i = 1; $i < 11; $i++) { ?>
                                <col class="c<?= $i; ?>">
                            <?php } ?>
                            <tr>
                                <th width="40px" class="text-center"><input type="checkbox" name="checkAll" id="checkAll" /></th>
                                <th>STT</th>
                                <th id="ord_customer_name">Khách hàng</th>
                                <th>Điện thoại</th>
								<th>Email</th>
								<th>Web site</th>
								<th>Logo</th>
                                <th id="ord_ishome">Trang chủ</th>
								<th id="ord_ordering">Vị trí</th>
								<th></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--end header-->
                <!--body-->
                <div id="data">
                    <div id="gridView">
                        <table id="tbbody"  width="100%" cellspacing="0" border="1">
                            <?php for ($i = 1; $i < 11; $i++) { ?>
                                <col class="c<?= $i; ?>">
                            <?php } ?>
                            <tbody id="grid-rows"></tbody>
                        </table>
                    </div>
                </div>
                <!--end body-->
            </div>
        </div>
        <div class="portlet-body">
            <div class="fleft" id="paging"></div>
        </div>
    </div>
</div>
<!-- END PORTLET-->
<!-- END PORTLET-->
<div class="loading" style="display: none;">
    <div class="blockUI blockOverlay" style="width: 100%;height: 100%;top:0px;left:0px;position: absolute;background-color: rgb(0,0,0);opacity: 0.1;z-index: 1000;">
    </div>
    <div class="blockUI blockMsg blockElement" style="width: 30%;position: absolute;top: 15%;left:35%;text-align: center;">
        <img src="<?= url_tmpl() ?>img/ajax_loader.gif" style="z-index: 2;position: absolute;"/>
    </div>
</div> 
<script>
    var controller = '<?= $controller; ?>/';
    var csrfHash = '<?= $csrfHash; ?>';
    var cpage = 0;
    var search;
    var schoolid = 0;
    $(function() {
        $('#imageEnable').change(function(evt) {
            var files = evt.target.files;
            for (var i = 0, f; f = files[i]; i++){
                var size = f.size;
                //if (size < 2048000){
                    if (!f.type.match('image.*'))
                    {
                        continue;
                    }
                    var reader = new FileReader();
                    reader.onload = (function(theFile) {
                        return function(e) { //size e = e.tatal
                            $('#show').html('<img src="' + e.target.result + '" style="width:60px; height:40px" />');
                            $("#img1").val(e.target.result);
                        };
                    })(f);
                    reader.readAsDataURL(f);
                /*}
                else{
                    $('#fileupload').val(');
                    $('.showImages').attr('src', ');
                    alert("File size can't over 2Mb.");
                }*/
            }
        });
        refresh();
        $('#refresh').click(function() {
            $(".loading").show();
            refresh();
        });
        $('#search').click(function() {
            $('.loading').show();
            searchList();
        });
        $('#save').click(function() {
            save('save', '');
        });
        $('#edit').click(function() {
            var id = $('#id').val();
            if (id == '') {
                warning('Vui lòng chọn Khách hàng để sửa');
                return false;
            }
            save('edit', id);
        });
        $('#delete').click(function() {
            $.msgBox({
                title: 'Message',
                type: 'error',
                content: 'Bạn muốn xóa Khách hàng?',
                buttons: [{value: 'Yes'}, {value: 'No'}],
                success: function(result) {
                    if (result == 'Yes') {
                        var id = getCheckedId();
                        var token = $('#token').val();
                        $.ajax({
                            url: controller + 'deletes',
                            type: 'POST',
                            async: false,
                            data: {csrf_stock_name: token, id: id},
                            success: function(datas) {
                                var obj = $.evalJSON(datas);
                                $('#token').val(obj.csrfHash);
                                if (obj.status == 0) {
                                    error('Xóa không thành công');
                                    return false;
                                }
                                else {
									success('Xóa thành công');
                                    refresh();
                                }

                            },
                            error: function() {

                            }
                        });
                    }
                }
            });
        });
    });
    function save(func, id) {
        search = getSearch();
        var obj = $.evalJSON(search);
        var token = $('#token').val();

        if (obj.customer_name == '') {
            error("Khách hàng không được trống");
            return false;
        }
        $('.loading').show();
        var data = new FormData();
		var objectfile = document.getElementById('imageEnable').files;
		data.append('userfile', objectfile[0]);
        data.append('csrf_stock_name', token);
        data.append('search', search);
        data.append('id', id);
        $.ajax({
            url: controller + func,
            type: 'POST',
            async: false,
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            success: function(datas) {
                var obj = $.evalJSON(datas);
                $("#token").val(obj.csrfHash);
				$('.loading').hide();
                if (obj.status == 0) {
                    if (id != '') {
                        error('Sửa không thành công');
                        return false;
                    }
                    else {
                        error('Thêm mới không thành công');
                        return false;
                    }
                }
                else if (obj.status == -1) {
                    error("Khách hàng đã tồn tại");
                    return false;
                }
                else {
					if (id != '') {
                        success('Sửa thành công');
                        //return false;
                    }
                    else {
                        success('Thêm mới thành công');
                        //return false;
                    }
                    refresh();
                }
            },
            error: function() {
				$('.loading').hide();
            }
        });
    }
    function funcList(obj) {
        $('.edit').each(function(e) {
            $(this).click(function() {
                var customer_name = $('.customer_name').eq(e).html().trim();
                var phone  = $('.phone').eq(e).html().trim();
				var email  = $('.email').eq(e).html().trim();
				var website  = $('.websites').eq(e).html().trim();

				var id = $(this).attr('id');
                $('#id').val(id);
                $('#customer_name').val(customer_name);
				$('#phone').val(phone);
				$('#email').val(email);
				$('#website').val(website);
            });
        });
		$('.ishome').each(function(e) {
            $(this).click(function() {
				$('.loading').show();
                var id = $(this).attr('id');
				var value = $(this).attr('value'); 
                $.ajax({ 
					url: controller + 'isHome',
					type: 'POST',
					async: false,
					data: {id:id, value:value},
					success: function(datas) { $('.loading').hide();}
				 });
            });
        });
		$('.ordering').each(function(e) {
            $(this).click(function() {
				//$('.loading').show();
                var id = $(this).attr('id');
				var value = $(this).val(); 
                $.ajax({ 
					url: controller + 'ordering',
					type: 'POST',
					//async: false,
					data: {id:id, value:value},
					success: function(datas) { $('.loading').hide();}
				 });
            });
			$(this).keyup(function() {
				//$('.loading').show();
                var id = $(this).attr('id');
				var value = $(this).val(); 
                $.ajax({ 
					url: controller + 'ordering',
					type: 'POST',
					//async: false,
					data: {id:id, value:value},
					success: function(datas) { $('.loading').hide();}
				 });
            });
        });
    }
    function refresh() {
        $('.loading').show();
        $('.searchs').val('');
        $('#show').html('');
        document.getElementById("checkAll").checked=false;
        csrfHash = $('#token').val();
        search = getSearch();//alert(cpage);
        getList(cpage, csrfHash);
    }
    function getCheckedId() {
        var del_list = '';
        $('#grid-rows input.noClick:checked').each(function() {
            var id = $(this).attr('id');
            del_list += ',' + id;
        });
        del_list = del_list.substr(1);
        return del_list;
    }
    function searchList() {
        search = getSearch();//alert(cpage);exit;
        csrfHash = $('#token').val();
        getList(0, csrfHash);
    }
</script>
<script src="<?= url_tmpl(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
