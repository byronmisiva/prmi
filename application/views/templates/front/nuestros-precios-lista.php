<div class="resultadosDepartamentos">
	<div class="contenedorTabla">
	<div style="margin-top:0;width: 100%;">
		<table width="100%" cellspacing=0 cellpadding=0 id="registro-Ofertas" style="background-image: url(<?=base_url()?>imagenes/contactanos/Contactanos-trabajaconnosotros-barra-roja.png);background-repeat: no-repeat; background-position:left top;margin-top: 10px;" >
			<tr >
				<th width="50%">Producto</th>	<th width="25%" >Código</th>	<th width="25%" >Precio</th> 
			</tr>
		</table>
		</div>
		<div style="margin-top:0;width: 100%;height:130px;overflow:auto;">
		<table width="100%" cellspacing="0" style="border-spacing: 0px 5px; border-collapse: separate" class="tabla-lista-precios">			
		<?php
			foreach ($registros as $row){?>
				<tr class="filaContenido" style="background-image: url(<?=base_url()?>imagenes/contactanos/Contactanos-trabajaconnosotros-barra-oscura.png);background-repeat: no-repeat; background-position: left top;margin-top: 0px;background-size:100% 100%;">
					<td width="50%" ><?=$row->nombre?></td>			
					<td width="25%" ><?=$row->codigo?></td>
					<td width="25%" ><?=$row->precio?></td>
				</tr>				
			<?php }?>
		</table>
		</div> 
	</div>
	<div class="lineacolumnas-precios"></div>
	<div class="lineacolumnas2-precios"></div>
</div>