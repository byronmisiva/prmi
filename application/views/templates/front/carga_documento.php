<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<style>
.subir-imagen{
	width:136px;
	height:23px;
	background-image: url('<?=base_url()?>imagenes/contactanos/Contactanos-hoja-devida-boton-subirhoja.png?frefresh=13213321');
	background-repeat:no-repeat;
	background-size:100%;		
	border:none;
	absolute:position;
	cursor:pointer;		
}
.cargaImagen{
	position:absolute;
	width:136px;
	height:23px;
	z-index:2;
	top:0;
	left:0;	
	filter: alpha(opacity=0);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	opacity:0;
	background-color:transparent;color:transparent;	
}

#archivo{
	width:136px;
	height:23px;
	background-image: url('<?=base_url()?>imagenes/contactanos/Contactanos-hoja-devida-boton-subirhoja.png?frefresh=13213321');
	background-repeat:no-repeat;
	background-size:100%; 	
	cursor:pointer;		
}

@media ( max-width: 360px) {
	#archivo{
	width:136px;
	}
}

</style>

<div id="archivo" >
	<form action="<?=base_url()?>index.php/welcome/check" name="subir" method="post" enctype="multipart/form-data">
	<a class="subir-imagen"  href="javascript:;">
		<input type="file" class="cargaImagen" name="archivos" id="archivos" onChange="document.subir.submit();$('#archivos').html('');" />
	</a>
	<br/>
		<!-- <span style="font-family:Arial; font-size:12px; color:red;">
				<?=$mensaje?>
		</span> -->
	</form>
</div>


<?php 
	echo $script;
?>
