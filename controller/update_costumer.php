<?php
include_once '../model/conexao.php';
include_once '../model/gerenciador.php';

$manager = new Gerenciador();

$update = $_POST;
$id = $_POST['id'];

if(isset($id) && !empty($id)){
    $manager->updateEmployee("clientes", $update, $id);

    header("Location: ../index.php?costumer_updated");
}