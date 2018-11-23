<style title="" type="text/css">
	table col.c1 { width: 45px; }
	table col.c2 { width: 60px; }
	table col.c3 { width: 180px; }
	table col.c4 { width: 180px; }
	table col.c5 { width: 250px; }
	table col.c6 { width: 80px; }
	table col.c7 { width: auto; }
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
                        <label class="control-label col-md-4">Tiêu đề</label>
                        <div class="col-md-8">
                            <input type="text" name="slide_name" id="slide_name" class="searchs form-control" />
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-5">Tiêu đề 2</label>
                        <div class="col-md-7">
                            <input type="text" name="slide_name2" id="slide_name2" class="searchs form-control" />
                        </div>
                    </div>
                </div>             
                <div class="col-md-4">
                    <div class="" >
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" id="token" name="<?= $csrfName; ?>" value="<?= $csrfHash; ?>" />
                        <ul class="button-group pull-right">
                            <li id="search">
                                <button type="button" class="button">
                                    <i class="fa fa-search"></i>
                                    Tìm kiếm
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
                                       Thêm mới
                                    </button>
                                </li>
                            <?php } ?>
                     
                            <?php if (isset($permission['delete'])) { ?>
                                <li id="delete">
                                    <button type="button" class="button">
                                        <i class="fa fa-times"></i>
                                        Xóa
                                    </button>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>		
                </div>
            </div>
        </div>
    </div>
</form>
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i>Có <span class='viewtotal'>0</span> banner</i>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
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
                            <?php for ($i = 1; $i < 8; $i++) { ?>
                                <col class="c<?= $i; ?>">
                            <?php } ?>
                            <tr>
                                <th width="40px" class="text-center"><input type="checkbox" name="checkAll" id="checkAll" /></th>
                                <th>STT</th>
                                <th id="ord_slide_name">Tiêu đề</th>
								<th id="ord_slide_name">Tiêu để 2</th>
                                <th id="ord_description">Mô tả</th>
                                <th id="ord_img">Hình ảnh</th>
                                <th></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--end header-->
                <!--body-->
                <div id="data">
                    <div id="gridView">
                        <table id="tbbody" width="100%" cellspacing="0" border="1">
                            <?php for ($i = 1; $i < 8; $i++) { ?>
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
            for (var i = 0, f; f = files[i]; i++) {
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
            //CKEDITOR.instances['description'].setData("");
            refresh();
        });
        $('#search').click(function() {
            $('.loading').show();
            searchList();
        });
        $('#save').click(function() {
			location.href = '<?=admin_url()."slideproduct/add/"?>';
        });
        $('#delete').click(function() {
			var id = getCheckedId();
            if (id == '') {
                error('Please select a item.');
                return false;
            }
            $.msgBox({
                title: 'Message',
                type: 'error',
                content: 'Do you want to delete this item?',
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
                                    error('<?= getLanguage('all', 'delete_suc') ?>');
                                    return false;
                                }
                                else {
                                    //CKEDITOR.instances['description'].setData("");
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
        var token = $('#token').val();
        var description = CKEDITOR.instances['description'].getData();
        if ($("#slide_name").val() == '') {
            error("Slide name <?= getLanguage('all', 'empty') ?>");
            $("#slide_name").focus();
            return false;
        }
        if (description == "") {
            error("Description <?= getLanguage('all', 'empty') ?>");
            return false;
        }
        if ($("#url").val() == "") {
            error("Url <?= getLanguage('all', 'empty') ?>");
            return false;
        }
        
        var data = new FormData();
        var objectfile = document.getElementById('imageEnable').files;
        data.append('userfile', objectfile[0]);
        data.append('csrf_stock_name', token);
        data.append('search', search);
        data.append('description', description);
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
                else {
					if (id != '') {
                        success('Sửa thành công');
                        return false;
                    }
                    else {
                        success('Thêm mới thành công');
                        return false;
                    }
                    CKEDITOR.instances['description'].setData("");
                    refresh();
                }
            },
            error: function() {

            }
        });
    }
    function funcList(obj) {
        $('.edit').each(function(e) {
            $(this).click(function() {
                //var slidename = $('.slide_name').eq(e).html().trim();
                //var description = $('.description').eq(e).html().trim();
                var url = $('.url').eq(e).html().trim();
               // var img = '<?= base_url() ?>files/slideproduct/' + $(this).attr('img');
				
                var id = $(this).attr('id');
				var slide_name = $(this).attr('slide_name');
                $('#id').val(id);
                $('#slide_name').val(slide_name);
                //CKEDITOR.instances['description'].setData(description);
                $('#url').val(url);
               //$('#show').html('<img src="' + img + '" style="width:100px; height:50px" />');
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
    function addslashes(string) {
        return string.replace(/\\/g, '\\\\').
            replace(/\u0008/g, '\\b').
            replace(/\t/g, '\\t').
            replace(/\n/g, '\\n').
            replace(/\f/g, '\\f').
            replace(/\r/g, '\\r').
            replace(/'/g, '\\\'').
            replace(/"/g, '\\"');
    }
</script>
<script src="<?= url_tmpl(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>ckeditor/ckeditor.js" type="text/javascript"></script>
