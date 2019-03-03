
<div class="menusearch customeselect">
	<div class="container">
		<!--S Row-->
		<div class="row">
			 <div class="col-md-8">
				 <div class="row">
					 <div class="col-md-3">
						<div class="row">
							 <select class="select2me form-control" id="provinceid" name="provinceid" data-placeholder="Chọn tỉnh thành phố" >
								<option value=""></option>
								<option value="1">Hồ Chí Minh</option>
								<option value="1">Hà Nội</option>
							 </select>
						</div>
					 </div>
					 <div class="col-md-3">
					    <div class="row">
							 <select class="select2me form-control" id="provinceid" name="provinceid" data-placeholder="Chọn quận huyện" >
								<option value=""></option>
								<option value="1">Q1</option>
								<option value="1">Q2</option>
							 </select>
						</div>
					 </div>
					 <div class="col-md-4">
						<div class="row">
							<input placeholder="Nhập từ khóa tìm kiếm" class="form-input" />
						</div>
					 </div>
					 <div class="col-md-2">
						<a href="#" id="btnSearch" class="btn btn-sm btn-rounded w100pt"><i class="ion-search"></i> Tìm kiếm</a>
					 </div>
				  </div><!--E Row-->
			 </div>
			 <div class="col-md-4">
				 <div class="row">
					<div class="col-md-5">
						<div class="row">
							<select class="select2me form-control forms" id="acreage" name="acreage" data-placeholder="Chọn diện tích" >
								<option value=""></option>
								<option value="1">A</option>
							</select>
						</div>
					</div>
					<div class="col-md-5">
						<div class="row">
							<select class="select2me form-control forms" id="acreage" name="acreage" data-placeholder="Chọn mức giá" >
								<option value=""></option>
								<option value="1">A</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<a id="btnSearch" href="#" class="btn btn-sm btn-rounded btn-more"><i class="ion-search"></i>...</a>
						</div>
					</div>
				 </div>
			 </div>
		</div><!--E Row-->
	</div>
</div>
<!--E menu search-->
<div id="scrollTop" class="container mtop10">
	<div class="row">
	  <div class="col-md-6 text-left pleft">
		<div class="row">
		  <div class="col-md-8">        
			 <ol class="breadcrumb">
			  <li><a href="#">Trang chủ</a></li>
			  <li class="active">Nhà đất bán</li>
			</ol>
			<!--<h1 class="page-title"></h1>-->
		  </div>
		  <div class="col-md-4 customeselect">
				<select class="form-control forms" id="ordering" name="ordering" data-placeholder="Sắp xế theo" >
					<option value=""></option>
					<option value="1">Giá tăng dần</option>
					<option value="2">Giá giảm dần</option>
					<option value="3">Diện tích tăng dần</option>
					<option value="4">Diện tích giảm dần</option>
				</select>
			</div>
		</div>
		<div class="line"></div>
		<div class="row" id="gridview"></div>
		<div class="row">
			<div class="col-md-12 text-center" id="pagination"></div>
		</div>
		<div class="row"></div>
	  </div>
	  <div class="col-md-6" id="viewmap">
		  <div style="width:100%; height:82vh;" id="map"></div>
			<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNI_ZWPqvdS6r6gPVO50I4TlYkfkZdXh8&callback=initMap"></script>
			
			<script>
			  var map;
			  var Locations = [
                {
                  lat:-33.890542, 
                  lon:151.274856, 
                  address:'Paris',
                  gval:'25.5',
                  aType:'Non-Commodity',
                  title:'Paris',
                  descr:'Paris'           
                },        
				{
				  lat: -33.923036, 
				  lon: 151.259052,
				  address:'Moscow',
				  gval:'11.5',
				  aType:'Non-Commodity',
				  title:'Moscow',
				  descr:'Moscow Airport'              
				},     
				{
				  lat:-34.028249, 
				  lon:151.157507, 
				  address:'Port Moresby',
				  gval:'1',
				  aType:'Oil',
				  title:'Papua New Guinea',
				  descr:'Papua New Guinea 123123123'              
				},
				{
				   lat:-33.80010128657071,
				   lon:151.28747820854187,
				   address:'Indore',
					gval:'1',
					aType:'Oil',
					title:'Indore, India',
					descr:'Airport India'
				}
			  ];
			  function initMap() {
				  
				map = new google.maps.Map(document.getElementById('map'), {
				   center: new google.maps.LatLng(-33.950198,151.259302),
				   zoom: 10,
				   mapTypeId: google.maps.MapTypeId.ROADMAP
				});
				//Location
				
				var infowindow =  new google.maps.InfoWindow({
					content: ''
				});

				for (i = 0; i < Locations.length; i++) {
						size = 40;        
						var img = new google.maps.MarkerImage('<?=url_tmpl();?>icon/location.png',           
							new google.maps.Size(size, size),
							new google.maps.Point(0,0),
							new google.maps.Point(size/2, size/2)
					   );

					var marker = new google.maps.Marker({
						map: map,
						title: Locations[i].title,
						position: new google.maps.LatLng(Locations[i].lat, Locations[i].lon),           
						icon: img
					});
					bindInfoWindow(marker, map, infowindow, "<p>" + Locations[i].descr + "</p>",Locations[i].title);  

				}

			 }
			 function bindInfoWindow(marker, map, infowindow, html, Ltitle) { 
				google.maps.event.addListener(marker, 'mouseover', function() {
						infowindow.setContent(html); 
						infowindow.open(map, marker); 
				});
				google.maps.event.addListener(marker, 'mouseout', function() {
					infowindow.close();
				}); 
			} 
			</script>
	  </div><!--E-->
	</div>
	</div>
<div class="loadingpage" style="display: none;">
    <div class="blockUI blockOverlay" style="width: 100%;height: 100%;top:0px;left:0px;position: absolute;background-color: rgb(0,0,0);opacity: 0.1;z-index: 1000;">
    </div>
    <div class="blockUI blockMsg blockElement" style="width: 30%;position: absolute;top: 15%;left:35%;text-align: center;">
        <img src="<?=url_tmpl();?>images/loading2.gif" style="z-index: 2;position: absolute;"/>
    </div>
</div>
<link href="<?=url_tmpl();?>template.css" rel="stylesheet" type="text/css"/>
<script>	
	var controller = '<?= $controller; ?>/';
    var csrfHash = '';
    var cpage = 0;
    var search;
	var order = '';
	var index = 'asc';
	var action = 'getList';
	
	$(function(){
		init();
		getListMore(cpage,csrfHash,action,'');
		$('#btnSearch').click(function(){
			getListMore(cpage,csrfHash,action,'');
		});
	});
	function getListMore(page,csrfHash,action,type){
		search = getSearchs();
		//$('.loadingpage').show();
		$.ajax({
			  url:controller+action,
			  async: true,
			  type: 'POST',
			  data:{
				  page:page,search:search,order:order,index:index
			  },
			  success:function(datas) {
				 var obj = JSON.parse(datas); 
				 $('#gridview').html(obj.content); 
				 $('#pagination').html(obj.paging);
				 paging(obj.csrfHash);
				 $('.loadingpage').hide();
			  }
		});
	} 
	function getSearchs(){
		
	}
	function paging(csrfHash){
		$("#pagination a").each(function(){
			$(this).click(function(){
				$('.loadingpage').show();
				//scrollTo
				cpage = $(this).attr('name');
				getListMore(cpage,csrfHash,action);
				window.scrollTo(0, 0); 
				return false;
			});
		});
	}
	function init(){
		$('#ordering').select2({
			placeholder: "Sắp xếp theo",
			allowClear: true,
			selectOnClose: true
		});
	}
	jQuery(function($) {
	  function fixDiv() {
		var $cache = $('#viewmap');
		if ($(window).scrollTop() > 100){
		  $cache.css({
			'position': 'fixed',
			'top': '90px',
			'right': '0px'
			
		  });
		} 
		else{
		  $cache.css({
			'position': 'relative',
			'top': 'auto',
			'right': '0px'
		  });
		}
		//$("#viewmap").animate({ scrollTop: $("#viewmap")[0].scrollHeight}, 300);
	  }
	  $(window).scroll(fixDiv);
	  fixDiv();
	});
</script>
