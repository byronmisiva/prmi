<?php
require_once 'phpDataClass.php';
require_once 'configuration.php';
$database = new JConfig ();
$os = new phpDataClass( $database->host, $database->user, $database->password, $database->db);

function selectMapaes()
{
    global $os;
    $os->executeQuery("SET NAMES 'utf8'");
    if ($objDatos = $os->recordsList("SELECT * FROM mapa_form_email ORDER BY id")) {
        if (count($objDatos) > 0) {
            echo json_encode(array(
                    "success" => true,
                    "data" => $objDatos)
            );
        }
    } else {
        echo $os->lastError();
    }
}

function insertMapaes()
{
    global $os;
    $os->executeQuery("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));

    $sql = "INSERT INTO mapa_form_email(nombre, apellido, email, departamento, activo)
	values('$data->nombre','$data->apellido','$data->email','$data->departamento','$data->activo');";

    $os->executeQuery($sql);

    echo json_encode(array(
        "success" => $os->lastError() == 0,
        "msg" => $os->lastError() == 0 ? "insertado exitosamente" : $os->lastError(),
        "data" => array(
            array(
                "id" => $os->lastID(),
                "nombre" => $data->nombre,
                "apellido" => $data->apellido,
                "email" => $data->email,
                "fechaingreso" => $data->fechaingreso,
                "departamento" => $data->departamento,
                "activo" => $data->activo
            )
        )
    ));
}

function updateMapaes()
{
    global $os;
    $os->executeQuery("SET NAMES 'utf8'");
    $data = json_decode(stripslashes($_POST["data"]));
    $sql = "UPDATE mapa_form_email SET id='$data->id', nombre='$data->nombre',apellido='$data->apellido',email='$data->email',fechaingreso='$data->fechaingreso',
	departamento='$data->departamento',activo='$data->activo' WHERE mapa_form_email.id = '$data->id' ";

    $os->executeQuery($sql);
    echo json_encode(array(
        "success" => $os->lastError() == 0,
        "msg" => $os->lastError() == 0 ? "Mapa actualizado exitosamente" : $os->lastError()
    ));
}

function deleteMapaes()
{
    global $os;
    $id = json_decode(stripslashes($_POST["data"]));
    $sql = "DELETE FROM mapa_form_email WHERE id=$id";
    $os->executeQuery($sql);
    echo json_encode(array(
        "success" => $os->lastError() == 0,
        "msg" => $os->lastError() == 0 ? "Mapa actualizado exitosamente" : $os->lastError()
    ));
}

switch ($_GET['operation']) {
    case 'select' :
        selectMapaes();
        break;
    case 'insert' :
        insertMapaes();
        break;
    case 'update' :
        updateMapaes();
        break;
    case 'delete' :
        deleteMapaes();
        break;
}
