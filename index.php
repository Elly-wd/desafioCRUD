<?php
$host= "127.0.0.1";
$user = "root";
$pass = "";
$dbname="teste3";
$port= 3306;

    try {
        $con = new PDO("mysql:$host;port=$port;dbname=".$dbname, $user, $pass); 
} catch (PDOException $e) {
        echo "Erro com banco de dados: ".$e->getMessage();
}
catch (Exception $e) {
        echo "Erro generico: ".$e->getMessage();

}

function pegarDados(){
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $password= isset($_POST['password']) ? $_POST['password'] : "";

}

function guardarDados(){
    $pdo->query("INSERT INTO users(name, email, password) VALUES()");
}

$cmd= $con->prepare('SELECT * FROM users');
$cmd->execute();
$resultado= $cmd->fetchAll(PDO::FETCH_ASSOC);


foreach ($resultado as $key => $value){
        echo $key.": ".$value."<br>";
};

?>