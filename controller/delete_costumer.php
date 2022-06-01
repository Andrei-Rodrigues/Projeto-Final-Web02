<?php
include_once '../model/conexao.php';
include_once '../model/gerenciador.php';

$manager = new Gerenciador();

$id = $_POST['id'];

if(isset($id) && !empty($id)){
    $manager->deleteEmployee("clientes", $id);

    header("Location: ../index.php?costumer_deleted");
}