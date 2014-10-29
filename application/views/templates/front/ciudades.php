<?php foreach( $ciudades  as $key => $ciudad ){?>
	<li><a id="ciudad_<?php echo $key; ?>" tabindex="-1" href="#"><?php echo $ciudad->ciudad?></a></li>
<?php }?>