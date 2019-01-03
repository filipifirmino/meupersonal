<?php
/**
 * Created by PhpStorm.
 * User: conexao
 * Date: 02/01/19
 * Time: 15:30
 */


    if(isset($_POST['text-mensage'])){
        $mensage = $_POST['text-mensage'];
        file_put_contents("log.txt", $mensage, FILE_APPEND);

        header("Locacation:../../index.php");

    }else{
        echo "O envio da mensagem falhou";
    }