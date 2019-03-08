<form method="post" enctype="multipart/form-data">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption" style="margin-top:4px; ">    
                <i class="fa fa-reorder"></i>
				<?php
				if(empty($finds->id)){
					echo "Thêm mới";
				}
				else{
					echo "Sửa";
				}
				?>
            </div>
            <div class="tools">
                <ul class="button-group pull-right" style="margin-top:-3px; margin-bottom:5px;">    
							<li id="">
							   <a href="<?=admin_url();?>nhadatban">
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
                        <label class="control-label col-md-1" style="white-space:nowrap;">Tiêu đề (<span class="red">*</span>)</label>
                        <div class="col-md-11">
                            <input style="margin-left:28px; width:97.5%" type="text" name="title" id="title" value="<?=$finds->title;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>
			<div class="row mtop10"> 
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Giá bán</label>
                        <div class="col-md-8">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="price" id="price" value="<?=$finds->price;?>" class="searchs form-control" />
								</div>
								<div class="col-md-6">
									<select name="price_type" id="price_type" style="height:30px;"  class="searchs form-control">
										<option <?php if($finds->price_type == 1){?> selected <?php }?> value="1">Triệu</option>
										<option <?php if($finds->price_type == 1000){?> selected <?php }?> value="1000">Tỷ</option>
									</select>
								</div>
							</div>
                              
                        </div>
                    </div>
                </div>  
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Diện tích</label>
                        <div class="col-md-8" style="display: flex;">
							<input type="text" name="acreage" id="acreage" value="<?=$finds->acreage;?>" class="searchs form-control" />M2
                        </div>
                    </div>
                </div>  
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-4">Danh mục (<span class="red">*</span>) </label>
						<div class="col-md-8" >
							<select name="catalog_id" id="catalog_id" class="combos" >
								<option value=""></option>
								<?php foreach ($catalogs as $item) { ?>
									<option value="<?=$item->id;?>"><?=$item->catalog_name?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				
			</div>
			<div class="row mtop10"> 
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Địa chỉ</label>
                        <div class="col-md-8">
                              <input  type="text" name="address" id="address" value="<?=$finds->address;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Tọa độ bản đồ</label>
                        <div class="col-md-8">
                              <input type="text" name="maps_point" id="maps_point" value="<?=$finds->maps_point; ?>" class="searchs form-control" />
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
                                <span id="show2">
									<img src="<?=base_url();?>files/nhadatban/thumb/<?=$finds->thumb; ?>" style="width:60px; height:40px; " />
								</span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
					<div class="form-group">
						<label class="control-label col-md-2">Hình ảnh</label>
						<div class="col-md-10">
							<div class="col-md-3" style="padding:0px !important;" >
								<ul style="margin:0px;" class="button-group">
									<li class="" onclick ="javascript:document.getElementById('car_images').click();"><button type="button" class="btnone">Chọn hình</button></li>
								</ul>
								<input class="tab-event" style='display:none;' accept="image/*" id ="car_images" type="file" name="userfile" multiple>
							</div>
							<div class="col-md-9" >
								 <div class="row">
									 <span id="show_car_images">
										<?php 
											$arrImage = explode(';',$finds->image);
											foreach ($arrImage as $k=>$v) {
												if (empty($v)) {
													continue;
												}
										?>
											<div class="oneimg newimg" name="<?=$v; ?>"><img height="40" width="50" src="<?=base_url();?>files/nhadatban/<?=$v; ?>" class="imgupload" /><div class="rmoneimg"><i class="fa fa-times" aria-hidden="true"></i></div></div>
										<?php }?>
									 </span> 
								 </div>
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
                        <label class="control-label col-md-1">Tiêu đề</label>
                        <div class="col-md-11">
                            <input style="margin-left:28px; width:97.5%" type="text" name="meta_title" id="meta_title" value="<?=$finds->meta_title;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>
			<div class="row mtop10">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-1">Từ khóa</label>
                        <div class="col-md-11">
                            <input style="margin-left:28px; width:97.5%" type="text" name="meta_keyword" id="meta_keyword" value="<?=$finds->meta_keyword;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>
			<div class="row mtop10">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-1">Mô tả</label>
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
	.oneimg{
		float: left;
		display: inline-flex;
		text-align: left;
		width: 70px;
	}
	.rmoneimg{
		width: 18px;
		position: relative;
		margin-top: -10px;
		border: 1px solid #333;
		height: 18px;
		padding: 3px;
		border-radius: 50% !important;
		margin-left:-5px;
	}
	.rmoneimg i{
		margin-top: -2px !important;
		float: left;
	}
	.rmoneimg2{
		width: 18px;
		position: relative;
		margin-top: -10px;
		border: 1px solid #333;
		height: 18px;
		padding: 3px;
		border-radius: 50% !important;
		margin-left:-5px;
	}
	.rmoneimg2 i{
		margin-top: -2px !important;
		float: left;
	}
</style>
<script>
    var controller = '<?= $controller; ?>/';
    var csrfHash = '<?= $csrfHash; ?>';
    var cpage = 0;
    var search;
    var schoolid = 0;
	var storedOldNameFiles = [];
	var listimg = {};
    $(function() {
		$('#maps_address').click(function(){ 
			var address = $('#address').val(); 
			$('#maps_address').val(address);
		});
		$('#maps_address').focus(function(){ 
			var address = $('#address').val(); 
			$('#maps_address').val(address);
		});
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
		$('#catalog_id').multipleSelect({
        	filter: true,
            placeholder:"Chọn danh mục",
            single:true
        });
		var catalog_id = '<?=$finds->catalog_id;?>';
		$('#catalog_id').multipleSelect('setSelects',[catalog_id]);
		addform();
		//CKEDITOR.instances['description'].setData("111");
        $('#refresh').click(function() {
            $(".loading").show();
			CKEDITOR.instances['description_sort'].setData('');
			CKEDITOR.instances['description_long'].setData(''); 
			CKEDITOR.instances['maps_address'].setData(''); 
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
		car_images_picture();
	});
	function car_images_picture() { 
        $('#car_images').change(function (evt) {
            var files = evt.target.files;
            for (var i = 0, f; f = files[i]; i++) {
                if (!f.type.match('image.*')){
                    continue;
				}
                var reader = new FileReader();
                reader.onload = (function (theFile) {
                    return function (e) {
                        listimg[theFile.name] = e.target.result;
                        $("#noimg").css("display", "none");
                        $("#show_car_images").append('<div class="oneimg newimg" name="' + theFile.name + '"><img height="40" width="50" src="' + e.target.result + '" class="imgupload" /><div class="rmoneimg"><i class="fa fa-times" aria-hidden="true"></i></div></div>');
                    };
                })(f);
                reader.readAsDataURL(f);
            }
        });
        $(document.body).on("click", ".rmoneimg", function () {
            // lay index cua phan tu moi remove
            var index = $(".newimg").index($(this).parent());
            // ghi lai ten nhung file bi xoa de xoa file trong thu muc
            if ($(this).parent().hasClass("oldimg")) {
                storedOldNameFiles.push($(this).parent().attr("name"));
            }
            // remove phan tu vua click
            $(this).parent().remove();
            // xoa file bi remove ra khoi mang        
            storedFiles.splice(index, 1);
            // kiem tra neu khong co img nao thi hien no image
            if ($(".oneimg").length === 0) {
                $("#noimg").css("display", "");
            }
        });
    }
    function save(func, id, type) {
        search = getSearch();
		var catalog_id = getCombo('catalog_id');
        var token = $('#token').val();
        var description_sort = CKEDITOR.instances['description_sort'].getData();
		var description_long = CKEDITOR.instances['description_long'].getData();
        if ($("#title").val() == '') {
            error("Tiêu đề không được trống");
            $("#title").focus();
            return false;
        }
		if (catalog_id == '') {
            error("Chọn danh mục");
            return false;
        }
		
		
		$('.loading').show();
        var data = new FormData();
		var price_type = $('#price_type').val();
		var objectfile2 = document.getElementById('imageEnableThumb').files;
		//car_images
		var objectfile = document.getElementById('car_images').files;
		var length1 = objectfile.length; 
		for (var i = 0; i < length1; i++) {
			data.append('car_images' + i, objectfile[i]);
		}
		data.append('length1', length1);
		
		data.append('userfile2', objectfile2[0]);
        data.append('length', length);
		data.append('csrf_stock_name', token);
        data.append('search', search);
        data.append('description_sort', description_sort); 
        data.append('description_long', description_long);
		data.append('price_type', price_type); 
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
					window.location = "<?=admin_url();?>nhadatban";
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
		
	}
</script>
<script src="<?= url_tmpl(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>ckeditor/ckeditor.js" type="text/javascript"></script>
