<?php
include_once '../model/conexao.php';
include_once '../model/gerenciador.php';

$manager = new Gerenciador();

$data = $_POST;

if(isset($data) && !empty($data)){
    $manager->insertEmployee("clientes", $data);

    header("Location: ../index.php?costumer_add_success");
}
