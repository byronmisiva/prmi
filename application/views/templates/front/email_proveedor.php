<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	</head>	
	<body style="background-color:#ffffff;width:600px;">
		<div style="position:absolute;left:0px;top:0px;width:726px;height:410px;" >
			<div>
			 	<!-- <img src="<?=base_url().'iamgenes/public/header-mail.jpg'?>" /> -->
			</div>
			<div style="margin-top:20px;color:#000000;">
				<table cellpadding="5" cellspacing="5"  style="font-family:Arial; font-size:15px;text-align:left;">
					<?php if($informacion['nombre']!=""){?>
					<tr>
						<td style="font-weight:bold;">Nombres :</td>
						<td><?=$informacion['nombre']?></td>
					</tr>
					<?php }
					if($informacion['telefono']!=""){					?>								
					<tr>
						<td style="font-weight:bold;">Tel&eacute;fono:</td>
						<td><?=$informacion['telefono']?></td>						
					</tr>
					<?php }	if($informacion['ciudad']!=""){?>
					<tr>
						<td style="font-weight:bold;">Ciudad:</td>
						<td><?=$informacion['ciudad']?></td>						
					</tr>
					<?php }	if($informacion['sector']!=""){?>
					<tr>
						<td style="font-weight:bold;">Sector de la Ciudad:</td>
						<td><?=$informacion['sector']?></td>						
					</tr>
					<?php } if($informacion['email']!=""){?>
					<tr>
						<td style="font-weight:bold;">E-mail:</td>
						<td><?=$informacion['email']?></td>
					</tr>
					<?php }	if($informacion['mensaje']!=""){?>
					<tr>
						<td style="font-weight:bold;" valign="top">Mensaje:</td>
						<td><?=$informacion['mensaje']?></td>						
					</tr>
					<?php }?>
				</table>
			</div>
						
		</div>
	</body>
</html>	