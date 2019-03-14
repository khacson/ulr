<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title><?=$title;?></title>
		<meta content="<?=$keywords;?>" name="keywords">
		<meta content="<?=$description;?>" name="description">
		<meta name="robots" content="noodp"/>
		
		<meta property="og:locale" content="vi_VN" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?=$face_title;?>" />
		<meta property="og:description" content="<?=$face_description;?>" />
		<meta property="og:url" content="<?=$face_url;?>" />
		<meta property="og:site_name" content="<?=$face_site_name;?>" />
		  
		<meta property="og:image:width" content="600" />
		<meta property="og:image:height" content="500" />

        <!-- Bootstrap core CSS -->
        <link href="<?=url_tmpl();?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=url_tmpl();?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="<?=url_tmpl();?>css/style.css" rel="stylesheet">
        <link href="<?=url_tmpl();?>css/lightbox.min.css" rel="stylesheet" >
        <link href="<?=url_tmpl();?>css/responsive.css" rel="stylesheet">
		
        <script src="<?=url_tmpl();?>js/jquery.min.js" type="text/javascript"></script>
        <script src="<?=url_tmpl();?>js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?=url_tmpl();?>js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="<?=url_tmpl();?>js/instafeed.min.js" type="text/javascript"></script>
        <script src="<?=url_tmpl();?>js/custom.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="page">
			<?=$this->load->inc('menu');?>
            <?=$content;?>
            <!---footer--->
			<?=$this->load->inc('footer');?>
            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span></span>
            </a>
        </div>
    </body>
</html>
