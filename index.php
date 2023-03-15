<?php

  include('config.php');

  if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
      echo "Preencha seu email";
    }else if(strlen($_POST['senha']) == 0){
      echo "Preencha sua senha";
    }else{
      $email = $conexao->real_escape_string($_POST['email']);
      $senha = $conexao->real_escape_string($_POST['senha']);

      $sql_code = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
      $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

      $quantidade = $sql_query->num_rows;
      
      if($quantidade == 1){

        $usuario = $sql_query->fetch_assoc();

        if(password_verify($senha,$senhaCripto)){
          echo "sucesso!";
        }else{
          echo "Falha!";
        }

        if(!isset($_SESSION)){
          session_start();
        }

        $_SESSION['user'] = $usuario['ID'];
        $_SESSION['nome'] = $usuario['nome'];

        header("location: site.php");

      }else{
        echo "Falha ao logar! E-mail ou senha incorretos";
      }

    }
  }

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>
<body>

  <form action="" method="POST">

    <div class="main-login">
      <div class="left-login">
        <h1>Faça login<br> E entre para o nosso time</h1>
        <img src="astronauta.svg" alt="Astronauta animação" class="left-login-image">
      </div><!--left-login-->

      <div class="right-login">
        <div class="card-login">
          <h1>LOGIN</h1>
          <div class="textfield">
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="E-mail" required>
          </div><!--textfield-->

          <div class="textfield">
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Senha" required>
          </div><!--textfield-->
          <a href="criaConta.php" style="color: #f0ffffde;">
            <p>Criar Conta</p>
          </a>
          <button class="btn-login" type="submit">Login</button>
        </div><!--card-login-->

      </div><!--right-login-->

    </div><!--main-login-->

  </form><!--form-->

</body>
</html>