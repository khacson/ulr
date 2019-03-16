<section class="search">
			<div class="container">
				<div class="row">
					<div class="col-md-3 sidebar-profile">
						<?=$this->load->inc('profile');?>
					</div>
					<div class="col-md-9 content-profile">
						<div class="nav-tabs-group">
							<ul class="nav-tabs-list">
								<li class="active"><a href="<?=base_url();?>profile/dangban">Đăng bán</a></li>
								<li><a href="<?=base_url();?>profile/historypost">Tin đã đăng (20)</a></li>
								<li><a href="<?=base_url();?>profile/approved">Tin được duyệt (15)</a></li>
								<li><a href="<?=base_url();?>profile/waiting">Tin chưa duyệt (1)</a></li>
								<li><a href="<?=base_url();?>profile/expired">Tin hết hạn (4)</a></li>
							</ul>
						</div>
						
						<div class="row mtop10">
							<div class="col-md-12">
							<!--S Thông tin cá nhân-->
							<form action="" method="">                        
                               
                                <ul class="nav nav-pills">
                                    <li class="active nav-left" ><a href="#step1" >Thông tin cơ bản</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active mtop10">
                                        <div class="row p-b-15  ">
                                            <div class="col-sm-8 col-md-8">
                                                <div class="row">
                                                    <label class="col-md-4 mtop10">Tiêu đề <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<input name="title" type="text" class="form-control" placeholder="Tiêu đề tối đa 150 ký tự" maxlength="150" value="">
													</div>
												</div>	
												<div class="row">
                                                    <label class="col-md-4 mtop10">Loại <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<select class="select2me form-control" id="provinceid" name="provinceid" data-placeholder="Chọn loại" >
															<option value=""></option>
															<option value="1">Bán nhà riêng</option>
															<option value="1">Căn hộ chung cư</option>
														</select>
													</div>
												</div> 
												
												<div class="row">
                                                    <label class="col-md-4 mtop10">Tỉnh/Thành phố <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<select class="select2me form-control" id="provinceid" name="provinceid" data-placeholder="Chọn tỉnh/thành phố" >
															<option value=""></option>
															<option value="1">A</option>
														</select>
													</div>
												</div> 
												<div class="row">
                                                    <label class="col-md-4 mtop10">Quận huyện <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<select class="select2me form-control" id="districid" name="districid" data-placeholder="Chọn quận huyện" >
															<option value=""></option>
															<option value="1">A</option>
														</select>
													</div>
												</div>  
												<div class="row">
                                                    <label class="col-md-4 mtop10">Phường xã</label>
													<div class="col-md-8 mtop10">
														<select class="select2me form-control" id="districid" name="districid" data-placeholder="Chọn quận huyện" >
															<option value=""></option>
															<option value="1">A</option>
														</select>
													</div>
												</div> 
												
												<div class="row">
                                                    <label class="col-md-4 mtop10">Địa chỉ <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<input name="address" type="text" class="form-control" placeholder="Địa chỉ tối đa 150 ký tự" maxlength="150" value = "">
													</div>
												</div> 
												<div class="row">
                                                    <label class="col-md-4 mtop10">Diện tích (m<sup>2</sup>)</span></label>
													<div class="col-md-8 mtop10">
														<input name="address" type="text" class="form-control" placeholder="" maxlength="12" value = "">
													</div>
												</div>	
												<div class="row">
                                                    <label class="col-md-4 mtop10">Giá bán</span></label>
													<div class="col-md-8 mtop10 flex">
														<input name="price" id="price" type="text" class="form-control w50pc" placeholder="" maxlength="12" value = "">
														<select class="select2me form-control w50pc" id="pricetype" name="pricetype" data-placeholder="" >
															<option value="1">Triệu</option>
															<option value="1000">Tỷ</option>
														</select>
													</div>
												</div>
												<div class="row">
                                                    <label class="col-md-4 mtop10">Mặt tiền (m)</label>
													<div class="col-md-8 mtop10">
														<input name="viewface" id="viewface" type="text" class="form-control" placeholder="" maxlength="12" value = "">
													</div>
												</div>
												<div class="row">
                                                    <label class="col-md-4 mtop10">Đường vào (m)</label>
													<div class="col-md-8 mtop10">
														<input name="street" id="street" type="text" class="form-control" placeholder="" maxlength="12" value = "">
													</div>
												</div>
												<div class="row">
                                                    <label class="col-md-4 mtop10">Hướng</label>
													<div class="col-md-8 mtop10">
														<select class="select2me form-control" id="direction" name="direction" data-placeholder="Chọn hướng" >
															<option value="1">Không xác định</option>
															<option value="2">Đông</option>
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
                                    <li class="active nav-left" ><a href="#step1" >Mô tả bất động sản</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active mtop10">
                                        <div class="row p-b-15  ">
                                            <div class="col-sm-8 col-md-8">
     
												<div class="row">
                                                    <label class="col-md-4 mtop10">Thông tin mô tả</label>
													<div class="col-md-8 mtop10">	
														<textarea name="description" id="description" placeholder="Thông tin mô tả tối đa 3000 ký tự" rows ="7" class="form-control"></textarea>
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
                                    <li class="active nav-left" ><a href="#step1" >Hình ảnh</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active mtop10">
                                        <div class="row p-b-15  ">
                                            <div class="col-sm-8 col-md-8">
     
												<div class="row">
                                                    <label class="col-md-4 mtop10"></label>
													<div class="col-md-8 mtop10">	
														<input type="button" class="btn btn-next btn-primary btn-avatar" name="file" value="chọn hình ảnh">
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
                                    <li class="active nav-left" ><a href="#step1" >Thông tin liên hệ</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active mtop10">
                                        <div class="row p-b-15  ">
                                            <div class="col-sm-8 col-md-8">
                                                <div class="row">
                                                    <label class="col-md-4 mtop10">Họ và tên <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<input name="info_fullname" id="info_fullname" type="text" class="form-control" value="Nguyễn Tất Huy">
													</div>
												</div>
												<div class="row">
                                                    <label class="col-md-4 mtop10">Điện thoại</label>
													<div class="col-md-8 mtop10">
														<input name="info_phone" id="info_phone" type="text" class="form-control" value="">
													</div>
												</div><div class="row">
                                                    <label class="col-md-4 mtop10">Địa chỉ</label>
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
                                    <li class="active nav-left" ><a href="#step1" >Vị trí bản đồ</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active mtop10">
                                        <div class="row p-b-15  ">
                                            <div class="col-sm-8 col-md-8">
                                                <div class="row">
                                                    <label class="col-md-12">
														Để tăng độ tin cậy và tin rao được nhiều người quan tâm hơn, hãy sửa vị trí tin rao của bạn trên bản đồ bằng cách <a href="">Chọn lại vị trí bản đồ</a>
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
                                    <li class="active nav-left" ><a href="#step1" >LỊCH ĐĂNG TIN</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active mtop10">
                                        <div class="row p-b-15  ">
                                            <div class="col-sm-8 col-md-8">
                                                <div class="row">
                                                    <label class="col-md-4 mtop10">Loại tin</span></label>
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
													Tin Vip 1: Là loại tin được đăng tiêu đề bằng chữ IN HOA MÀU ĐỎ, khung màu đỏ, nằm bên dưới tin VIP ĐẶC BIỆT và ở trên các tin vip 2
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