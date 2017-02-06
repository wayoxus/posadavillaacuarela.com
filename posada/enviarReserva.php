<?
	$llegada=$_POST["date_in_input"];
	$salida=$_POST["date_out_input"];
	$numhab=$_POST["numhab"];
	$adultos=$_POST["adultos"];
	$nombre=$_POST["nombre"];
	$emailuser=$_POST["emailuser"];
	$telefono=$_POST["telefono"];
	$cedula=$_POST["cedula"];
	$comentarios=$_POST["comentarios"];
	$fecha= date("Y-m-d H:i:s");// YYYY-MM-DD HH:MM:SS (Formato DATETIME de MySQL)

	//Estoy recibiendo el formulario, compongo el cuerpo (este mail llega al hotel)
	$cuerpoquellegaalhotel = "Planilla de reservacion desde su sección de reservaciones en la web posadavillaacuarela.com\n\n\n";
	$cuerpoquellegaalhotel .= "Nombres: $nombre\n";
	$cuerpoquellegaalhotel .= "Email: $emailuser\n";
	$cuerpoquellegaalhotel .= "Fecha de llegada: $llegada\n";
	$cuerpoquellegaalhotel .= "Fecha de salida: $salida\n";
	$cuerpoquellegaalhotel .= "Numero de habitaciones: $numhab\n";
	$cuerpoquellegaalhotel .= "Numero de adultos: $adultos\n";
	$cuerpoquellegaalhotel .= "Telefono: $telefono\n\n";
	$cuerpoquellegaalhotel .= "Cedula: $cedula\n\n";
	$cuerpoquellegaalhotel .= "Comentarios: $comentarios\n\n";
	$cuerpoquellegaalhotel .= "Recuerde verificar disponibilidad y contactar de nuevo via email al cliente para confirmar su reserva\n\nEn Wayox Media y LaraTurismo estamos para servirle.\n\n";
	// -------------------- segundo email (al remitente) ------------------
	$cuerpoquellegaalusuario = "Pre-reservacion en linea en la Posada Villa Acuarela\n\n\n";
	$cuerpoquellegaalusuario .= "Gracias por preferirnos\n\n";
	$cuerpoquellegaalusuario .= "Hemos recibido la siguiente informacion,\n\n";
	$cuerpoquellegaalusuario .= "Nombres: $nombre\n";
	$cuerpoquellegaalusuario .= "Email: $emailuser\n"; 
	$cuerpoquellegaalusuario .= "Fecha de llegada: $llegada\n";
	$cuerpoquellegaalusuario .= "Fecha de salida: $salida\n";
	$cuerpoquellegaalusuario .= "Numero de habitaciones: $numhab\n";
	$cuerpoquellegaalusuario .= "Numero de adultos: $adultos\n";
	$cuerpoquellegaalusuario .= "Telefono: $telefono\n\n";
	$cuerpoquellegaalusuario .= "Cedula: $cedula\n\n";
	$cuerpoquellegaalusuario .= "Comentarios: $comentarios\n\n";
	$cuerpoquellegaalusuario .= "Por favor verifique que los datos sean correctos, hemos iniciado una reservacion con esta informacion y nos comunicaremos con usted proximamente al correo $emailuser para informarle si su reserva se efectuo exitosamente (acorde a nuestra disponibilidad). Si tiene dudas, puede coctactarnos via telefonica al +58(424)-5308115.\n\nEn LaraTurismo y Posada Villa Acuarela nos sentimos complacidos en poder servirles.";
	// Configuro el envio
	// asuntos
	$asuntoquellegaalusuario="Email enviado a Posada Villa Acuarela desde la web";
	$asuntoquellegaalhotel="Solicitud de reservacion enviada desde la web PosadaVillaAcuarela.com";
	
	//headers
	//$headers .= "Content-type: text/html; charset=UTF-8\r\n"; //en caso de usar formato html
	$headersahotel .= "MIME-Version: 1.0\r\n";
	$headersahotel .= "From: $nombre <$emailuser>";
	$headersausuario = "MIME-Version: 1.0\r\n";
	$headersausuario .= "From: Posada Villa Acuarela < posadavillaacuarela@gmail.com >\r\n";
	//mando el correo...
	mail("walkovik@gmail.com","$asuntoquellegaalhotel","$cuerpoquellegaalhotel","$headersahotel");
	//mail("posadavillaacuarela@gmail.com","$asuntoquellegaalhotel","$cuerpoquellegaalhotel","$headersahotel");
	mail("$emailuser","$asuntoquellegaalusuario","$cuerpoquellegaalusuario","$headersausuario");
	// incluyo al usuario en la base de datos
	include("../../conex.phtml");
	$link=Conectarse();   
	$inclusion="insert into listacorreo values (null, '$nombre', '$emailuser', '$telefono', 'posadavillaacuarela.com','$fecha','$cedula')";
	$resultado=mysql_query($inclusion,$link); // fin inclusion BD
	header("location:enviado.php");
	//echo "Cuerpo que llega al Usuario:<br>";
	//echo "$cuerpoquellegaalusuario";
