<?
require '../asset/script/php/pdoDBConect.php';
if(isset($_GET['id']) && empty($_GET['id'])== false){
    $id=addslashes($_GET['id']);
    $sql = "DELETE FROM user WHERE id = '$id' ";
    $pdo->query($sql);
    header("Location: admin-painel.php");

}else{
    header("Location: admin-painel.php");

}
?>