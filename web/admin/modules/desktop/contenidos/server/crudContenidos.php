<?php
require_once '../../../../server/os.php';

$os = new os();
if (!$os->session_exists()) {
    die('No existe sesión!');
}

function selectContenidos()
{
    global $os;

    $os->db->conn->query("SET NAMES 'utf8'");
    $sql = "SELECT * FROM contenidos ORDER BY id";
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

function insertContenidos()
{
    global $os;
    $os->db->conn->query("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));


    $sql = "INSERT INTO contenidos(nombre , provincia , ciudad , direccion , tipo , activo , url , coordenadas , latitud , longitud)
	values('$data->nombre', '$data->provincia', '$data->ciudad', '$data->direccion', '$data->tipo', '$data->activo', '$data->url', '$data->coordenadas', '$data->latitud', '$data->longitud');";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "insertado exitosamente" : $sql->errorCode(),
        "data" => array(
            array(
                "id" => $os->db->conn->lastInsertId(),
                "nombre" => $data->nombre,
                "provincia" => $data->provincia,
                "ciudad" => $data->ciudad,
                "direccion" => $data->direccion,
                "tipo" => $data->tipo,
                "activo" => $data->activo,
                "url" => $data->url,
                "coordenadas" => $data->coordenadas,
                "latitud" => $data->latitud,
                "longitud" => $data->longitud
            )
        )
    ));
}

function updateContenidos()
{
    global $os;
    $os->db->conn->query("SET NAMES 'utf8'");
    $pruebas = json_decode($_POST["data"]);
    $data = json_decode($_POST["data"]);


    if (is_null($data))
     $data = json_decode(stripslashes($_POST["data"]));

    $data->contenido = addslashes($data->contenido);

    $sql = "UPDATE contenidos SET
      id='$data->id',
         nombre='$data->nombre',
         titulo='$data->titulo',
         contenido='$data->contenido',
         imagen='$data->imagen',
         seccion='$data->seccion'

	  WHERE contenidos.id = '$data->id' ";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "Ubicación en contenidos actualizado exitosamente" : $sql->errorCode()
    ));
}


function selectContenidosForm()
{


    global $os;
    $id = (int)$_POST ['id'];
    $os->db->conn->query("SET NAMES 'utf8'");
    $sql = "SELECT * FROM contenidos WHERE id = $id";
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

function updateContenidosForm()
{
    global $os;
    $os->db->conn->query("SET NAMES 'utf8'");

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $contenido = $_POST["contenido"];

    $sql = "UPDATE contenidos SET nombre='$nombre',
          contenido='$contenido'
          WHERE id = '$id' ";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "Contenido actualizado exitosamente" : $sql->errorCode()
    ));
}

function deleteContenidos()
{
    global $os;
    $id = json_decode(stripslashes($_POST["data"]));
    $sql = " ";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "Ubicación en contenidos, eliminado exitosamente" : $sql->errorCode()
    ));
}

switch ($_GET['operation']) {
    case 'select' :
        selectContenidos();
        break;
    case 'insert' :
        insertContenidos();
        break;
    case 'update' :
        updateContenidos();
        break;
    case 'selectForm' :
        selectContenidosForm();
        break;
    case 'updateForm' :
        updateContenidosForm();
        break;
    case 'delete' :
        deleteContenidos();
        break;
}
