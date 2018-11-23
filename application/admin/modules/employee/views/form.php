<form method="post" enctype="multipart/form-data">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption"  style="margin-top:4px;">
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
							   <a href="<?=admin_url();?>employee">
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
            <div class="row mtop10">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Họ tên (<span class="red">*</span>)</label>
                        <div class="col-md-8">
                            <input type="text" name="title" id="title" value="<?=$finds->title;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Chức vụ</label>
                        <div class="col-md-8">
                            <input type="text" name="position" id="position" value="<?=$finds->position;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Điện thoại</label>
                        <div class="col-md-8">
                            <input type="text" name="phone" id="phone" value="<?=$finds->phone;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
				
            </div>
			<div class="row mtop10">
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Email</label>
                        <div class="col-md-8">
                            <input type="text" name="email" id="email" value="<?=$finds->email;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Zalo</label>
                        <div class="col-md-8">
                            <input type="text" name="zalo" id="zalo" value="<?=$finds->zalo;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Skype</label>
                        <div class="col-md-8">
                            <input type="text" name="skype" id="skype" value="<?=$finds->skype;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
			</div>  
			<div class="row mtop10"> 
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Facebook</label>
                        <div class="col-md-8">
                            <input type="text" name="facebook" id="facebook" value="<?=$finds->facebook;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
				<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Google</label>
                        <div class="col-md-8">
                            <input type="text" name="google" id="google" value="<?=$finds->google;?>" class="searchs form-control" />
                        </div>
                    </div>
                </div>  
            </div>
			<div class="row mtop10"> 
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
                                <span id="show">
									<img src="<?=base_url();?>files/employee/<?=$finds->image;?>" style="width:70px; height:60px" />
								</span> 
                            </div>
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
 <input type="hidden" name="id" id="id" value="<?=$finds->id;?>" />
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
                    };
                })(f);
                reader.readAsDataURL(f);
            }
			
        });        
        
		//CKEDITOR.instances['description'].setData("111");
        $('#refresh').click(function() {
            $(".loading").show();
           
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
	});
    function save(func, id, type) {
        search = getSearch();
        var token = $('#token').val();
        if ($("#title").val() == '') {
            error("Họ tên không được trống");
            $("#title").focus();
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
					window.location = "<?=admin_url();?>employee";
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
	   
	}
</script>
<script src="<?= url_tmpl(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
