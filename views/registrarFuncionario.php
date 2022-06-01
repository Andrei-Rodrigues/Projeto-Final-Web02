<?php include_once '../model/dependencias.php'?>

<body style="background-color: #4682b4">
<h2 class="text-center">
<i>Cadastrar funcionário</i>
</h2>

<form method="post" action="../controller/insert_costumer.php">
    <div class="container">
        <div class="form-row">
            <div class="col-md-5">
                <i>Nome:</i>
                <input class="form-control" type="text" name="nome" required autofocus>
            </div>
            <div class="col-md-5">
                <i>E-Mail:</i>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div class="col-md-3">
                <i>CPF:</i>
                <input class="form-control" type="text" name="cpf" required id="cpf">
            </div>
            <div class="col-md-3">
                <i>Dt. de Nascimento:</i>
                <input class="form-control" type="date" name="dtnascimento" required>
            </div>
            <div class="col-md-4">
                <i>Telefone:</i>
                <input class="form-control" type="text" name="Telefone" required id="phone">
            </div>
            <div class="col-md-10">
                <i>Endereço:</i>
                <input class="form-control" type="text" name="Endereco" required><br>
            </div>
            <div class="col-md-10">
                <i>cep</i>
                <input class="form-control" type="text" name="cep" required><br>
            </div>
            <div class="col-md-4">
                <a href="../index.php" style="color: #000000">
                    <i>Voltar</i>
                </a>
            </div>
            <div class="col-md-6 text-right">
                <button>
                <i>Cadastrar funcionário</i>
                </button>
            </div>
        </div>
    </div>
</form>
</body>


