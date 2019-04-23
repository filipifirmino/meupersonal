<?
    require '../asset/script/php/pdoDBConect.php';
    #Requisitando conexao com banco de dados
    $id = 0;
    #setando ID inicial do usuario
    if(isset($_GET['id']) && empty($_GET['id'])== false){
        $id = addslashes($_GET['id']);
    #Verificando se o sistema passou a id a ser editada e armazenando a mesma em uma variavel


    if(isset($_POST['name-user']) && empty($_POST['name-user']) == false){
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
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="../asset/image/favico.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="authot" content="Ic3Web - CEO - Filipi Firmino">
    <meta name="description" content="Descrição breve da aplicação">
    <meta name="keywords" content="SEO">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS Local -->
    <link rel="stylesheet" href="../asset/css/style_admin.css"/>
    <title>Personal</title>
</head>
<body>
<div class="container">
    <div class="container-int-edit">
        <form method= "POST">
        <div class="form-group">
            <input class="form-control" type="name" name="name-user" value="<?php echo $dado['nome'] ?>"require/>
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email-user" value="<?php echo  $dado['email'] ?>" require/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="fone-user" value="<?php echo $dado['fone'] ?>" require/>
        </div>
        <button class = "btn btn-warning form-control" onclick = atualizar() >Atualizar</button>
    </form>
    <div>
</div>
    <!-- Optional JavaScript -->
<!-- Inserção de react -->
<!-- Nota: ao fazer o deploy, substitua "development.js" por "production.min.js". -->
<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
<script src="../asset/script/js/react-component.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../asset/script/js/action.js"></script>
<script src="../node_modules/chart.js/dist/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>