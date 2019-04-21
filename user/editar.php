<?
    require '../asset/script/php/pdoDBConect.php';
    $id = 0;

    if(isset($_GET['id']) && empty($_GET['id'])== false){
        $id = addslashes($_GET['id']);



    if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = addslashes($_POST['name-user']);
    $email = addslashes($_POST['email-user']);
    $fone = addslashes($_POST['fone-user']);

        $sql = "UPDATE user SET nome = '$nome', email = '$email', fone = '$fone' WHERE id = '$id' "; 
    
        $pdo->query($sql);
        header("Location: admin-painel.php");
    }

    
    $sql = "SELECT*FROM user WHERE id = '$id'";

    $sql = $pdo->query($sql);
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();//Seleciona apenas o primeiro resultado do banco de dados
        }else{
            header("Location: admin-painel.php");
        }


}else{
    header("Location: admin-painel.php");
}
?>
 <form action = "../asset/script/php/pdoInsert.php"  method= "POST">

        <div class="form-group">
            <input class="form-control" type="name" name="name-user" value="<?php echo $dado['nome'] ?>"require/>
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email-user" value="<?php echo  $dado['email'] ?>" require/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="fone-user" value="<?php echo $dado['fone'] ?>" require/>
        </div>
        <button class = "btn btn-success" onclick = cadastrar() >Atualizar</button>
    </form>
