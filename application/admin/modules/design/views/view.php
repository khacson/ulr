<style title="" type="text/css">
	table col.c1 { width: 45px; }
	table col.c2 { width: 45px; }
	table col.c3 { width: 300px; }
	table col.c4 { width: 120px; }
	table col.c5 { width: 120px; }
	table col.c6 { width: 70px; }
	table col.c7 { width: 150px; }
	table col.c8 { width: 150px; }
	table col.c9 { width: 150px; }
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
                        <label class="control-label col-md-4">Tiêu đề</label>
                        <div class="col-md-8">
                            <input type="text" name="title" id="title" class="searchs form-control" />
                        </div>
                    </div>
                </div> 
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-4">Ngôn ngữ</label>
						<div class="col-md-8" >
							<select name="language" id="language" class="combos" >
								<?php foreach ($languages as $item) { ?>
									<option value="<?=$item->lang_code;?>"><?=$item->lang_name?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
                <div class="col-md-4">
                    <div class="mright10" >
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" id="token" name="<?= $csrfName; ?>" value="<?= $csrfHash; ?>" />
                    </div>		
                </div>
            </div>
        </div>
    </div>
</form>
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption"  style="margin-top:4px;">
            <i>Có <span class='viewtotal'>0</span> thiết kế</i>
        </div>
        <div class="tools">
            <ul class="button-group pull-right" style="margin-top:-3px; margin-bottom:5px;">
				<li id="search">
					<button type="button" class="button">
						<i class="fa fa-search"></i>
						Tìm kiếm
					</button>
				</li>
				<li id="refresh">
					<button type="button" class="button">
						<i class="fa fa-refresh"></i>
						Làm mới
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
                                <th id="ord_p.title">Tiêu đề</th>
								<th id="ord_p.lang">Ngôn ngữ</th>
								<th >Hình ảnh</th> 
								<th id="ord_ordering">Vị trí</th>
								<th id="">Hiển thị</th>
                                <th id="ord_p.datecreate">Ngày tạo</th>
                                <th id="ord_p.usercreate">Người tạo</th>
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
            for (var i = 0, f; f = files[i]; i++) {
                var size = f.size;
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
            //save('save', '');
			var id = $('#id').val();
            location.href = '<?=base_url()."admin.php/design/form"?>';
        });
        $('#edit').click(function() {
            var id = $('#id').val();
            if (id == '') {
                error('Please select a item.');
                return false;
            }
            //save('edit', id);			
            location.href = '<?=base_url()."admin.php/design/edits/"?>'+id;
        });
		$('#language').multipleSelect({
        	filter: true,
            placeholder:"Chọn ngôn ngữ",
            single:true
        });
		$('#language').multipleSelect('uncheckAll');
        $('#delete').click(function(){
			var id = getCheckedId();
			 if (id == '') {
                error('Please select a item.');
                return false;
            }
            $.msgBox({
                title: 'Message',
                type: 'error',
                content: 'Bạn muốn xóa thiết kế?',
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
    function funcList(obj) {
        $('.edit').each(function(e) {
            $(this).click(function() {
                var title = $(this).attr('title');
                var designtypeid = $(this).attr('designtypeid');
                $('#title').val(title);
				$('#designtypeid').multipleSelect('setSelects',[designtypeid]);
            });
        });
		 $('.isshow').each(function(e) {
            $(this).click(function() {
				$('.loading').show();
                var id = $(this).attr('id');
				var value = $(this).attr('value'); 
                $.ajax({ 
					url: controller + 'isshow',
					type: 'POST',
					async: false,
					data: {id:id, value:value},
					success: function(datas) { $('.loading').hide();}
				 });
            });
        });
		 $('.isnew').each(function(e) {
            $(this).click(function() {
				$('.loading').show();
                var id = $(this).attr('id');
				var value = $(this).attr('value'); 
                $.ajax({ 
					url: controller + 'isnew',
					type: 'POST',
					async: false,
					data: {id:id, value:value},
					success: function(datas) { $('.loading').hide();}
				 });
            });
        });
		 $('.iskm').each(function(e) {
            $(this).click(function() {
				$('.loading').show();
                var id = $(this).attr('id');
				var value = $(this).attr('value'); 
                $.ajax({ 
					url: controller + 'iskm',
					type: 'POST',
					async: false,
					data: {id:id, value:value},
					success: function(datas) { $('.loading').hide();}
				 });
            });
        });
		 $('.isnb').each(function(e) {
            $(this).click(function() {
				$('.loading').show();
                var id = $(this).attr('id');
				var value = $(this).attr('value'); 
                $.ajax({ 
					url: controller + 'isnb',
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
		 $('.isshow').each(function(e) {
            $(this).click(function() {
				$('.loading').show();
                var id = $(this).attr('id');
				var value = $(this).attr('value'); 
                $.ajax({ 
					url: controller + 'isshow',
					type: 'POST',
					async: false,
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