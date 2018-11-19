<form method="post" enctype="multipart/form-data">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption"  style="margin-top:4px;">
                <i class="fa fa-reorder"></i>
				<?php
				if(empty($finds->id)){
					echo getLanguage('all', 'Add');
				}
				else{
					echo getLanguage('all', 'Edit');
				}
				?>
            </div>
            <div class="tools">
				<ul class="button-group pull-right" style="margin-top:-3px; margin-bottom:5px;">   
							<li id="">
							   <a href="<?=admin_url();?>picture">
                                <button type="button" class="button">
                                    <i class="fa fa-step-backward"></i>
                                   Quay lại
                                </button>
								</a>
                            </li>
                            <li id="refresh">
                                <button type="button" class="button">
                                    <i class="fa fa-refresh"></i>
                                    Làm mới
                                </button>
                            </li>
                            <?php 
							if(empty($finds->id)){
								if (isset($permission['add'])) { ?>
                                <li id="save">
                                    <button type="button" class="button">
                                        <i class="fa fa-plus"></i>
                                        Lưu
                                    </button>
                                </li>
							    <li id="saves">
                                    <button type="button" class="button">
                                        <i class="fa fa-plus"></i>
                                        Lưu và đóng
                                    </button>
                                </li>
							<?php } }
							else{
								if (isset($permission['edit'])) { ?>
                                <li id="edit">
                                    <button type="button" class="button">
                                        <i class="fa fa-save"></i>
                                       Sửa
                                    </button>
                                </li>
								<li id="edits">
                                    <button type="button" class="button">
                                        <i class="fa fa-save"></i>
                                       Sửa và đóng
                                    </button>
                                </li>
                            <?php } 
							}?>						
                            
                        </ul>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-1">Tiêu đề (<span class="red">*</span>)</label>
                        <div class="col-md-11">
                            <input style="margin-left:28px; width:97.5%" type="text" name="title" id="title" value="<?=$finds->title;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>	
			<div class="row mtop10"> 
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-4">Công nghệ</label>
						<div class="col-md-8" >
							<select name="typeid" id="typeid" class="combos" >
								<option value=""></option>
								<?php foreach ($technologys as $item) { ?>
									<option value="<?=$item->id;?>"><?=$item->language;?> - <?=$item->title;?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Hình ảnh/Video</label>
                        <div class="col-md-8">
                            <div class="col-md-6" style="padding:0px !important;" >
                                <ul style="margin:0px;" class="button-group">
                                    <li class="" onclick ="javascript:document.getElementById('imageEnableThumb').click();"><button type="button" class="btnone">Chọn hình</button></li>
                                </ul>
                                <input style='display:none;' accept="*" id ="imageEnableThumb" type="file" name="userfile2">
                            </div>
                            <div class="col-md-6" >
                                <span id="show2"></span> 
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Loại</label>
                        <div class="col-md-8">
                            <select name="video" id="video" class="combos" >
								<option value="1"></option>
								<option <?php if(1 == $finds->video){?> selected <?php }?> value="1">Hình ảnh</option>
								<option <?php if(2 == $finds->video){?> selected <?php }?> value="2">Video</option>
							</select>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row mtop10">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Youtube</label>
                        <div class="col-md-8">
                            <input type="text" name="youtube" id="youtube" value="<?=$finds->youtube;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>	
            <div class="row mtop10">
                <div class="col-md-12">
                        <div class="form-group">
                                <label class="control-label col-md-1">Nội dung</label>
                                <div class="col-md-11" style="padding-left:44px !important;">
                                    <textarea class="ckeditor form-control" id="description_sort" name="description_sort"><?=$finds->description_sort;?></textarea>
                                </div>
                        </div>
                </div>
            </div>
            <div class="row mtop10">
                <div class="col-md-12">
                    <div class="mright10" >
                        <input type="hidden" name="id" id="id" value="<?=$finds->id;?>"/>
                        <input type="hidden" id="token" name="<?= $csrfName; ?>" value="<?= $csrfHash; ?>" />
                        
                    </div>		
                </div>
            </div>
        </div>
    </div>
</form>
<div class="loading" style="display: none;">
    <div class="blockUI blockOverlay" style="width: 100%;height: 100%;top:0px;left:0px;position: absolute;background-color: rgb(0,0,0);opacity: 0.1;z-index: 1000;">
    </div>
    <div class="blockUI blockMsg blockElement" style="width: 30%;position: absolute;top: 15%;left:35%;text-align: center;">
        <img src="<?= url_tmpl() ?>img/ajax_loader.gif" style="z-index: 2;position: absolute;"/>
    </div>
</div> 
<style>
	.control-label {
		margin-top: 2px;
		white-space: nowrap;
	}
</style>
<script>
    var controller = '<?= $controller; ?>/';
    var csrfHash = '<?= $csrfHash; ?>';
    var cpage = 0;
    var search;
    var schoolid = 0;
    $(function() {
		
		$('#imageEnableThumb').change(function(evt) {
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
                       $('#show2').html('<img src="' + e.target.result + '" style="width:60px; height:40px" />');
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
		$('#typeid').multipleSelect({
        	filter: true,
			placeholder:"Chọn công nghệ",
            single: true
        });
		$('#video').multipleSelect({
        	filter: true,
			placeholder:"Chọn loại",
            single: true
        });
        refresh();addform();
		//CKEDITOR.instances['description'].setData("111");
        $('#refresh').click(function() {
            $(".loading").show();
            CKEDITOR.instances['description'].setData("");
            refresh();
        });       
        $('#save').click(function() {
            save('save', '','');
        });
		$('#saves').click(function() {
            save('save', '','1');
        });
        $('#edit').click(function() {
            var id = $('#id').val();
            if (id == '') {
                error('Chọn hình ảnh sửa');
                return false;
            }
            save('edit', id,'');
        });
		 $('#edits').click(function() {
             var id = $('#id').val();
            if (id == '') {
                error('Chọn hình ảnh sửa');
                return false;
            }
            save('edit', id,'1');
        });
		$('.loading').hide();        
	});
    function save(func, id, type) {
        search = getSearch();
        var token = $('#token').val();
		var linkweb = $('#linkweb').val();
        var description_sort = CKEDITOR.instances['description_sort'].getData();
		var description_long = '';
        if ($("#title").val() == '') {
            error("Tiêu đề <?= getLanguage('all', 'empty') ?>");
            $("#title").focus();
            return false;
        }
    
		$('.loading').show();
        var data = new FormData();
        //var objectfile = document.getElementById('imageEnable').files;
		var objectfile2 = document.getElementById('imageEnableThumb').files;
        data.append('userfile', '');
		data.append('userfile2', objectfile2[0]);
        data.append('csrf_stock_name', token);
        data.append('search', search);
        data.append('description_sort', description_sort); 
        data.append('description_long', description_long);
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
				$('.loading').hide();
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
                   var id = '<?=$finds->id;?>';	
				   if(id == ''){
					   success('Thêm mới thành công');
				   }
				   else{
					   success('Sửa thành công');
				   }
                }
				if(type != ''){
					window.location = "<?=admin_url();?>picture";
				}
            },
            error: function() {
				$('.loading').hide();
            }
        });
    }
    function refresh() {
        $('.loading').show();
        $('.searchs').val('');       
       // document.getElementById("checkAll").checked=false;
        csrfHash = $('#token').val();
        search = getSearch();//alert(cpage);      
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
	function addform(){
	   $("#title").val("<?=$finds->title;?>")
		var img = '<?= base_url() ?>files/picture/' + '<?=$finds->image;?>';
		var id = '<?=$finds->id;?>';		
		//$('#id').val(id);
		$('#title').val('<?=$finds->title;?>');//console.log(CKEDITOR.instances);
		$('#youtube').val('<?=$finds->youtube;?>');
		var typeid = '<?=$finds->typeid;?>';
		$('#typeid').multipleSelect('setSelects', typeid.split(','));
		<?php if(!empty($finds->video)){?>
			var video = '<?=$finds->video;?>';
		<?php }else{?>
			var video = '1';
		<?php }?>
		$('#video').multipleSelect('setSelects', video.split(','));
		if(id!=''){
			//$('#show').html('<img src="' + img + '" style="width:70px; height:50px" />');
			$('#show2').html('<img src="' + img + '" style="width:70px; height:50px" />');
		}
		
	}
</script>
<script src="<?= url_tmpl(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>ckeditor/ckeditor.js" type="text/javascript"></script>
