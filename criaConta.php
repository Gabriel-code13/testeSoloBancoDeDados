<?php

  if(isset($_POST['submit']))
  {
    //print_r($_POST['nome']);
    //print_r($_POST['email']);
    //print_r($_POST['sexo']);
    //print_r($_POST['telefone']);
    //print_r($_POST['data']);
    //print_r($_POST['cidade']);
    //print_r($_POST['estado']);
    //print_r($_POST['endereco']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,sexo,telefone,data_nascimento,endereco) VALUES ('$nome','$email','$senha','$sexo','$telefone','$data','$endereco')");

  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="criaConta.css">
  <title>Cria conta</title>
</head>
<body>

  <form action="criaConta.php" method="POST">

    <div class="main-login">
      <div class="left-login">
        <h1>Crie sua conta<br> E entre para o nosso time</h1>
        <img src="criaContaAnimation.svg" alt="pintura animação" class="left-login-image">
      </div><!--left-login-->

      <div class="right-login">
        <div class="card-login">
          <h1>Criar Conta</h1>
          <div class="textfield">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Nome" required>
          </div><!--textfield-->

          <div class="textfield">
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Email" required>
          </div><!--textfield-->

          <div class="textfield">
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Senha" required>
          </div><!--textfield-->

          <div class="textfield">
            <label for="sexo">sexo</label>
            <input type="text" name="sexo" placeholder="Sexo" required>
          </div><!--textfield-->

          <div class="textfield">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" placeholder="Ex.: (xx)12345-6789" required>
          </div><!--textfield-->

          <div class="textfield">
            <label for="data">Data de nascimento</label>
            <input type="date" name="data" placeholder="Ex.: xx/xx/xxxx" required>
          </div><!--textfield-->

          <div class="textfield">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" placeholder="Endereço" required>
          </div><!--textfield-->
          <a href="index.php" style="color: #f0ffffde;">
            <p>Fazer login</p>
          </a>
          <button class="btn-login" type="submit" name="submit">Cadastre-se</button>
        </div><!--card-login-->

      </div><!--right-login-->

    </div><!--main-login-->

  </form><!--form-->

</body>
</html>