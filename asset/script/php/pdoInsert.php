<?php
$dsn = "mysql:dbname=meupersonal; host=localhost";
$dbuser = "root";
$dbpass = "dijital123";

    try{

        $pdo = new PDO($dsn, $dbuser, $dbpass);
            /*Conectando ao banco de dados*/

            /* Recebendo dados do formulario */
            $nome = $_POST['name-user'];
            $email = $_POST['email-user'];
            $senha = md5($_POST['pass-user']);
            $fone = $_POST['fone-user'];
            $score = 0;


        $sql = "INSERT INTO user SET nome = '$nome', email = '$email', fone = '$fone', senha ='$senha', score = '$score' ";
        /*Preparando a query de iserção de dados*/ 
        $sql = $pdo->query($sql);
        /*Inserção dos dados no banco*/
        $pdo->lastInsertId(); /*retorna o id do usuario*/
        
        
    } catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
    }



?>