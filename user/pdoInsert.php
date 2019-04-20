<?php
$dsn = "mysql:dbname=meupersonal; host=localhost";
$dbuser = "root";
$dbpass = "dijital123";

    try{

        $pdo = new PDO($dsn, $dbuser, $dbpass);
            /*Conectando ao banco de dados*/

            /* Recebendo dados do formulario */
            $nome = $_POST['name-turma'];
            $horario = $_POST['horario-turma'];
            $aluno = $_POST['aluno-turma'];
            $status = $_POST['status-turma'];
            echo "$nome , $horario , $aluno , $status";
    
        $sql = "INSERT INTO turmas SET nome = '$nome', horario = '$horario', aluno = '$aluno', estatus ='$status' ";
        /*Preparando a query de iserção de dados*/ 
        echo "$sql";
        $sql = $pdo->query($sql);

       
        /*Inserção dos dados no banco*/
        $pdo->lastInsertId(); /*retorna o id do usuario*/
        
        //header('Location: http://localhost/meupersonal/user/admin-painel.php');
        
    } catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
    }



?>