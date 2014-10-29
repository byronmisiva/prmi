<?php
require_once '../../../../server/os.php';

$os = new os();
if (!$os->session_exists()) {
    die('No existe sesión!');
}

function selectOfertalaboral()
{
    global $os;

    $os->db->conn->query("SET NAMES 'utf8'");
    $sql = "SELECT * FROM oferta_labotal ORDER BY id";
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

function insertOfertalaboral()
{
    global $os;
    $os->db->conn->query("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));

    $sql = "INSERT INTO oferta_labotal(cargo,area,tipo_puesto,vacantes,ciudad,salario, descripcion,sexo,activo)
	values('$data->cargo', '$data->area', '$data->tipo_puesto', '$data->vacantes', '$data->ciudad', '$data->salario',  '$data->descripcion', '$data->sexo', '$data->activo' );";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "insertado exitosamente" : $sql->errorCode(),
        "data" => array(
            array(
                "id" => $os->db->conn->lastInsertId(),
                "cargo" => $data->cargo,
                "area" => $data->area,
                "tipo_puesto" => $data->tipo_puesto,
                "vacantes" => $data->vacantes,
                "ciudad" => $data->ciudad,
                "salario" => $data->salario,
                "creado" => $data->creado,
                "descripcion" => $data->descripcion,
                "sexo" => $data->sexo,
                "activo" => $data->activo
            )
        )
    ));
}

function updateOfertalaboral()
{
    global $os;
    $os->db->conn->query("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));
    $sql = "UPDATE oferta_labotal SET
        id='$data->id',
        cargo='$data->cargo',
        area='$data->area',
        tipo_puesto='$data->tipo_puesto',
        vacantes='$data->vacantes',
        ciudad='$data->ciudad',
        salario='$data->salario',
        creado='$data->creado',
        descripcion='$data->descripcion',
        sexo='$data->sexo',
        activo='$data->activo'
	  WHERE oferta_labotal.id = '$data->id' ";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "Ubicación en mapa actualizado exitosamente" : $sql->errorCode()
    ));
}

function deleteOfertalaboral()
{
    global $os;
    $id = json_decode(stripslashes($_POST["data"]));
    $sql = "DELETE FROM oferta_labotal WHERE id=$id";
    $sql = $os->db->conn->prepare($sql);
    $sql->execute();
    echo json_encode(array(
        "success" => $sql->errorCode() == 0,
        "msg" => $sql->errorCode() == 0 ? "Ubicación en mapa, eliminado exitosamente" : $sql->errorCode()
    ));
}

switch ($_GET['operation']) {
    case 'select' :
        selectOfertalaboral();
        break;
    case 'insert' :
        insertOfertalaboral();
        break;
    case 'update' :
        updateOfertalaboral();
        break;
    case 'delete' :
        deleteOfertalaboral();
        break;
}
