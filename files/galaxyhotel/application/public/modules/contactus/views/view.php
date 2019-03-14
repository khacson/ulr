<section class="contact-block">
	<div class="container">
		<div class="col-md-6 contact-left-block">
			<h3><span>Liên </span>Hệ</h3>
			<p class="text-left"></p>
			<p class="text-left"><?=$finds->address;?> <i class="fa fa-map-marker fa-lg"></i></p>
			<p class="text-left"><a href="tel:+1-202-555-0100"> <?=$finds->phone;?> <i class="fa fa-phone fa-lg"></i></a></p>
			<p class="text-left"><a href="mailto:<?=$finds->email;?>"> <?=$finds->email;?> <i class="fa fa-envelope"></i></a></p>
		</div>
		<div class="col-md-6 contact-form">
			<h3>Gửi <span>liên hệ</span></h3>
			<form action="#" method="post">
				<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Họ tên" >
				<input type="email" class="form-control" name="email" id="email" placeholder="Email" >
				<textarea class="form-control" name="description" id="description" placeholder="Nội dung...." ></textarea>
				<input type="botton" id="botton" class="submit-btn" value="Gửi">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!---map--->
<section class="offspace-70">
	<div class="map">
		<div class="container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.2525035480044!2d109.2217719140708!3d13.763640690339788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f6c8d576a0be5%3A0x836b5bea564950c5!2zMjcgTmd1eeG7hW4gTOG6oWMsIFRy4bqnbiBQaMO6LCBUaMOgbmggcGjhu5EgUXVpIE5oxqFuLCBCw6xuaCDEkOG7i25oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1539658170942" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</section>
<!---footer--->
<link href="<?=url_tmpl();?>toast/toastr.css" rel="stylesheet" type="text/css"/>
<script src="<?=url_tmpl();?>toast/toastr.js"></script>
<script>
	$(function(){
		 $('#header').addClass('header-scrolled');
		$('#botton').click(function(){
			var fullname = $('#fullname').val();
			var email = $('#email').val();
			var description = $('#description').val();
			if(fullname == ''){
				warning('Họ tên không được trống.');
				$('#fullname').focus(); return false;
			}
			if(email == ''){
				warning('Email không được trống.');
				$('#email').focus(); return false;
			}
			$.ajax({
				  url:'<?=base_url();?>contactus/save',
				  async: false,
				  type: 'POST',
				  data:{fullname:fullname,phone:'',email:email,description:description},
				  success:function(datas) {
					  if(datas == 1){
						  success('Cảm ơn bạn đã liên hệ với khách sạn chúng tôi. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.');
					  }
					  else{
						  warning('Gửi liên hệ không thành công');
					  }
				  }
			});
		});
	});
	function warning(text){
		 toastr.warning(text,'Thông báo', {
		   closeButton: false,
		   //debug: true,
		   newestOnTop: false,
		   progressBar: true,
		   positionClass: "toast-top-center",
		   preventDuplicates: true,
		   onclick: null,
		   showDuration: "300",
		   hideDuration: 3000,
		   timeOut: 3000,
		   extendedTimeOut: 3000,
		   showEasing: "swing",
		   hideEasing: "linear",
		   showMethod: "fadeIn",
		   hideMethod: "fadeOut"
		});
	}
	function success(text){
		toastr.success(text,'Thông báo', 
		{
		   closeButton: false,
		   //debug: true,
		   newestOnTop: false,
		   progressBar: true,
		   positionClass: "toast-top-center",
		   preventDuplicates: true,
		   onclick: null,
		   showDuration: "300",
		   hideDuration: 3000,
		   timeOut: 3000,
		   extendedTimeOut: 3000,
		   showEasing: "swing",
		   hideEasing: "linear",
		   showMethod: "fadeIn",
		   hideMethod: "fadeOut"
		});
	}
</script>