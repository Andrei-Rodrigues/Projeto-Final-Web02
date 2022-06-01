<?php
include_once '../model/dependencias.php';
include_once '../model/conexao.php';
include_once '../model/gerenciador.php';

$m = new Gerenciador();

$id = $_POST['id'];
?>

<body style="background-color: #4682b4">
<h2 class="text-center">
<i>Alterar informação</i>
</h2>

<form method="post" action="../controller/update_costumer.php">
    <div class="container">
        <div class="form-row">

            <?php foreach ($m->getInfo('clientes', $id) as $c):?>
            <div class="col-md-5">
                <i>Nome:</i>
                <input class="form-control" type="text" name="nome" required autofocus value="<?= $c['nome']?>">
            </div>
            <div class="col-md-5">
                <i>E-Mail:</i>
                <input class="form-control" type="email" name="email" required value="<?= $c['email']?>">
            </div>
            <div class="col-md-3">
                <i>CPF:</i>
                <input class="form-control" type="text" name="cpf" required id="cpf" value="<?= $c['cpf']?>">
            </div>
            <div class="col-md-3">
                <i>Data de Nascimento:</i>
                <input class="form-control" type="date" name="dtnascimento" required value="<?= $c['dtnascimento']?>">
            </div>
            <div class="col-md-4">
                <i>Telefone:</i>
                <input class="form-control" type="text" name="Telefone" required id="phone" value="<?= $c['Telefone']?>">
            </div>
            <div class="col-md-10">
                <i>Endereço:</i>
                <input class="form-control" type="text" name="Endereco" required value="<?= $c['Endereco']?>"><br>
            </div>
            <input type="hidden" name="id" value="<?= $c['id']?>">
            <?php endforeach;?>
            <div class="col-md-4">
                <a href="../index.php" style="color: #000000">
                    <i>Voltar</i>
                </a>
            </div>
            <div class="col-md-6 text-right">
                <button>
                    <i>Alterar</i>
                </button>
            </div>
        </div>
    </div>
</form>
</body>
