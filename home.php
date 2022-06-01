<?php
include_once 'model/Conexao.php';
include_once 'model/gerenciador.php';
include_once 'model/formataData.php';
include_once 'model/dependencias.php';

$manager = new Gerenciador();

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    
</head>
<body style="background-color: #4682b4">
<div class="container">

    <h2 class="text-center">
    <i>Lista de funcionárioss</i>
    </h2>

    <h5 class="text-left">
        <a href="views/registrarFuncionario.php">
            <i style="color: #000000">Registrar funcionário</i>
        </a>
    </h5>

    <div class="table-responsive">
        <table class="table table-hover" style="background-color: #ffffff">
            <thead class="p-3 mb-2 bg-secondary text-white">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data Nascimento</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>cep</th>
                    <th colspan="3">Alterar/Deletar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($manager->listEmployee('clientes') as $c):?>
                    <td><?= $c['nome']; ?></td>
                    <td><?= $c['email']; ?></td>
                    <td><?= formatDate($c['dtnascimento']); ?></td>
                    <td><?= $c['cpf']; ?></td>
                    <td><?= $c['Telefone']; ?></td>
                    <td><?= $c['Endereco']; ?></td>
                    <td><?= $c['cep']; ?></td>
                    <td>
                        <form method="POST" action="views/atualizarFuncionario.php">
                            <input type="hidden" name="id" value="<?= $c['id']?>">
                            <button>
                                <i class="fa fa-user-edit"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="controller/delete_costumer.php" onclick="return confirm('Você realmente deseja deletar esse cadastro?')">
                            <input type="hidden" name="id" value="<?= $c['id']?>">
                            <button>
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
    <a href="logout.php" class="btn" style="margin-left: 10px; width: 100px; margin-top: 20px; background-color: #000000">Sair</a>
</body>
</html>