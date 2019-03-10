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
                                    <li class="active nav-left" ><a href="#step1" >Đổi mật khẩu</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active mtop10">
                                        <div class="row p-b-15">
                                            <div class="col-sm-8 col-md-8">
                                                <div class="row">
                                                    <label class="col-md-4 mtop10">Mật khẩu mới <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<input name="password" id="password" type="password" class="form-control" value="">
													</div>
												</div>	
                                                <div class="row">
                                                    <label class="col-md-4 mtop10">Xác nhận mật khẩu <span class="red">(*)</span></label>
													<div class="col-md-8 mtop10">
														<input name="cfpassword" id="cfpassword" type="password" class="form-control" >
													</div>
                                                </div> 
                                                <div class="row">
													<div class="col-md-4 mtop10"></div>
													<div class="col-md-8 mtop10">
														<div class="pull-left">
															<input type="button" class="btn btn-next btn-primary" name="save" value="Lưu">
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
							<!--E Thông tin cá nhân-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
