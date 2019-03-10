<section class="search">
			<div class="container">
				<div class="row">
					<div class="col-md-3 sidebar-profile">
						<?=$this->load->inc('profile');?>
					</div>
					<div class="col-md-9 content-profile">
						<div class="nav-tabs-group">
							<ul class="nav-tabs-list">
								<li class="active"><a href="<?=base_url();?>profile/2">Thông tin hồ sơ</a></li>
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
                                    <li class="active nav-left" ><a href="#step1" >Thông tin cá nhân</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active mtop10">
                                        <div class="row p-b-15  ">
                                            <div class="col-sm-8 col-md-8">
                                                <div class="form-group">
                                                    <label class="col-md-4 mtop10">Họ và tên <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<input name="fullname" type="text" class="form-control" value="Nguyễn Tất Huy">
													</div>
												</div>	
                                                <div class="form-group">
                                                    <label class="col-md-4 mtop10">Tên thường gọi</label>
													<div class="col-md-8 mtop10">
														<input name="asfullname" type="text" class="form-control" value = "Huy Nguyễn">
													</div>
                                                </div> 
                                                <div class="form-group">
                                                    <label class="col-md-4 mtop10">Ngày sinh</label>
                                                    <div class="col-md-8 mtop10">
														<div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
															<input type="text" name="birthday" value="" id="birthday" class="form-input form-control" />				
															<div class="input-group-addon">
																<i class="fa fa-calendar "></i>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
                                                    <label class="col-md-4 mtop10">Giới tính&nbsp;&nbsp;&nbsp;&nbsp;</label>
													<div class="col-md-8 mtop10">
														<input id="sex_1" type="radio" name="sex" value="1" checked="checked"><label for="sex_1">&nbsp; Nam</label>
														&nbsp;
														<input id="sex_2" type="radio" name="sex" value="2"><label for="sex_2">&nbsp; Nữ</label>
														&nbsp;
														<input id="sex_3" type="radio" name="sex" value="3"><label for="sex_3">&nbsp; Giới tính khác</label>
													</div>
												</div>
												<div class="form-group">
                                                    <label class="col-md-4 mtop10">Tỉnh/Thành phố <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<select class="select2me form-control" id="provinceid" name="provinceid" data-placeholder="Chọn tỉnh/thành phố" >
															<option value=""></option>
															<option value="1">A</option>
														</select>
													</div>
												</div> 
												<div class="form-group">
                                                    <label class="col-md-4 mtop10">Quận huyện <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<select class="select2me form-control" id="districid" name="districid" data-placeholder="Chọn quận huyện" >
															<option value=""></option>
															<option value="1">A</option>
														</select>
													</div>
												</div>  
												<div class="form-group">
                                                    <label class="col-md-4 mtop10">Địa chỉ <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<input name="address" type="text" class="form-control" value = "Nguyễn Huệ">
													</div>
												</div> 
												<div class="form-group">
                                                    <label class="col-md-4 mtop10">Avatar</label>
													<div class="col-md-8 mtop10">
														<input type="button" class="btn btn-next btn-primary btn-avatar" name="save" value="chọn hình">
													</div>
												</div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 1 -->

                                </div>	
                            </form>
							<!--E Thông tin cá nhân-->
							<!--S Thông tin liên hệ-->
							<form action="" method="">                        
                                <ul class="nav nav-pills mtop10">
                                    <li class="active nav-left" ><a href="#step1" >Thông tin liên hệ</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active mtop10">
                                        <div class="row p-b-15  ">
                                            <div class="col-sm-8 col-md-8">
                                                <div class="form-group">
                                                    <label class="col-md-4 mtop10">Điện thoại <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<input name="phone" id="phone" type="text" class="form-control" value="0827 533 555">
													</div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 mtop10">Email </label>
                                                    <div class="col-md-8 mtop10">
														<input name="email" id="email" type="text" class="form-control" >
													</div>
                                                </div>
											   
												<div class="form-group">
                                                    <label class="col-md-4 mtop10">Facebook</label>
													<div class="col-md-8 mtop10">
														<input name="facebook" id="facebook" type="text" class="form-control">
													</div>
												</div>
												
												<div class="form-group">
                                                    <label class="col-md-4 mtop10">Zalo</label>
													<div class="col-md-8 mtop10">
														<input name="zalo" id="zalo" type="text" class="form-control">
													</div>
												</div>
												
												<div class="form-group">
                                                    <label class="col-md-4 mtop10">Twitter</label>
                                                    <div class="col-md-8 mtop10">
														<input name="twitter" id="twitter" type="text" class="form-control">
													</div>
												</div>
												
												<div class="form-group">
                                                    <label class="col-md-4 mtop10">Youtube</label>
													<div class="col-md-8 mtop10">
														<input name="twitter" id="twitter" type="text" class="form-control">
													</div>
												</div>
												
												<div class="form-group">
                                                    <label class="col-md-4 mtop10">Instagram</label>
													<div class="col-md-8 mtop10">
														<input name="instagram" id="instagram" type="text" class="form-control">
													</div>
												</div>
												
												<div class="form-group">
                                                    <label class="col-md-4 mtop10">Skype</label>
													<div class="col-md-8 mtop10">	
														<input name="skype" id="skype" type="text" class="form-control">
													</div>
												</div>
												
												<div class="form-group">
													<div class="col-md-4 mtop10"></div>
													<div class="col-md-8 mtop10">
														<div class="pull-right">
															<input type="button" class="btn btn-next btn-primary" name="save" value="Lưu">
														</div>
														<div class="pull-left">
															<input type="button" class=" btn btn-previous btn-default disabled" name="previous" value="Xóa">
														</div>
														<div class="clearfix"></div>     
													</div>   
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 1 -->

                                </div>
                            </form>
							<!--E Thông tin liên hệ-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
