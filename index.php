<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="authot" content="Ic3Web - CEO - Filipi Firmino">
    <meta name="description" content="Descrição breve da aplicação">
    <meta name="keywords" content="SEO">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS Local -->
    <link rel="stylesheet" href="asset/css/style.css"/>
    <title> Meu Personal</title>
</head>
<body>

<div class="container">
    <div class="cont-login">
        <form  method="POST" action="asset/scripts/receber-dados.php">
            <div class="form-group">
                <h3>Meu Personal</h3>
                <input type="text" name="name-user" placeholder="login" required class="form-control">
                <input type="password" name="pass-user" placeholder="pass" required class="form-control">
                <input type="submit" class="btn btn-success form-control" value="Login">
                <button type = "button" class="btn btn-default form-control" data-toggle="modal" data-target = "#modalCadastro">Cadastre-se!</button>
            </div>
        </form>
    </div>

</div>

<!-- Modal para cadastro-->
<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastro" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCadastroLabel">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <footer>
            <div class="botom">
                <div class="container">
                    <nav>
                        <ul>
                            <li>SAC</li>
                            <li>Mapa do site</li>
                            <li>Parcerias</li>
                            <li>Contrato</li>
                            <li>Social</li>
                        </ul>
                    </nav>
                
                </div>
            </div>
        
        </footer>

      <div class="modal-body">
        <form>
            <div class="form-group ">
                <input class="form-control" type="name" name="name-user" placeholder =  "Nome Completo" require/>
            </div>
            <div class="form-group ">
                <input class="form-control" type="email" name="email-user" placeholder =  "e-mail" require/>
            </div>
            <div class="form-group ">
                <input class="form-control" type="password" name="pass-user" placeholder =  "Senha" require/>
            </div>    
            <div class="form-group ">
                <input class="form-control" type="password" name="re-pass-user" placeholder =  "Repita Senha" require/>
            </div>
            <button class = "btn btn-success" onclick = cadastrar() >Cadastrar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="asset/scripts/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>