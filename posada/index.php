<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Posada Villa Acuarela - Principal</title>
<meta name="author" content="Wayox media C.A." />
<meta name="description" content="Posada ecoturistica y lujosa en Sanare, Edo Lara, Venezuela" />
<meta name="keywords" content="Posada, turismo, Sanare, Lara, Venezuela" />

<link rel="stylesheet" type="text/css" href="styles.css" />
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>

<script type="text/javascript" src="js/slides.jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/slides.css" />
<script type="text/javascript">
		$(function(){
			$('#slides').slides({
				width: 960,
				height: 379,
				preload: true,
				preloadImage: 'imagenes/loading.gif',
				play: 5000,
				pause: 2500,
				effect: 'fade, fade',
				hoverPause: true,
				animationStart: function(){
					$('.caption').animate({
						bottom:-96
					},100);
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
			
		});
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<? include("incHead.php"); ?>

<!-- topmenu -->  
<? include("incTopMenu.php"); ?>    
<!--/ topmenu -->
<!-- header slider -->
<? include("incSlider.php"); ?> 
<!--/ header slider --> 
<div class="header-line"></div> <!--La linea q va debajo del slider, medio gruesa negra -->

<div class="middle">
<div class="container">

	<!-- baners top -->
    <? include("incBoxesSmall.php"); ?>
	<!--/ baners top -->

    <!-- middle content -->
    <? include("incBoxesInfo.php"); ?>
    <!--/ middle content -->
</div>
</div>

<? include("incFoot.php"); ?>

</body>
</html>
