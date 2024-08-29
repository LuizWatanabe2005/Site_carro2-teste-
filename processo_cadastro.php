<?php


$servername='localhost';

$username="root";

$password="";

$db_name="dados_usuarios";

$conn= new mysqli($servername, $username, $password, $db_name);


if ($conn->connect_error) {
    
    die("Falha na conexão! " . $conn->connect_error);
}


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);



$sql = "INSERT INTO dados_usuarios (nome, email, senha) 
VALUES('$nome', '$email', '$senha')";


if ($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso!";
} else{
   
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>