<?
if (!$_POST){ 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contacto | Posada Villa Acuarela</title>
<meta name="author" content="Wayox Media C.A." />
<meta name="description" content="Contacte a la Posada Villa Acuarela en Sanare, Edo Lara, Venezuela" />
<meta name="keywords" content="Posada, turismo, Sanare, Lara, Venezuela" />

<link rel="stylesheet" type="text/css" href="./styles.css" />
<script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".widget_recent_entries li:even").addClass("even");
	});
</script>

<link rel="stylesheet" type="text/css" href="./css/wi-theme/jquery-ui-1.8.9.custom.css" />
<link rel="stylesheet" type="text/css" href="./css/ui.selectmenu.css" />
<script type="text/javascript" language="javascript" src="./js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript" language="javascript" src="./js/ui.selectmenu.js"></script>
<script type="text/javascript" language="javascript" src="./js/styled.selectmenu.js"></script>

<script language="javascript">
function valida_envia(){ 
   	//valido el nombre 
   	if (document.fvalida.nombre.value.length==0){ 
      	 alert("Escriba su nombre") 
      	 document.fvalida.nombre.focus() 
      	 return 0; 
   	}

   	if (document.fvalida.email.value.length==0){ 
      	 alert("Escriba su email") 
      	 document.fvalida.email.focus() 
      	 return 0; 
   	}

   	if (document.fvalida.comentarios.value.length==0){ 
      	 alert("Escriba su comentario") 
      	 document.fvalida.comentarios.focus() 
      	 return 0; 
   	}
	//el formulario se envia 
   	//El alert es opcional
	//alert("Muchas gracias por enviar el formulario"); 
   	document.fvalida.submit(); 
} 

</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<? include("incHead.php"); ?>

<!-- topmenu -->  
<? include("incTopMenu.php"); ?>         
<!--/ topmenu -->

<div class="header">
	<div class="container">&nbsp;</div>  
</div>
<div class="header-line"></div>

<div class="middle">
<div class="container">

	<div class="header-title-image">
    	<div class="image"><img src="imagenes/header/header_5.jpg" width="708" height="124" alt="" /></div>
    	<h1><span>Contactenos </span> para más</h1>
    </div>
    
    <!-- middle content -->
    <div class="container_24">
    	
        <!-- content -->
    	<div class="grid_17 suffix_1">
        
            
            
            <!--contact form -->
            <div class="contact-form">
				<h4>Envíenos un correo indicándonos cualquier otra información, duda o solicitud adicional que necesite comunicarnos.</h4>
                <h4>&nbsp;</h4>
              <h2>Llene completamente el siguiente formulario</h2>
                
                            <form name="fvalida" action="contacto.php" method="post" class="ajax_form" />

                                <div class="row field_text alignleft">
                                	<label>Su nombre:</label><br />
                                    <input name="nombre" value="" id="nombre" class="inputtext input_middle required" size="40" type="text" />
                                </div>
                                
                                <div class="row field_text alignleft">
                                	<label>Su email:</label><br />
                                    <input name="email" value="" id="email" class="inputtext input_middle required" size="40" type="text" />
                                </div>
                                <div class="clear"></div>
                                
                                <div class="row field_textarea">
                                	<label>Comentarios:</label><br />
                                    <textarea id="comentarios" name="comentarios" class="textarea textarea_middle required" cols="40" rows="10"></textarea>
                                </div>
                                
                                <div class="row field_text">
                                	<input name="checkbox" value="" id="checkbox" class="inputcheckbox" size="40" type="checkbox" checked="checked" /> <label>Marque si desea suscribirse a la lista de correos</label> 
                                </div>
                                <div class="clear"></div>
                                
	                            <div class="row field_submit">
                                	<span class="reset-link"><a href="#" onclick="document.fvalida.reset();return false">Borrar contenido</a></span>
                                	<input value="Enviar Mensaje" name="enviar" title="Enviar Mensaje" class="contact-submit submit" id="enviar" type="button" onClick="valida_envia()" />
								</div>                               
                            </form>
                        </div>
            <!--/ contact form -->
        </div>
        <!--/ content -->
        <!-- sidebar -->
        <div class="grid_6">
            
			<div class="box box_black">
            	<div class="inner">
            		<h3 class="bordered"><span>Unete</span> a las redes sociales:</h3>
                		<div class="social-box">
							<div class="row social-twitter"><a href="http://twitter.com/villaacuarela">twitter.com/villaacuarela</a></div>
							<div class="row social-facebook"><a href="http://facebook.com/posadavillaacuarela">facebook.com/posadavillaacuarela</a></div>
                        </div>
				</div>                        
			</div>
            
			<div class="box box_gray">
				<h3><span>Contactenos</span> para más:</h3>
                
					<div class="contact-address">
						<div class="address">Caserío Sabana Grande<br />
							Vía La Matica<br />
							Sanare, Edo Lara, Venezuela</div>
						<div class="phone">M&oacute;vil: +58 (424) 5308115</div>
						<div class="phone">M&oacute;vil:     +58 (414) 9844262</div>
					</div>
                    
                    <div class="contact-maillist">
                        <div class="contact-mail"><a href="mailto:posadavillaacuarela@gmail.com">posadavillaacuarela@gmail.com</a></div>
                        <!--<div class="contact-mail"><a href="mailto:reserva@posadavillaacuarela.com">reserva@posadavillaacuarela.com</a></div>
                        <div class="contact-mail"><a href="mailto:eventos@posadavillaacuarela.com">eventos@posadavillaacuarela.com</a></div> -->
					</div>
			</div>
        </div>
        <!--/ sidebar -->
        
        <div class="clear"></div>
	</div>
    <!--/ middle content -->
    
    <!--<div class="newsletter_box">
        <h3>Suscribase a nuestra red:</h3>
        <form action="maillist.php" method="post" />
        	<input type="text" value="su correo aqui" onfocus="if (this.value == 'su correo aqui') {this.value = '';}" onblur="if (this.value == '') {this.value = 'su correo aqui';}" name="" class="inputField" />
			<input type="submit" value="Submit" class="btn-submit" />
        </form>
        <div class="clear"></div>
    </div> -->
</div>
</div>
<? include("incFoot.php"); ?>
</body>
</html>
<? 
	}else{ 
	//Vaciando Variables
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$comentarios = $_POST["comentarios"];
	//Estoy recibiendo el formulario, compongo el cuerpo 
	$cuerpo = "Formulario enviado desde la sección de contacto de la web posadavillaacuarela.com\n\n\n"; 
	$cuerpo .= "Nombres: $nombre\n"; 
	$cuerpo .= "Email: $email\n"; 
	$cuerpo .= "Comentarios: $comentarios"; 
	// -------------------- segundo email (al remitente) ------------------
	$cuerp2 = "Formulario enviado desde la sección de contacto de la web posadavillaacuarela.com\n\n\n";
	$cuerp2 .= "Gracias por escribirnos\n\n";
	$cuerp2 .= "Hemos recibido su comentario, debido a la cantidad de correos que recibimos diariamente, nos resulta imposible responder a su inquietud con la prontitud que quisiéramos. Le rogamos disculpas por ello y esperamos poder comunicarnos con usted próximamente.\n\n";
	$cuerp2 .= "Aquí una copia de sus comentarios\n";
	$cuerp2 .= "Nombres: $nombre\n"; 
	$cuerp2 .= "Email: $email\n"; 
	$cuerp2 .= "Comentarios: $comentarios\n"; 
	// Configuro el envio
	//$to = "LARATURISMO <info@laraturismo.com>";
	//$headers = "Bcc: correos@wayox.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	//$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: $nombre <$email>\r\n";
	$headers2 = "MIME-Version: 1.0\r\n";
	//$headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers2 .= "From: Posada Villa Acuarela<info@posadavillaacuarela.com>\r\n";
	//$subject ="Solicitud Franquicia PhoneXpress";
	//mando el correo...
	//mail($to,'Formulario recibido desde la Web',"$cuerpo","$headers");
	mail("info@posadavillaacuarela.com",'Formulario recibido desde la Web PosadaVillaAcuarela.com',"$cuerpo","$headers");
	mail("$email","Formulario enviado desde la Web posadavillaacuarela.com","$cuerp2","$headers2");
	mail("correos@wayox.com","Agregar a la lista VILLA ACUARELA","$cuerpo","$headers");
	//mail($email,$subject,$respuesta_solicitante,$headers2);
	//mail($to,$subject,$msg,$headers);
	//mail('walkovik@cantv.net','Formulario recibido',"$cuerpo");
	header('location:enviado.php');
	//doy las gracias por el envío 
	//echo "Gracias por rellenar el formulario. Se ha enviado correctamente."; 
	} 
?>