<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reservaciones | Posada Villa Acuarela</title>
<meta name="author" content="Wayox Media C.A." />
<meta name="description" content="Solicite su reserva usando nuestro en la Posada Villa Acuarela en Sanare, Edo Lara, Venezuela" />
<meta name="keywords" content="Posada, turismo, Sanare, Lara, Venezuela" />

<link rel="stylesheet" type="text/css" href="./styles.css" />
<script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".widget_recent_entries li:even").addClass("even");
		$(".table-price tbody tr:odd").addClass("odd");
	});
</script>
<script language="javascript">
function valida_envia(){ 
   	//valido el nombre 
   	if (document.fvalida.date_in_input.value.length==0){ 
      	 alert("Indique fecha de llegada") 
      	 document.fvalida.date_in_input.focus() 
      	 return 0; 
   	}

   	if (document.fvalida.date_out_input.value.length==0){ 
      	 alert("Indique fecha de salida") 
      	 document.fvalida.date_out_input.focus() 
      	 return 0; 
   	}
   	if (document.fvalida.nombre.value.length==0){ 
      	 alert("Indique su nombre") 
      	 document.fvalida.nombre.focus() 
      	 return 0; 
   	}
   	if (document.fvalida.emailuser.value.length==0){ 
      	 alert("Indique su correo, es necesario para informarle si su reservacion se hizo correctamente") 
      	 document.fvalida.emailuser.focus() 
      	 return 0; 
   	}
   	if (document.fvalida.telefono.value.length==0){ 
      	 alert("Indique su telefono, es necesario para contactarle") 
      	 document.fvalida.emailuser.focus() 
      	 return 0; 
   	}
	if (document.fvalida.cedula.value.length==0){ 
      	 alert("Indique su cedula, es necesario para tramitar su reserva") 
      	 document.fvalida.cedula.focus() 
      	 return 0; 
   	}

//el formulario se envia 
   	//El alert es opcional
	//alert("Muchas gracias por enviar el formulario"); 
   	document.fvalida.submit(); 
}
</script>
<link rel="stylesheet" type="text/css" href="./css/wi-theme/jquery-ui-1.8.9.custom.css" />
<link rel="stylesheet" type="text/css" href="./css/ui.selectmenu.css" />
<script type="text/javascript" language="javascript" src="./js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript" language="javascript" src="./js/ui.selectmenu.js"></script>
<script type="text/javascript" language="javascript" src="./js/styled.selectmenu.js"></script>
<script type="text/javascript">
// <![CDATA[
$(function(){
  var bookedDays = ["2011-2-22","2011-2-23","2011-3-8","2011-3-9","2011-3-10"];
  
  function assignCalendar(id){
    $('<div class="calendar" />')
      .insertAfter( $(id) )
      .datepicker({ 
        dateFormat: 'dd-mm-yy', 
        minDate: new Date(), 
        maxDate: '+1y', 
        altField: id, 
        firstDay: 1,
        showOtherMonths: true,
        dayNamesMin: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
        beforeShowDay: isAvailable })
      .prev().hide();
  }
  
  function isAvailable(date){
    var dateAsString = date.getFullYear().toString() + "-" + (date.getMonth()+1).toString() + "-" + date.getDate();
    var result = $.inArray( dateAsString, bookedDays ) ==-1 ? [true] : [false];
    return result
  }

  assignCalendar('#date_in_input');
  assignCalendar('#date_out_input');
});
// ]]>
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
    	<div class="image"><img src="imagenes/header/header_4.jpg" width="708" height="124" alt="" /></div>
    	<h1><span>Solicite</span> su reserva</h1>
    </div>
    
    <!-- middle content -->
    <div class="container_24">
    	
        <!-- content -->
    	<div class="grid_17 suffix_1">
       	  	<div class="text">
            
                <h2>ENVIENOS UNA SOLICITUD DE RESERVACION</h2>
                <h5>Tenga en cuenta que esta no es una reservación aún, es la pre-reserva. Cuando haya enviado esta pre-reserva, verificaremos en nuestro sistema si hay disponibilidad y luego le contactaremos para procesar la reserva. Gracias!</h5>
                
                <form name="fvalida" action="enviarReserva.php" method="post" class="reservationForm" />
                
                	<!-- column 1 -->
                    <div class="column_3">
                        <div class="row field_text">
							<label>Su Nombre:</label><br />
                            <input name="nombre" value="" id="nombre" class="inputtext required" size="40" type="text" />
						</div>

						<div class="row field_select">
							<label>Tipo de cabaña:</label><br />
                            <select class="select_styled" name="rooms1" id="rooms1">
                            	<option value="1" selected="selected">Cabaña Suite Superior</option>
                                <option value="2">Cabaña Suite Premium</option>
                                <option value="3">Cabaña Suite Junior</option>
                                <option value="4">Habitación Matrimonial</option>
							</select>
						</div>
                        
                        <div class="row field_select">
                            <label>Número de Adultos por cabaña:</label><br />
                            <select class="select_styled" name="adultos" id="adultos">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
								<option value="4">4</option>
                            </select>
                            </div>
                            
                            <div class="row field_select">
                            <label>Cantidad de Caba&ntilde;as:</label><br />
                            <select class="select_styled" name="numhab" id="numhab">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            </div>

							<div class="row field_text">
								<label>Su Correo:</label><br />
								<input name="emailuser" value="@" id="emailuser" class="inputtext required" size="40" type="text" />
							</div>
							<div class="row field_text">
								<label>Su Tel&eacute;fono:</label><br />
								<input name="telefono" value="" id="telefono" class="inputtext required" size="40" type="text" />
							</div>
							<div class="row field_text">
								<label>Su C&eacute;dula:</label><br />
								<input name="cedula" value="" id="cedula" class="inputtext required" size="40" type="text" />
							</div>
						</div>
                    <!--/ column 1 -->
                    
                    <!-- column 2 -->
                <div class="column_3">
					<div class="row field_date">
					  <label>Elija fecha de <strong>llegada:</strong></label><br />
						<div id="date_in"></div>
						<input name="date_in_input" value="" id="date_in_input" type="text" />
					</div>
				<div class="row field_text">
					<p>Le sugerimos revisar nuestro reglamento interno a fin de informarse correctamente de ciertos lineamientos y condiciones existentes en nuestra posada.</p>
					<p>CONDICIONES PARA USO DE CUPONES, OFERTAS Y PROMOCIONES:</p>
					<p>Si usted tiene un cupon de descuento, se benefici&oacute; a trav&eacute;s de una oferta o se le asign&oacute; una visita de cortes&iacute;a debe tener en cuenta que la fecha a usar por concepto de reservaci&oacute;n no es modificable. Tenga en cuenta esta informaci&oacute;n al momento de asegurar la pre-reserva que desea hacernos, evitese molestias y aseg&uacute;rese bien de la fecha a elegir para su visita.</p>
					<p>Si por alg&uacute;n motivo no puede venir en la fecha acordada, puede transferirle a otra persona su reserva.</p>
				</div>
				</div>
                    <!--/ column 2 -->

                    <!-- column 3 -->
                <div class="column_3 omega">
					<div class="row field_date">
					  <label>Elija fecha de <strong>salida:</strong></label><br />
						<div id="date_out"></div>
					  <input name="date_out_input" value="" id="date_out_input" type="text" />
					</div>
				<div class="row field_text">
					<p>POLITICA DE CANCELACION:</p>
					<p>Cualquier cancelaci&oacute;n deber&aacute; ser notificado con 72 horas (3 d&iacute;as) de antelación a la fecha de llegada, de lo contrario ser&aacute; cobrada una (1) noche por concepto de NO SHOW y no se devolver&aacute; dinero, deber&aacute; solicitar un cambio de fecha.</p>
					<p>POLITICA DE CAMBIO DE FECHA:</p>
					<p>Cualquier cambio de fecha de reservaci&oacute;n deber&aacute; ser notificado con 72 horas (3 d&iacute;as) de antelaci&oacute;n a la fecha de llegada, de lo contrario ser&aacute; cobrada una (1) noche por concepto de NO SHOW.</p>
					<p>IMPORTANTE: BAJO NINGUN CONCEPTO, NO ACEPTAMOS CAMBIOS DE FECHAS EN TEMPORADA ALTA SALVO QUE SE HAYAN SOLICITADO CON 1 SEMANA DE ANTICIPACION</p>
                  </div>
				</div>
                    <!--/ column 3 -->
				<div class="clear"></div>
				<div class="row field_textarea">
					<label>Comentarios:</label><br />
					<textarea id="comentarios" name="comentarios" class="textarea textarea_middle required" cols="40" rows="10"></textarea>
				</div>
                    
				<div class="clear"></div>
				
				<div class="notice_table"><span class="square-green">Su selección</span> <span class="square-disable">No disponible</span></div>
				
				<div class="field_submit">
					<input name="enviar" type="button" id="enviar" value="Enviar" onClick="valida_envia()" class="btn-send" />
					<p class="notice">Tenga en cuenta que esta no es una reservación aún, es la pre-reserva.<strong> Cuando haya enviado esta pre-reserva, verificaremos en nuestro sistema si hay disponibilidad y luego le contactaremos para procesar la reserva. Gracias!</strong></p>
				</div>
                </form>
			</div>
        </div>
        <!--/ content -->
        <!-- sidebar -->
        <div class="grid_6">
        <? include("incADR.php"); ?>
        </div>
        <!--/ sidebar -->
        
        <div class="clear"></div>
	</div>
    <!--/ middle content -->
</div>
</div>

<? include("incFoot.php"); ?>

</body>
</html>
