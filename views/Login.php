<?php
include_once'../index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
       /*$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

       if(!empty($dados['CadUsuário'])){
           var_dump($dados);
           "INSERT INTO users (email, password) VALUES ('". $dados['nome']"
       }
    */
    ?>
    <form method="POST" action="">
        <label>Email:</label>
        <input type="email" name="email" placeholder="E-mail de cadastro"><br><br>

        <label>Senha:</label>
        <input type="text" name="senha" placeholder="Senha de cadastro"><br><br>

        
        <a href="UserPage.php">ENTRAR NO SISTEMA</a><br><br>
        <a href="CadPage.php">CADASTRAR USUÁRIO</a>


    </form>
</body>
</html>