<?php
require_once '../../../../server/os.php';

$os = new os();
if (!$os->session_exists()) {
    die('No existe sesión!');
}

function selectImageadmin()
{
    global $os;

    $os->db->conn->query("SET NAMES 'utf8'");
    $sql = "SELECT * FROM default_tienda ORDER BY id";
    $result = $os->db->conn->query($sql);
    $data = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }
    echo json_encode(array(
            "success" => true,
            "data" => $data)
    );
}

function insertImageadmin()
{
    global $os;
    $result = $os->db->conn->query("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));

    $ip = $_SERVER['REMOTE_ADDR'];

    $sql = "INSERT INTO default_tienda(nombre,  home,  tipo,  foto_grande,  foto_pequena,  descripcion, views, clicks, precio, fecha_inicio,  fecha_fin, uri, meta_title, meta_keywords,  activo)
	values( '$data->nombre', '$data->home', '$data->tipo', '$data->foto_grande', '$data->foto_pequena', '$data->descripcion', '$data->views', '$data->clicks', '$data->precio', '$data->fecha_inicio', '$data->fecha_fin', '$data->uri', '$data->meta_title', '$data->meta_keywords', '$data->activo', '$data->creado');";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "insertado exitosamente" : $sql->errorCode(),
        "data" => array(
            array(
                "id" => $os->db->conn->lastInsertId(),
                "nombre" => $data->nombre,
                "home" => $data->home,
                "tipo" => $data->tipo,
                "foto_grande" => $data->foto_grande,
                "foto_pequena" => $data->foto_pequena,
                "descripcion" => $data->descripcion,
                "views" => $data->views,
                "clicks" => $data->clicks,
                "precio" => $data->precio,
                "fecha_inicio" => $data->fecha_inicio,
                "fecha_fin" => $data->fecha_fin,
                "uri" => $data->uri,
                "meta_title" => $data->meta_title,
                "meta_keywords" => $data->meta_keywords,
                "activo" => $data->activo
            )
        )
    ));
}

function updateImageadmin()
{
    global $os;
    $os->db->conn->query("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));

    if ($data->fecha_fin == "") {
        $fecha = "NULL";
    } else {
        $fecha = "'" . $data->fecha_fin ."'";
    }

    $sql = "UPDATE default_tienda SET nombre='$data->nombre',
         home='$data->home',
         tipo='$data->tipo',
         foto_grande='$data->foto_grande',
         foto_pequena='$data->foto_pequena',
         descripcion='$data->descripcion',
         views='$data->views',
         clicks='$data->clicks',
         precio='$data->precio',
         fecha_inicio='$data->fecha_inicio',
         fecha_fin=$fecha,
         uri='$data->uri',
         meta_title='$data->meta_title',
         meta_keywords='$data->meta_keywords',
        activo='$data->activo'
        WHERE id = '$data->id' ";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "Tienda actualizado exitosamente" : $sql->errorCode()
    ));
}

function deleteImageadmin()
{
    global $os;
    $id = json_decode(stripslashes($_POST["data"]));

    $sql = "SELECT COUNT(*) AS total FROM default_tienda WHERE foto_grande = '$id' OR foto_pequena= '$id';   ";
    $result = $os->db->conn->query($sql);

    $row = $result->fetch(PDO::FETCH_ASSOC);

    $data = $row['total'];
    if ($data >= 1) {
        echo json_encode(array(
            "success" => false,
            "msg" => "Imagen utilizada en promocion"
        ));
    } else {
        $id = "../../../../../../" .  $id;
        unlink(  $id);
        echo json_encode(array(
            "success" => true,
            "msg" => "Imagen borrada con éxito"
        ));
    };


    echo json_encode(array(
        "success" => false,
        "msg" => $data
    ));
}

function itemsImageadmin($path, $url)
{
    $tipos = array("gif", "jpg", "png");
    listar_ficheros($tipos, $path, $url);
}

function listar_ficheros($tipos, $carpeta, $url)
{
    //Comprobamos que la carpeta existe
    if (is_dir($carpeta)) {
        //Escaneamos la carpeta usando scandir
        $scanarray = scandir($carpeta);

        for ($i = 0; $i < count($scanarray); $i++) {
            //Eliminamos  "." and ".." del listado de ficheros
            if ($scanarray[$i] != "." && $scanarray[$i] != "..") {
                //No mostramos los subdirectorios
                if (is_file($carpeta . "/" . $scanarray[$i])) {
                    //Verificamos que la extension se encuentre en $tipos
                    $thepath = pathinfo($carpeta . "/" . $scanarray[$i]);
                    if (in_array($thepath['extension'], $tipos)) {
                        $data[] = array("id" => $url. $scanarray[$i], "nombre" => $scanarray[$i]);
                    }
                }
            }
        }
        echo json_encode(array(
                "success" => true,
                "data" => $data)
        );
    } else {
        echo "La carpeta no existe";
    }
}


switch ($_GET['operation']) {
    case 'select' :
        selectImageadmin();
        break;

    case 'delete' :
        deleteImageadmin();
        break;
    case 'itemsImageadmin' :
        itemsImageadmin($_GET['path'], $_GET['urlver']);
        break;
}