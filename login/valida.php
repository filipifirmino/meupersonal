<?php
    session_start();
    if(	isset($_POST['login-user']) && empty($_POST['login-user'])== false){
            $login = addslashes($_POST['login-user']);
            $senha = md5(addslashes($_POST['pass-user']));

                echo $login . "<br>" . $senha;


            $dsn = "mysql:dbname=meupersonal; host=localhost";
            $dbuser = "root";
            $dbpass = "dijital123";
        
                try{
        
                    $pdo = new PDO($dsn, $dbuser, $dbpass);
                        /*Conectando ao banco de dados*/
                    $sql = $pdo->query("SELECT *  FROM user WHERE email = '$login' AND senha= '$senha'");
                        /*Preparando a query de consulta*/ 
                        
                    if($sql-> rowCount() > 0){
                            $dado = $sql->fetch();
        
                        $_SESSION['id'] = $dado['id'];
                        header ('Location:../user/admin-painel.php');
                    }
        
                } catch(PDOException $e){
                    echo "Erro: ". $e-> getMessage();
                }
            
        }

?>