<div class="resultadosDepartamentos">
	<div class="contenedorTabla">
	<div style="margin-top:0;width: 100%;">
		<table width="100%" cellspacing=0 cellpadding=0 id="registro-Ofertas" style="background-image: url(<?=base_url()?>imagenes/contactanos/Contactanos-trabajaconnosotros-barra-roja.png);background-repeat: no-repeat; background-position:left top;margin-top: 10px;" >
			<tr >
				<th width="25%" >Fecha</th>	<th width="25%" >Lugar</th>	<th width="25%" >Cargo/Posición</th> <th width="25%" >Detalle</th>
			</tr>
		</table>
		</div>
		<div style="margin-top:0;width: 100%;height:130px;overflow:auto;">
		<table width="100%" cellspacing="0" style="border-spacing: 0px 5px; border-collapse: separate">			
		<?php
			foreach ($registros as $row){?>
				<tr class="filaContenido" style="background-image: url(<?=base_url()?>imagenes/contactanos/Contactanos-trabajaconnosotros-barra-oscura.png);background-repeat: no-repeat; background-position: left top;margin-top: 0px;background-size:100% 100%;">
					<td width="25%"><?=$row->creado?></td>			
					<td width="25%"><?=$row->ciudad?></td>
					<td width="25%"><?=$cargos[$row->cargo]?></td>
					<td width="25%" style="cursor:pointer;" >
					<a href="#detalleOferta" role="button" data-toggle="modal" onclick="verInformacion(<?=$row->id?>,'detalleOferta');" >					
						Ver detalle
					</a>
					</td>					
				</tr>				
			<?php }?>
		</table>
		</div> 
	</div>
	<div class="lineacolumnas"></div>
	<div class="lineacolumnas2"></div>
	<div class="lineacolumnas3"></div>
</div>