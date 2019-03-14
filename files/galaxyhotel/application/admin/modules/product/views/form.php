<form method="post" enctype="multipart/form-data">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption" style="margin-top:4px; ">    
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
							   <a href="<?=admin_url();?>product">
                                <button type="button" class="button">
                                    <i class="fa fa-step-backward"></i>
                                    <?= getLanguage('all', 'Back') ?>
                                </button>
								</a>
                            </li>
                            <li id="refresh">
                                <button type="button" class="button">
                                    <i class="fa fa-refresh"></i>
                                    <?= getLanguage('all', 'Refresh') ?>
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
                        <label class="control-label col-md-1" style="white-space:nowrap;">Tên phòng (<span class="red">*</span>)</label>
                        <div class="col-md-11">
                            <input style="margin-left:28px; width:97.5%" type="text" name="title" id="title" value="<?=$finds->title;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>
			<!--<div class="row mtop10"> 
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Mã phòng</label>
                        <div class="col-md-8">
                              <input type="text" name="code" id="code" value="<?=$finds->code;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Giá</label>
                        <div class="col-md-8">
                              <input type="text" name="price" id="price" value="<?=$finds->price;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Giá mới</label>
                        <div class="col-md-8">
                              <input  type="text" name="price_new" id="price_new" value="<?=$finds->price_new;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
			</div>-->
			<div class="row mtop10"> 
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Loại phòng (<span class="red">*</span>)</label>
                        <div class="col-md-8">
                             <select class="combos" id="producttypeid" name="producttypeid">
								<option value=""></option>
								<?php foreach($productTypes as $item){?>
								<?php if($item->parentid == 0){?>
									<option value="<?=$item->id;?>"><?=$item->producttype_name;?></option>
									<?php if(isset($arrRer[$item->id])){?>
										<?php foreach($arrRer[$item->id] as $key=>$vals){?>
											<option value="<?=$vals->id;?>">&nbsp;&nbsp;&nbsp;&nbsp;- <?=$vals->producttype_name;?></option>
										<?php }?>
									<?php }?>
							    <?php }}?>
							 </select>
                        </div>
                    </div>
                </div>  
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Giá phòng</label>
                        <div class="col-md-8">
                              <input type="text" name="price" id="price" value="<?=$finds->price;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Loại giá</label>
                        <div class="col-md-8">
                              <input type="text" name="price_type" id="price_type" value="<?=$finds->price_type;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
			</div>
			<div class="row mtop10">	
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Hình đại diện</label>
                        <div class="col-md-8">
                            <div class="col-md-6" style="padding:0px !important;" >
                                <ul style="margin:0px;" class="button-group">
                                    <li class="" onclick ="javascript:document.getElementById('imageEnableThumb').click();"><button type="button" class="btnone">Chọn hình</button></li>
                                </ul>
                                <input style='display:none;' accept="image/*" id ="imageEnableThumb" type="file" name="userfile2">
                            </div>
                            <div class="col-md-6" >
                                <span id="show2"></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="control-label col-md-1">Hình ảnh</label>
                        <div class="col-md-11">
                            <div style="padding-left:0px !important;" class="col-md-1" style="padding:0px !important;" >
                                <ul style="margin:0px;" class="button-group">
                                    <li class="" onclick ="javascript:document.getElementById('imageEnable').click();"><button type="button" class="btnone">Chọn hình</button></li>
                                </ul>
                                <input style='display:none;' accept="image/*" id ="imageEnable" type="file" multiple name="userfile[]">
                            </div>
                            <div class="col-md-11" style="padding-left:30px !important;">
                                <span id="show"></span> 
                            </div>
                        </div>
                    </div>
                </div>
				
            </div>
            <div class="row mtop10">
                <div class="col-md-12">
                        <div class="form-group">
                                <label class="control-label col-md-1">Nội dung ngắn</label>
                                <div class="col-md-11" style="padding-left:44px !important;">
                                    <textarea class="ckeditor form-control" id="description_sort" name="description_sort"><?=$finds->description_sort;?></textarea>
                                </div>
                        </div>
                </div>
            </div>
            <div class="row mtop10">
                <div class="col-md-12">
                        <div class="form-group">
                                <label class="control-label col-md-1">Nội dung chi tiết</label>
                                <div class="col-md-11" style="padding-left:44px !important;">
                                    <textarea class="ckeditor form-control" id="description_long" name="description_long"><?=$finds->description_long;?></textarea>
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
	<div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption"  style="margin-top:4px;">
                Thẻ meta
            </div>
            <div class="tools">
			
			</div>
		</div>
		 <div class="portlet-body">
            <div class="row mtop10">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-1">Meta title</label>
                        <div class="col-md-11">
                            <input style="margin-left:28px; width:97.5%" type="text" name="meta_title" id="meta_title" value="<?=$finds->meta_title;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>
			<div class="row mtop10">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-1">Meta keyword</label>
                        <div class="col-md-11">
                            <input style="margin-left:28px; width:97.5%" type="text" name="meta_keyword" id="meta_keyword" value="<?=$finds->meta_keyword;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>
			<div class="row mtop10">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-1">Meta description</label>
                        <div class="col-md-11">
                            <input style="margin-left:28px; width:97.5%" type="text" name="mete_description" id="mete_description" value="<?=$finds->mete_description;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>
		</div>
	</div>
	<!--S Facebook-->
	<div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption"  style="margin-top:4px;">Facebook</div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-1">Tiêu đề</label>
                        <div class="col-md-11">
                            <input style="margin-left:28px; width:97.5%" type="text" name="face_title" id="face_title" value="<?=$finds->face_title;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>
			<div class="row mtop10">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-1">Mô tả</label>
                        <div class="col-md-11">
                            <input style="margin-left:28px; width:97.5%" type="text" name="face_description" id="face_description" value="<?=$finds->face_description;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>
			<div class="row mtop10">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-1">URL</label>
                        <div class="col-md-11">
                            <input style="margin-left:28px; width:97.5%" type="text" name="face_url" id="face_url" value="<?=$finds->face_url;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>            
			<div class="row mtop10">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-1">Sie name</label>
                        <div class="col-md-11">
                            <input style="margin-left:28px; width:97.5%" type="text" name="face_site_name" id="face_site_name" value="<?=$finds->face_site_name;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>          
        </div>
    </div>
	<!--E Facebook-->
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
                       $('#show2').html('<img src="' + e.target.result + '" style="width:60px; height:40px; " />');
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
        $('#imageEnable').change(function(evt) {
            var files = evt.target.files;
			$('#show').html('');
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
                        $('#show').append('<img src="' + e.target.result + '" style="width:60px; height:40px; float:left; margin-left:5px;" />');
                        
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
		$('#producttypeid').multipleSelect({
        	filter: true,
            placeholder:"Chọn  loại phòng",
            single:true
        });
		var producttypeid = '<?=$finds->producttypeid;?>';
		$('#producttypeid').multipleSelect('setSelects',[producttypeid]);
        refresh();
		addform();
		//CKEDITOR.instances['description'].setData("111");
        $('#refresh').click(function() {
            $(".loading").show();
			CKEDITOR.instances['description_sort'].setData('');
			CKEDITOR.instances['description_long'].setData(''); 
			$('#imageEnableThumb,#imageEnable').val('');	
			$('#show,#show2').html(''); 	
			$('select.combos').multipleSelect('uncheckAll');
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
                error('Please select a item.');
                return false;
            }
            save('edit', id,'');
        });
		$('#edits').click(function() {
            var id = $('#id').val();
            if (id == '') {
                error('Please select a item.');
                return false;
            }
            save('edit', id,'1');
        });
		$('.loading').hide();    
		$('.imgremove').each(function(){
			$(this).click(function(){
				var idimg = $(this).attr('id');
				var img = $(this).attr('img');
				var id = '<?=$finds->id;?>';
				$(this).parent().remove();
				$.ajax({
					url: controller + 'deleteimg',
					type: 'POST',
					async: false,
					data: {img:img,idimg:idimg,id:id},
					success: function(datas) {

					}	
				})	
			});
		});
	});
    function save(func, id, type) {
        search = getSearch();
        var token = $('#token').val();
        var description_sort = CKEDITOR.instances['description_sort'].getData();
		var description_long = CKEDITOR.instances['description_long'].getData();
        if ($("#title").val() == '') {
            error("Title <?= getLanguage('all', 'empty') ?>");
            $("#title").focus();
            return false;
        }
        if(producttypeid == "") {
            error("Loại phòng <?= getLanguage('all', 'empty') ?>");
            return false;
        }      
		$('.loading').show();
        var data = new FormData();
        var objectfile = document.getElementById('imageEnable').files;
		var length = objectfile.length;
		var objectfile2 = document.getElementById('imageEnableThumb').files;
        for(var i = 0; i< length; i++){
			data.append('userfile'+i, objectfile[i]);
		}
		data.append('userfile2', objectfile2[0]);
        data.append('length', length);
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
                        error('<?= getLanguage('all', 'edit-fail') ?>');
                        return false;
                    }
                    else {
                        error('<?= getLanguage('all', 'add-fail') ?>');
                        return false;
                    }
                }
                else if (obj.status == -1) {
                    error("product <?= getLanguage('all', 'exits') ?>");
                    return false;
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
					window.location = "<?=admin_url();?>product";
				}
            },
            error: function() {
				$('.loading').hide();
            }
        });
    }
    function refresh() {
        $('.loading').hide();
        $('.searchs').val(''); 
		
        csrfHash = $('#token').val();  
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
		
		var thumb  = '<?= base_url() ?>files/product/thumb/' + '<?=$finds->thumb;?>';
		var id = '<?=$finds->id;?>';		
		//$('#id').val(id);
		$('#title').val('<?=$finds->title;?>');//console.log(CKEDITOR.instances);
		$('#meta_title').val('<?=$finds->meta_title;?>');
		$('#meta_keyword').val('<?=$finds->meta_keyword;?>');
		$('#mete_description').val('<?=$finds->mete_description;?>');
		$('#code').val('<?=$finds->code;?>');
		$('#price').val('<?=$finds->price;?>');
		$('#url').val('<?=$finds->url;?>');
		$('#url_register').val('<?=$finds->url_register;?>');
		if(id!=''){
			<?php 
			$arrImg = explode(';',$finds->image);
			?>
			<?php foreach($arrImg as $k=>$val){?>
				<?php if(!empty($val)){?>
				var img = '<?= base_url() ?>files/product/' + '<?=$val;?>';
				$('#show').append('<div class="showMultiImg" id="imglist<?=$k;?>" ><div class="imglist"><img src="' + img + '" style="width:60px; height:40px; float:left; margin-left:5px;" /></div><div id="<?=$k;?>" class="imgremove" img = "<?=$val;?>"><img src="<?=url_tmpl();?>images/remove.png" /></div> </div>');
			<?php }}?>
			$('#show2').html('<img src="' + thumb + '" style="width:60px; height:40px; float:left; margin-left:5px;" />');
		}
		
	}
</script>
<script src="<?= url_tmpl(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>ckeditor/ckeditor.js" type="text/javascript"></script>
