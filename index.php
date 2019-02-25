<!DOCTYPE html>
<html lang ="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Personal 1.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login/asset/css/main.css">
    <script src="main.js"></script>
</head>
<body>
   <div class="container">
    <div class = "logo">
    <a href ="#">
        <?php
        $nomedosite= "Personal";
            echo $nomedosite;
        ?>
         </a>
    </div>
    <div class = "user">
    <a href ="#">
    <?php
        $nomedosite= "Login";
            echo $nomedosite;
        ?>
    </a>
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
</body>
</html>