<?php
if(isset($_FILES)){
    $temp_file_name = $_FILES['photo-path']['tmp_name'];
    $original_file_name = $_FILES['photo-path']['name'];
    // $uploaddir = '/usr/local/zend/apache2/htdocs/primax2/imagenes/tiendaslisto/promociones-14-01/';
    // $uploaddir = '/var/www/vhosts/misiva.com.ec/subdominios/primax/imagenes/tiendaslisto/promociones-14-01/';
    $uploaddir = "c:/inetpub/wwwroot/imagenes/tiendaslisto/promociones-14-01/";
    $uploadfile = $uploaddir . basename($_FILES['photo-path']['name']);
    if (move_uploaded_file($temp_file_name, $uploadfile)) {
        echo '{success:true, file:'.json_encode($_FILES['photo-path']['name']).'}';
    } else {
        echo '{success:false, file:'.json_encode($_FILES['photo-path']['name']).'}';
    }
}


 