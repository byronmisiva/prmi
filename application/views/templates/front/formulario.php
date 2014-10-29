<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title><?=$titulo?></title>
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:600italic,300italic,300&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css" />
		<script src="http://www.google.com/jsapi"></script>
			<script>
			  google.load("prototype", "1.7.0.0");
			  google.load("scriptaculous", "1.8.3");
			</script>
		<style>
		td{	color:#ffffff;}	</style>
		<script>
		function enviarForma(){
				var check=0;	
				var error_color='#006633';		
				if($('nombre').value==""){
					check++;
					$('nombre').style.backgroundColor=error_color;
				}		
		
				if($('cargo').value==""){
					check++;
					$('cargo').style.backgroundColor=error_color;
				}
			 	
				if($('movil').value==""){
					check++;
					$('movil').style.backgroundColor=error_color;
				}	
				if($('ext').value==""){
					check++;
					$('ext').style.backgroundColor=error_color;
				}		
				
				if (check==0){	
					document.forms['datos'].submit();					
					}			
			  }
		
			function limpiar(id){
				  var color='#ffffff';	
				  $(id).value="";	  
				  $(id).style.backgroundColor=color;
			}
		</script>	
	</head>
	<body style="background:url('<?=base_url().'imagenes/fondo.jpg'?>');background-size:100% 150%;background-repeat:no-repeat;">
		<div style='width:750px;height:300px;margin:150px auto;font:11px Verdana; -moz-border-radius: 25px; border-radius: 10px;background:#353535;'>
			<div style="float:left;padding-left:35px;padding-right:15px;padding-top:45px;width:300px;">
				<img src="<?=base_url().'imagenes/logo.jpg'?>" />
			</div>
			<div style="float:right;padding-left:5px;padding-right:25px;padding-top:45px;width:300px;">
				<form id="datos" name="datos" method="post" action="<?=base_url().'index.php?welcome/generar'?>" >
					<?php
					$js="onclick='limpiar(this.id);' onFocus='limpiar(this.id);'";
						$nombre=array('name'=>'nombre','id'=>'nombre');
						$tipo=array('name'=>'cargo','id'=>'cargo');
						$movil=array('name'=>'movil','id'=>'movil');
						$ext=array('name'=>'ext','id'=>'ext');	
					?> 	
					<table class="normal">		
						<tr>
							<td>Nombre </td><td><?=form_input($nombre,'',$js);?></td>
						</tr>
						<tr>	
							<td>Cargo </td><td><?=form_input($tipo,'',$js);?></td>
						</tr>
						<tr>
							<td>Móvil</td><td><?=form_input($movil,'',$js);?></td>
						</tr>	
						<tr>		
							<td>Extensión</td><td><?=form_input($ext,'',$js);?></td>
						</tr>		
					</table>
					<div style="float:right;padding-right:12px;top:170px;font:13px Verdana;color:white;cursor:pointer;"
					onclick="enviarForma();return false;">			
						Enviar
					</div>
				</form>
				<div id="err" style="position:absolute;width:250px;height:50px;left:320px;top:10px;font:10px Verdana;text-align:left">
						<?
						if(isset($error)){
						echo "<p>".$error."</p>";
						}
						echo form_error('nombre');
						echo form_error('cargo');
						echo form_error('movil');
						echo form_error('ext');			
						?>	
				</div>
			</div>
		</div>
	</body>
</html>