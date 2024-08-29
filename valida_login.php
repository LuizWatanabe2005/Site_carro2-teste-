<!DOCTYPE html>
<html lang="en">

    <head> 
        <meta charset="utf-8" />
        <title>Olper Motors</title>
    </head>

<body> 

    <?php
    session_start();

    $usuario_autenticator=false; 

   # $usuarios_app= aqui vai pensar no que já tem no banco, e exibir

   /* Aqui vai ter que pensar em como comparar as informações do post com as do banco
   foreach ($usuarios_app as $user){ 
    if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']) {
        $usuario_autenticator=true;
     }
} */ 

if($usuario_autenticator) {
    echo "Usuario Autenticado";
    $_SESSION['autenticado'] = 'SIM';
    header('Location: tela_inicial.php');
}
else{ 
    $_SESSION['autenticado'] = 'NAO';
    header('Location: login.php?login=erro');
}

// é o nosso servidor
    $servername='localhost';

//usuário padrão do servidor local
    $username="root";

//senha padrão do servidor local
    $password="";

//nome do banco de dados
    $db_name="usuarios";

//faz a conexão com o banco de dados, em caso de erro
    $conn= new mysqli($servername, $username, $password, $db_name);

//verifica a conexão com o banco de dados, em caso de erro
    if ($conn->connect_error) {
        // o die encerra o escript, e pode conter uma mensagem de erro.
        die("Falha na conexão! " . $conn->connect_error);
    }

//capturando os dados do formulário
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // essa variável fez ma consulta no banco de dados, e insere os dados do formulário na tabela
    $sql = "INSERT INTO dados_usuarios (email, senha) 
VALUES('$email', '$senha')";

//condição que verifica se é verdadeira a consulta executada pelo banco ou não.
if ($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso!";
} else{
    //$conn->error mensagem de erro MySQL se a consulta não estiver correta
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
//encerra a coneção com o banco de dados, evitando desperdício de recursos
$conn->close();
    
    /*session_start();
    $_SESSION['X']='Seção oficialmente aberta';
    print_r($_SESSION['X']);
    echo '<hr>';

        $usuario_autenticator=false; 

            $usuarios_app= array(
                array( 
                    'email' => 'beker@gmail.com',
                    'senha' => '123456'
                ),
                array(
                    'email' => 'olp@gmail.com',
                    'senha' => '1234567'
                )
            );
            
            foreach ($usuarios_app as $user){ 
                if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']) {
                    $usuario_autenticator=true;
                 }
            } 

            if($usuario_autenticator) {
                echo "Usuario Autenticado";
                $_SESSION['autenticado'] = 'SIM';
                header('Location: tela_inicial.php');
            }
            else{ 
                $_SESSION['autenticado'] = 'NAO';
                header('Location: login.php?login=erro');
            }*/

    ?>
</body>
    
</html>