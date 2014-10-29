
<div class="aplicar" data-dismiss="modal" aria-hidden="true" onclick="aplicarOferta(<?=$registro->cargo?>,<?=$registro->area?>);"></div>
<div class="titulo-oferta">
	DESCRIPCIÓN DE LA OFERTA LABORAL					
</div>
<div data-dismiss="modal" aria-hidden="true" class="equis2"></div>
<?php 
$sexo=array("F"=>"Femenino","M"=>"Masculino","I"=>"Indistinto");
?>
<div class="cuerpo-oferta">
	<table id="ofertaDetallada">
		<tr>
			<td class="bold">Cargo</td><td> <?=$cargos[$registro->cargo]?></td>
		</tr>
		<tr>
			<td class="bold">Área</td><td><?=$campos[$registro->area]?></td>
		</tr>
		<tr>
			<td class="bold">Tipo de Puesto</td><td><?=$registro->tipo_puesto?></td>
		</tr>
		<tr>
			<td class="bold">Vacantes</td><td><?=$registro->vacantes?></td>
		</tr>
		<tr>
			<td class="bold">Sexo</td><td><?=$sexo[$registro->sexo]?></td>
		</tr>
		<tr>
			<td class="bold">Salario</td><td><?=$registro->salario?></td>
		</tr>
		
		<tr>
			<td class="bold">Fecha de Publicación</td><td><?=strftime("%d/%m/%Y",strtotime($registro->creado))?></td>
		</tr>
		<tr>
			<td class="bold">Descripción</td><td><?=$registro->descripcion?></td>
		</tr>
		
	</table>
	
	
						
</div>