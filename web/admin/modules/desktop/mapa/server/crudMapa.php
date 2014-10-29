<?php
require_once '../../../../server/os.php';

$os = new os();
if (!$os->session_exists()) {
    die('No existe sesión!');
}

function selectMapa()
{
    global $os;

    $os->db->conn->query("SET NAMES 'utf8'");
    $sql = "SELECT * FROM default_mapa ORDER BY id";
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

function insertMapa()
{
    global $os;
    $result = $os->db->conn->query("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));

    $ip = $_SERVER['REMOTE_ADDR'];






    $sql = "INSERT INTO default_mapa(nombre , provincia , ciudad , direccion , tipo , activo , url , coordenadas , latitud , longitud)
	values('$data->nombre', '$data->provincia', '$data->ciudad', '$data->direccion', '$data->tipo', '$data->activo', '$data->url', '$data->coordenadas', '$data->latitud', '$data->longitud');";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "insertado exitosamente" : $sql->errorCode(),
        "data" => array(
            array(
                "id" => $os->db->conn->lastInsertId(),
                "nombre"=>$data->nombre,
                "provincia"=>$data->provincia,
                "ciudad" =>$data->ciudad,
                "direccion" =>$data->direccion,
                "tipo" =>$data->tipo,
                "activo" =>$data->activo,
                "url" =>$data->url,
                "coordenadas"=>$data->coordenadas,
                "latitud" =>$data->latitud,
                "longitud" =>$data->longitud
            )
        )
    ));
}

function updateMapa()
{
    global $os;
    $result = $os->db->conn->query("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));


    $sql = "UPDATE default_mapa SET
      id='$data->id',
         nombre='$data->nombre',
     provincia='$data->provincia',
     ciudad ='$data->ciudad',
    direccion ='$data->direccion',
    tipo ='$data->tipo',
    activo ='$data->activo',
    url ='$data->url',
    coordenadas='$data->coordenadas',
    latitud ='$data->latitud',
    longitud ='$data->longitud'
	  WHERE default_mapa.id = '$data->id' ";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "Ubicación en mapa actualizado exitosamente" : $sql->errorCode()
    ));
}

function deleteMapa()
{
    global $os;
    $id = json_decode(stripslashes($_POST["data"]));
    $sql = "DELETE FROM default_mapa WHERE id=$id";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "Ubicación en mapa, eliminado exitosamente" : $sql->errorCode()
    ));
}

switch ($_GET['operation']) {
    case 'select' :
        selectMapa();
        break;
    case 'insert' :
        insertMapa();
        break;
    case 'update' :
        updateMapa();
        break;
    case 'delete' :
        deleteMapa();
        break;
}
