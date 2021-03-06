<!doctype html>
<html>

<head>
	<meta charset="utf-8">
<!--	<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<meta name="Keywords" content="<?=isset($keymeta) ? $keymeta : 'buffet 99k sao mai' ?>">
	<meta name="Content-Type" content="<?=isset($themeta) ? $themeta : 'buffet 99k sao mai' ?>">
	<meta name="Description" content="<?=isset($motameta) ? $motameta : 'buffet 99k sao mai' ?>">
	<title><?php if(isset($title)) echo $title; else echo 'buffet 99k sao mai'; ?></title>
	<link rel="icon" href="<?=base_url() ?>img/logo1.png">
	<link rel="stylesheet" href="<?=base_url() ?>css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url() ?>css/style.css">
	<link rel="stylesheet" href="<?=base_url() ?>fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" href="<?=base_url() ?>owl/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url() ?>owl/dist/assets/owl.theme.default.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<script type="text/javascript" src="<?=base_url() ?>js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>js/popper.min.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>js/scrollreveal.min.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>js/custom.js"></script>
	<script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>
	<script src="<?=base_url() ?>owl/dist/owl.carousel.min.js"></script>
	<link  href="<?=base_url() ?>fotorama-4.6.4/fotorama.css" rel="stylesheet">
	<script src="<?=base_url() ?>fotorama-4.6.4/fotorama.js"></script>
	<script src="<?=base_url() ?>viewer/viewer.js"></script>
	<link  href="<?=base_url() ?>viewer/viewer.css" rel="stylesheet">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		 (adsbygoogle = window.adsbygoogle || []).push({
			  google_ad_client: "ca-pub-2882504649631672",
			  enable_page_level_ads: true
		 });
	</script>
</head>

<body>
	<?php
	if(isset($slide)) {
		$this->load->view($slide);
	}
	$this->load->view('home/header');
	$this->load->view($content);
	$this->load->view('home/footer');
	?>

</body>

</html>