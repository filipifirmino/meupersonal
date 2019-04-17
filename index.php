<!DOCTYPE html>
<html lang ="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="asset/image/favico.svg">
    <title>Personal 1.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="asset/css/main.css">
    <script src="asset/script/js/main.js"></script>
</head>
<body>
   <div class="container">
    <div class = "logo">
    <a href ="index.php">
        <?php
        $nomedosite= "Personal";
            echo $nomedosite;
        ?>
         </a>
    </div>
    <div class = "user">
    
    <button class="btn-alert" onclick="linkar()">Login/Cadastro</div>
    
    </div>
   </div>
   <div class="container-white">

        <div class ="conteudo">
            <?php
                $box = '<div class="box"></div> ';

                for($i = 0; $i <=5 ; $i++){
                    echo "$box";
                }
            ?>

        </div>
    
    </div>
    <div class="container">
        <div class ="conteudo">
                <?php
                    $box = '<div class="box"></div> ';

                    for($i = 0; $i <=5 ; $i++){
                        echo "$box";
                    }
                ?>

            </div>    
    </div>
</body>
</html>