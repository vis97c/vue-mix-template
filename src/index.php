<?php
  require_once '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-control" content="public" max-age="31536000">
	<meta http-equiv="Content-Language" content="es">

	<!-- inicia SEO -->
		<title>_Blank app | Using Vue.js + Laravel mix in a node.js enviroment</title>
		<link type="image/ico" rel="icon" href="/favicon.ico">
		<link rel="canonical" href="URL FULL AQUI">	
		<meta name="description" content="DESCRIPCION AQUI">
		<meta name="Keywords" content="KEYWORDS AQUI">
		<!-- inicia TWITTER CARD -->
			<meta name="twitter:card" content="summary" >
			<meta name="twitter:title" content="_Blank | Vue.js + Laravel mix app" >
			<meta name="twitter:description" content="DESCRIPCION" >
			<meta name="twitter:image" content="URL DE IMAGEN DE MUESTRA AQUI" >
			<meta name="twitter:creator" content="CUENTA DE TWITTER" >
		<!-- termina TWITTER CARD -->
		<!-- inicia OPEN GRAPH -->
			<meta property="og:site_name" content="NOMBRE CORTO DEL SITIO" >
			<meta property="og:type" content="website">
			<meta property="og:url" content="URL FULL AQUI" >
			<meta property="og:title" content="_Blank app | Using Vue.js + Laravel mix in a node.js enviroment" >
			<meta property="og:description" content="DESCRIPCION" >
			<meta property="og:image" content="URL DE IMAGEN DE MUESTRA AQUI" >
		<!-- termina OPEN GRAPH -->
	<!-- termina SEO -->

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="hsl(197, 100%, 50%)">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="hsl(197, 100%, 50%)">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="white">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo mix('/css/main.css'); ?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141703275-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-141703275-2');
	</script> -->
</head>
<body>
	<noscript>
      <strong>We're sorry but hello-world doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app"></div>
    <script type="text/javascript" src="<?php echo mix('js/app.js'); ?>"></script>
</body>
</html>