<?php
/**
 * Created by PhpStorm.
 * User: conexao
 * Date: 02/01/19
 * Time: 10:26
 */

    if(isset($_POST["name-user"]) && !empty($_POST["name-user"])){
        $user = $_POST["name-user"];
        $pass = $_POST["pass-user"];
       echo "O usuario enviou os dados";

       echo "<br>";
       echo "O seu usuario é : " . $user . " e sua senha é : " . $pass;
    }else{
        echo "O usuario não envious os dados";
    }


