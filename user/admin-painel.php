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
    <link rel="stylesheet" href="../asset/css/style.css"/>
    <title> Meu Personal</title>
</head>
<body>
        <div class="container-fluid">
        <div class="top-site">
            <div class="flex-container">
                <div class="logo">
                    Meu Personal
                </div>
                <div class="info-user">
                    usuario 
                </div>
            </div>

        </div>
            <div class = "flex-container">
                <div class="painel">
                    <div class="title-box">
                        Alunos
                    </div>
                    <?php 
                        for($i=0; $i <=5; $i++){
                            echo '<div class="list"> Aluno </div>';
                        }
                    
                    ?>
                </div>
                <div class="painel">
                    <div class="title-box">
                        Turmas
                    </div>
                    <?php
                        $turmas = "turma A";
                        for($i=0; $i<=5; $i++){
                            echo '<div class="list">'.$turmas.'</div>';
                        }
                    ?>
                </div>
                <div class="painel">
                    <div class="title-box">
                        Relatorio
                    </div>
                        <canvas id="myChart" width="400" height="200">

                        </canvas>
                </div>
                <div class="painel">
                    <div class="title-box">
                        Matriculas
                    </div>
                    <canvas id="myChart" width="400" height="200">

                    </canvas>

                </div>
                <div class="painel">
                <div class="title-box">
                        Cadastrar
                    </div>

                    <div class="buttons">
                    <button class="btn btn-success form-control" data-toggle="modal" data-target = "#modalCadastro">Aluno</button>
                    </div>

                    <div class="buttons">
                    <button class="btn btn-primary  form-control" data-toggle="modal" data-target = "#modalCadastroTurma">Turma</button>
                    </div>
                </div>

            </div>

        </div>

        <!-- Modal para cadastro de aluno-->
        <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastro" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCadastroLabel">Cadastrar novo aluno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <div class="modal-body">
        <form>
            <div class="form-group ">
                <input class="form-control" type="name" name="name-user" placeholder =  "Nome Completo" require/>
            </div>
            <div class="form-group ">
                <input class="form-control" type="email" name="email-user" placeholder =  "E-mail" require/>
            </div>
            
            <div class="form-group ">
                <input class="form-control" type="date" name="nascimento-user" placeholder =  "Nascimento" require/>
            </div>
            <div class="form-group ">
                <input class="form-control" type="text" name="peso-user" placeholder =  "Peso em Kg" require/>
            </div>
            <div class="form-group ">
                <input class="form-control" type="text" name="altura-user" placeholder =  "Altura em M" require/>
            </div>
            <div class="form-group ">
                <input class="form-control" type="text" name="Endereço-user" placeholder =  "Endereço" require/>
            </div>

            <div class="form-group ">
                <input class="form-control" type="password"  onmouseover= "padraosenha()" name="pass-user" placeholder =  "Senha" require/>
            </div>    
            <div class="form-group ">
                <input class="form-control" type="password" name="re-pass-user" placeholder =  "Repita Senha" require/>
            </div>
            <div class="form-group ">
                <select class="form-control"  name="select-class" placeholder =  "Selecione a turma" require>
                    <?php
                        $turma =   'turma1';
                         for($i=0; $i <=10; $i++){
                            echo '<option>'.$turma.'</option>';
                        }
                        
                    ?>
                        
                </select>
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

        <!-- modal para cadastro de turma-->

<div class="modal fade" id="modalCadastroTurma" tabindex="-1" role="dialog" aria-labelledby="modalCadastro" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCadastroLabel">Cadastrar nova turma</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
        </div>

    <div class="modal-body">
        <form>
            <div class="form-group ">
                <input class="form-control" type="text" name="name-turma" placeholder =  "Nome da turma" require/>
            </div>
            <div class="form-group ">
                <input class="form-control" type="text" name="qtd-aluno-turma" placeholder =  "Quantidae max de aluno por turma" require/>
            </div>
            <div class="form-group ">
                <select class="form-control"  name="select-class" placeholder =  "Selecione a turma" require>
                        <option value="1">Manhã</option>
                            <option value="2">Tarde</option>
                                <option value="3">Noite</option>
                </select>
            </div>
                <button class = "btn btn-success" onclick = cadastrar() >Cadastrar</button>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../asset/scripts/script.js"></script>
<script src="../node_modules/chart.js/dist/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>