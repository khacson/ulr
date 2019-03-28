<section class="search">
	<div class="container">
		<div class="row">
			<div class="col-md-3 sidebar-profile">
				<?=$this->load->inc('profile');?>
			</div>
			<div class="col-md-9 content-profile">
				<div class="nav-tabs-group">
					<ul class="nav-tabs-list">
						<li class="active"><a href="<?=base_url();?>profile/dangban"><?=$sale_posts;?></a></li>
						<li><a href="<?=base_url();?>profile/historypost"><?=$posted_news;?></a></li>
						<li><a href="<?=base_url();?>profile/approved"><?=$approved_posts;?></a></li>
						<li><a href="<?=base_url();?>profile/waiting"><?=$not_approve_posts;?></a></li>
						<li><a href="<?=base_url();?>profile/expired"><?=$expired_posts;?></a></li>
					</ul>
				</div>
				
				<div class="row mtop10">
					<div class="col-md-12">
					<!--S Thông tin cá nhân-->
					<form action="" method="">                        
						<?php print_r($lang);?>
						<ul class="nav nav-pills">
							<li class="active nav-left" ><a href="#step1" ><?=$based_info;?></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active mtop10">
								<div class="row p-b-15  ">
									<div class="col-sm-8 col-md-8">
										<div class="row">
											<label class="col-md-4 mtop10"><?=$title;?> <span class="red">(*)</span></label>
											<div class="col-md-8 mtop10">
												<input name="title" type="text" class="form-control" placeholder="<?=$title_placeholder;?>" maxlength="150" value="">
											</div>
										</div>	
										<div class="row">
											<label class="col-md-4 mtop10"><?=$type;?> <span class="red">(*)</span></label>
											<div class="col-md-8 mtop10">
												<select class="select2me form-control" id="provinceid" name="provinceid" data-placeholder="" >
													<option value=""><?=$type_placeholder;?></option>
													<?php if (!empty($sell_type_list)) {
														foreach ($sell_type_list as $type) {
															echo '<option value="'. $type->id .'">'. $type->catalog_name .'</option>';
														}
													} ?>
												</select>
											</div>
										</div> 
										
										<div class="row">
											<label class="col-md-4 mtop10"><?=$province;?> <span class="red">(*)</span></label>
											<div class="col-md-8 mtop10">
												<select class="select2me form-control" id="provinceid" name="provinceid" data-placeholder="" >
													<option value=""><?=$province_placeholder;?></option>
													<?php if (!empty($list_provice)) {
														foreach ($list_provice as $items) {
															echo '<option value="'. $items->id .'">'. $items->province_name .'</option>';
														}
													} ?>
												</select>
											</div>
										</div> 
										<div class="row">
											<label class="col-md-4 mtop10"><?=$district;?> <span class="red">(*)</span></label>
											<div class="col-md-8 mtop10">
												<select class="select2me form-control" id="districid" name="districid" data-placeholder="<?=$district_placeholder;?>" >
													<option value=""></option>
													<option value="1">A</option>
												</select>
											</div>
										</div>  
										<div class="row">
											<label class="col-md-4 mtop10"><?=$wards;?></label>
											<div class="col-md-8 mtop10">
												<select class="select2me form-control" id="districid" name="districid" data-placeholder="<?=$wards_placeholder;?>" >
													<option value=""></option>
													<option value="1">A</option>
												</select>
											</div>
										</div> 
										
										<div class="row">
											<label class="col-md-4 mtop10"><?=$address;?> <span class="red">(*)</span></label>
											<div class="col-md-8 mtop10">
												<input name="address" type="text" class="form-control" placeholder="<?=$address_placeholder;?>" maxlength="150" value = "">
											</div>
										</div> 
										<div class="row">
											<label class="col-md-4 mtop10"><?=$area;?> (m<sup>2</sup>)</span></label>
											<div class="col-md-8 mtop10">
												<input name="area" type="text" class="form-control" placeholder="" maxlength="12" value = "">
											</div>
										</div>	
										<div class="row">
											<label class="col-md-4 mtop10"><?=$sale_price;?></span></label>
											<div class="col-md-8 mtop10 flex">
												<input name="price" id="price" type="text" class="form-control w50pc" placeholder="" maxlength="12" value = "">
												<select class="select2me form-control w50pc" id="pricetype" name="pricetype" data-placeholder="" >
													<option value="1"><?=$million_price?></option>
													<option value="1000"><?=$billion_price?></option>
												</select>
											</div>
										</div>
										<div class="row">
											<label class="col-md-4 mtop10"><?=$facade;?> (m)</label>
											<div class="col-md-8 mtop10">
												<input name="viewface" id="viewface" type="text" class="form-control" placeholder="" maxlength="12" value = "">
											</div>
										</div>
										<div class="row">
											<label class="col-md-4 mtop10"><?=$entrance;?> (m)</label>
											<div class="col-md-8 mtop10">
												<input name="street" id="street" type="text" class="form-control" placeholder="" maxlength="12" value = "">
											</div>
										</div>
										<div class="row">
											<label class="col-md-4 mtop10"><?=$direction;?></label>
											<div class="col-md-8 mtop10">
												<select class="select2me form-control" id="direction" name="direction" data-placeholder="<?=$direction_placeholder;?>" >
													<option value=""><?=$direction_placeholder;?></option>
													<?php if (!empty($list_direction)) {
														foreach ($list_direction as $items) {
															echo '<option value="'. $items->id .'">'. $items->direction_name .'</option>';
														}
													} ?>
												</select>
											</div>
										</div> 												
									</div>
								</div>
							</div>
							<!--  End step 1 -->
						</div>	
					</form>
					<!--E Thông tin cá nhân-->
					<!--S Mô tả bất động sản-->
					<form action="" method="">                        
						<ul class="nav nav-pills mtop10">
							<li class="active nav-left" ><a href="#step1" ><?=$product_description;?></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active mtop10">
								<div class="row p-b-15  ">
									<div class="col-sm-8 col-md-8">

										<div class="row">
											<label class="col-md-4 mtop10"><?=$desc_info;?></label>
											<div class="col-md-8 mtop10">	
												<textarea name="description" id="description" placeholder="<?=$desc_info_placeholder;?>" rows ="7" class="form-control"></textarea>
											</div>
										</div>
										
										
									</div>
								</div>
							</div>
							<!--  End step 1 -->

						</div>
					</form>
					<!--E Mô tả bất động sản-->
					<!--S Mô tả bất động sản-->
					<form action="" method="">                        
						<ul class="nav nav-pills mtop10">
							<li class="active nav-left" ><a href="#step1" ><?=$pictures;?></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active mtop10">
								<div class="row p-b-15  ">
									<div class="col-sm-8 col-md-8">

										<div class="row">
											<label class="col-md-4 mtop10"></label>
											<div class="col-md-8 mtop10">	
												<input type="button" class="btn btn-next btn-primary btn-avatar" name="file" value="<?=$pictures_placeholder;?>">
											</div>
										</div>

									</div>
								</div>
							</div>
							<!--  End step 1 -->
						</div>
					</form>
					<!--E Mô tả bất động sản-->
					<!--S Thông tin cá nhân-->
					<form action="" method="" class="mtop10">                        
						<ul class="nav nav-pills">
							<li class="active nav-left" ><a href="#step1" ><?=$contact_info;?></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active mtop10">
								<div class="row p-b-15  ">
									<div class="col-sm-8 col-md-8">
										<div class="row">
											<label class="col-md-4 mtop10"><?=$contact_fullname;?> <span class="red">(*)</span></label>
											<div class="col-md-8 mtop10">
												<input name="info_fullname" id="info_fullname" type="text" class="form-control" value="Nguyễn Tất Huy">
											</div>
										</div>
										<div class="row">
											<label class="col-md-4 mtop10"><?=$contact_phone;?></label>
											<div class="col-md-8 mtop10">
												<input name="info_phone" id="info_phone" type="text" class="form-control" value="">
											</div>
										</div><div class="row">
											<label class="col-md-4 mtop10"><?=$contact_address;?></label>
											<div class="col-md-8 mtop10">
												<input name="info_address" id="info_address" type="text" class="form-control" value="">
											</div>
										</div>												
									</div>
								</div>
							</div>
						</div>
					</form><!--E Thông tin liên hệ--->
					<!--S Bản đồ-->
					<form action="" method="" class="mtop10">                        
						<ul class="nav nav-pills">
							<li class="active nav-left" ><a href="#step1" ><?=$map_location;?></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active mtop10">
								<div class="row p-b-15  ">
									<div class="col-sm-8 col-md-8">
										<div class="row">
											<label class="col-md-12">
												<?=$map_label1;?> <a href=""><?=$map_label2;?></a>
											</label>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div style="width:100%; height:300px;" id="map"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form><!--E Thông tin liên hệ--->
					<!--S Thông tin cá nhân-->
					<form action="" method="" class="mtop10">                        
						<ul class="nav nav-pills">
							<li class="active nav-left" ><a href="#step1" ><?=$schedule_post_news;?></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active mtop10">
								<div class="row p-b-15  ">
									<div class="col-sm-8 col-md-8">
										<div class="row">
											<label class="col-md-4 mtop10"><?=$news_type;?></span></label>
											<div class="col-md-8 mtop10">
												<select class="select2me form-control" id="news_type" name="news_type" >
													<option value="0">Tin thường (1.000đ/Tin)</option>
													<option value="1">Tin Vip 1 (2.000đ/Tin)</option>
													<option value="2">Tin Vip 2 (3.000đ/Tin)</option>
													<option value="3">Tin Vip 3 (4.000đ/Tin)</option>
												</select>
											</div>
										</div>  
										<div class="row">
											<div class="col-md-12">
												<?=$post_new_description;?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form><!--E Thông tin liên hệ--->
				</div>
			</div>
		</div>
	</div>
</section>


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