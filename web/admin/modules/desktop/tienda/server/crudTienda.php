<?php
require_once '../../../../server/os.php';

$os = new os();
if (!$os->session_exists()) {
    die('No existe sesión!');
}

function selectTienda()
{
    global $os;

    $os->db->conn->query("SET NAMES 'utf8'");
    $sql = "SELECT * FROM default_tienda ORDER BY id DESC";
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

function insertTienda()
{
    global $os;
    $result = $os->db->conn->query("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));


    if ($data->fecha_fin == "") {
        $fecha = "NULL";
    } else {
        $fecha = "'" . $data->fecha_fin . "'";
    }

    $sql = "INSERT INTO default_tienda(nombre,  home,  tipo,  foto_grande,  foto_pequena,  descripcion, views, clicks, precio, fecha_inicio,  fecha_fin, uri, meta_title, meta_keywords,  activo, orden)
  	values( '$data->nombre', '$data->home', '$data->tipo', '$data->foto_grande', '$data->foto_pequena', '$data->descripcion', '$data->views', '$data->clicks', '$data->precio', '$data->fecha_inicio', $fecha, '$data->uri', '$data->meta_title', '$data->meta_keywords', '$data->activo', '$data->orden');";
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
                "fecha_fin" => $fecha,
                "uri" => $data->uri,
                "orden" => $data->orden,
                "meta_title" => $data->meta_title,
                "meta_keywords" => $data->meta_keywords,
                "activo" => $data->activo
            )
        )
    ));
}

function updateTienda()
{
    global $os;
    $os->db->conn->query("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));

    $fecha = "NULL";
    if (isset($data->fecha_fin)) {
        if ($data->fecha_fin == "") 
        {
            $fecha = "NULL";
        } else {
            $fecha = "'" . $data->fecha_fin . "'";
        }
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
         orden= '$data->orden',
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

function updateTiendaForm()
{
    global $os;
    $os->db->conn->query("SET NAMES 'utf8'");

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];

    $sql = "UPDATE default_tienda SET nombre='$nombre',
          descripcion='$descripcion'
          WHERE id = '$id' ";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "Tienda actualizado exitosamente" : $sql->errorCode()
    ));
}

function deleteTienda()
{
    global $os;
    $id = json_decode(stripslashes($_POST["data"]));
    $sql = "DELETE FROM default_tienda WHERE id=$id";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "Tienda eliminado exitosamente" : $sql->errorCode()
    ));
}

function itemsTienda($path, $url)
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
                        $data[] = array("id" => $url . $scanarray[$i], "nombre" => $scanarray[$i]);
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

function selectTiendaForm()
{


    global $os;
    $id = (int)$_POST ['id'];
    $os->db->conn->query("SET NAMES 'utf8'");
    $sql = "SELECT * FROM default_tienda WHERE id = $id";
    $result = $os->db->conn->query($sql);
    $data = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $data = $row;
    }
    echo json_encode(array(
            "success" => true,
            "data" => $data)
    );
}

switch ($_GET['operation']) {
    case 'select' :
        selectTienda();
        break;
    case 'insert' :
        insertTienda();
        break;
    case 'update' :
        updateTienda();
        break;
    case 'updateForm' :
        updateTiendaForm();
        break;
    case 'delete' :
        deleteTienda();
        break;
    case 'selectForm' :
        selectTiendaForm();
        break;
    case 'itemsTienda' :
        itemsTienda($_GET['path'], $_GET['urlver']);
        break;
}