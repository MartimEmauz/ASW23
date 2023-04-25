<?php
include("db_data_functions.php");

$fields = [];
$values = [];
if (isset($_POST['email1']) && !empty($_POST['email1'])) {
    array_push($fields, 'email');
    array_push($values, $_POST['email1']);
}
if (isset($_POST['nome1']) && !empty($_POST['nome1'])) {
    array_push($fields, 'nome');
    array_push($values, $_POST['nome1']);
}
if (isset($_POST['morada11']) && !empty($_POST['morada11'])) {
    array_push($fields, 'morada');
    array_push($values, $_POST['morada1']);
}
if (isset($_POST['localidade1']) && !empty($_POST['localidade1'])) {
    array_push($fields, 'localidade');
    array_push($values, $_POST['localidade1']);
}
if (isset($_POST['codigo_postal1digo_postal1']) && !empty($_POST['codigo_postal1'])) {
    array_push($fields, 'codigo_postal');
    array_push($values, $_POST['codigo_postal1']);
}
if (isset($_POST['genero1']) && !empty($_POST['genero1'])) {
    array_push($fields, 'genero');
    array_push($values, $_POST['genero1']);
}
if (isset($_POST['data_nascimento1']) && !empty($_POST['data_nascimento1'])) {
    array_push($fields, 'data_nascimento');
    array_push($values, $_POST['data_nascimento1']);
}
$result = search_fields($fields, $values);

?>