<?php
require_once '../../../../server/os.php';

$os = new os();
if (!$os->session_exists()) {
    die('No existe sesión!');
}

function selectHistoria()
{
    global $os;

    $os->db->conn->query("SET NAMES 'utf8'");
    $sql = "SELECT * FROM historia ORDER BY orden";
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

function insertHistoria()
{
    global $os;
    $result = $os->db->conn->query("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));

    $ip = $_SERVER['REMOTE_ADDR'];

    $sql = "INSERT INTO historia(nombre,  titulo,  imagen,  orden,  activo)
	values( '$data->nombre', '$data->titulo', '$data->imagen', '$data->orden', '$data->activo');";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "insertado exitosamente" : $sql->errorCode(),
        "data" => array(
            array(
                "id" => $os->db->conn->lastInsertId(),
                "nombre" => $data->nombre,
                "titulo" => $data->titulo,
                "imagen" => $data->imagen,
                "orden" => $data->orden,
                "activo" => $data->activo
            )
        )
    ));
}

function updateHistoria()
{
    global $os;
    $os->db->conn->query("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));

  

    $sql = "UPDATE historia SET nombre='$data->nombre',
         titulo='$data->titulo',
         imagen='$data->imagen',
         activo='$data->activo',
         orden='$data->orden' 
        WHERE id = '$data->id' ";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "Historia actualizado exitosamente" : $sql->errorCode()
    ));
}

function deleteHistoria()
{
    global $os;
    $id = json_decode(stripslashes($_POST["data"]));
    $sql = "DELETE FROM historia WHERE id=$id";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "Historia eliminado exitosamente" : $sql->errorCode()
    ));
}

function itemsHistoria($path, $url)
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
        selectHistoria();
        break;
    case 'insert' :
        insertHistoria();
        break;
    case 'update' :
        updateHistoria();
        break;
    case 'delete' :
        deleteHistoria();
        break;
    case 'itemsHistoria' :
        itemsHistoria($_GET['path'], $_GET['urlver']);
        break;
}