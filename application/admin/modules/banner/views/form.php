<!-- BEGIN PORTLET-->
<form method="post" enctype="multipart/form-data">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-reorder"></i>
                <?= empty($idaction)?getLanguage('all', 'Add'):getLanguage('all', 'Edit')?>
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
                        <label class="control-label col-md-4">Tiêu đề (<span class="red">*</span>)</label>
                        <div class="col-md-8">
                            <input type="text" name="slide_name" id="slide_name" class="searchs form-control" value="<?=$slide_name?>"/>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label col-md-5">Hình banner</label>
                        <div class="col-md-7">
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
				
				<div class="col-md-5">
					<div class="form-group">
						<label class="control-label col-md-4">Hình ảnh</label>
						<div class="col-md-8">
							<div class="col-md-3" style="padding:0px !important;" >
								<ul style="margin:0px;" class="button-group">
									<li class="" onclick ="javascript:document.getElementById('car_images').click();"><button type="button" class="btnone">Chọn hình</button></li>
								</ul>
								<input class="tab-event" style='display:none;' accept="image/*" id ="car_images" type="file" name="userfile" multiple>
							</div>
							<div class="col-md-9" >
								 <div class="row">
									 <span id="show_car_images">
										<img height="50" src="" >
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
                                <label class="control-label col-md-1">Nội dung</label>
                                <div class="col-md-11" style="padding-left:44px !important;">
                                    <textarea class="ckeditor form-control" id="description" name="description"><?=$description?></textarea>
                                </div>
                        </div>
                </div>
            </div>
            
            <div class="row mtop10">
                <div class="col-md-3" style="color:red">
                  
                </div>
                <div class="col-md-9">
                    <div class="mright10" >
                        <input type="hidden" name="id" id="id" value="<?=$idaction?>"/>
                        <input type="hidden" id="token" name="<?= $csrfName; ?>" value="<?= $csrfHash; ?>" />
                        <ul class="button-group pull-right">
							<li id="">
								<a href="<?=admin_url();?><?=$routes;?>">
                                <button type="button" class="button">
                                   <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                   Quy lại
                                </button>
								</a>
                            </li> 		
                            <?php 
							if(empty($idaction)){
								if (isset($permission['add'])) { ?>
                                <li id="save">
                                    <button type="button" class="button">
                                        <i class="fa fa-plus"></i>
                                        Thêm mới
                                    </button>
                                </li>
							<?php } }
							else{
								if (isset($permission['edit'])) { ?>
                                <li id="edit">
                                    <button type="button" class="button">
                                        <i class="fa fa-save"></i>
                                        Lưu
                                    </button>
                                </li>
                            <?php } 
							}?>	
                            
                        </ul>
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
		car_images_picture();
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
        $('#refresh').click(function() {
            $(".loading").show();
            CKEDITOR.instances['description'].setData("");
            refresh();
        });
       
        $('#save').click(function() {
            save('save', '');
        });
        $('#edit').click(function() {
            var id = $('#id').val();
            if (id == '') {
                error('Please select a item.');
                return false;
            }
            save('edit', id);
        });   
		
		addform();		
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
    function save(func, id) {
        search = getSearch();
        var token = $('#token').val();
        var description = CKEDITOR.instances['description'].getData();
        if ($("#slide_name").val() == '') {
            error("Slide name <?= getLanguage('all', 'empty') ?>");
            $("#slide_name").focus();
            return false;
        }
        $('.loading').show();
        var data = new FormData();
		
		//car_images
		var objectfile = document.getElementById('car_images').files;
		var length1 = objectfile.length; 
		for (var i = 0; i < length1; i++) {
			data.append('car_images' + i, objectfile[i]);
		}
		data.append('length1', length1);
		
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
                else {
                    CKEDITOR.instances['description'].setData("");
                    location.href = '<?=base_url()."admin.php/banner"?>';
                }
            },
            error: function() {

            }
        });
    }    
    function refresh() {
        $('.loading').show();
        $('.searchs').val('');
        $('#show').html('');
       // document.getElementById("checkAll").checked=false;
        csrfHash = $('#token').val();
        //search = getSearch();//alert(cpage);        
    }        
    function getSearch() {
        var str = '';
        $('input.searchs').each(function() {
            str += ',"' + $(this).attr('id') + '":"' + $(this).val().trim() + '"';
        })
        $('select.combos').each(function() {
            str += ',"' + $(this).attr('id') + '":"' + getCombo($(this).attr('id')) + '"';
        })
        if ( CKEDITOR.instances && CKEDITOR.instances['description'] ) {
            var html = CKEDITOR.instances['description'].getData();
            html = html.replace(/<p>/g,'');
            html = html.replace(/<\/p>/g,'');
            str += ',"description":"'+addslashes(html.trim())+'"';
        }
        return '{' + str.substr(1) + '}';
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
	    var img = '<?= base_url() ?>files/banner/' + '<?=$thumb_img; ?>';
		var id = $("#id").val();//alert(id);
		$('#id').val(id);
		if(id!=''){
			$('#show').html('<img src="' + img + '" style="width:100px; height:50px" />');
			$("#show_car_images").html('<?=$img; ?>');
		}
	    
	}
</script>
<script src="<?= url_tmpl(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>ckeditor/ckeditor.js" type="text/javascript"></script>