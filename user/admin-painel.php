<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
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
<div class="container-fluid">
    <div class="container-int">
        <div class="menu-left">
            <div class="logo">
                <h4 class="name-logo"><a href="../index.php">Personal</a></h4>
            </div>
            <div class="image-user">
                <img src="../asset/image/padm/user.svg" alt="User-login"/>
            </div>
                <div class="cont-usuario">
                    <span id="name-user" class="usuario">Usuario </span><!-- Nome do usuario ogado-->
                </div>
                <div class="item-menu active">
                    <div class="img-menu">
                        <img src="../asset/image/padm/alunos.svg" alt="icone">
                    </div>
                    Novo
                </div>
                <div class="item-menu">
                    <div class="img-menu">
                    <img src="../asset/image/padm/resume.svg" alt="icone">
                    </div>
                    Prescrever
                </div>
                <div class="item-menu">
                    <div class="img-menu">
                    <img src="../asset/image/padm/diagram.svg" alt="icone">
                    </div>
                    Desempenho
                </div>
                <div class="item-menu">
                    <div class="img-menu">
                    <img src="../asset/image/padm/file.svg" alt="icone">
                    </div>
                    Relatorios
                </div>
                <div class="item-menu">
                    <div class="img-menu">
                    <img src="../asset/image/padm/hand.svg" alt="icone">
                    </div>
                    Financeiro
                </div>
                
        </div>  
        <div class="cont-right">
            <div id="react-component">
            
            </div>
                
            <div class="dados">

                <h3 class="title">Seus alunos</h3>
                
                <table class="table">
                
                <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Score</th>
                <th>Ações</th>
                </tr>             
                
                <?php
                   
                    function score($contador){
                        for($i=1; $i<= $contador; $i++){
                            return '<img src="../asset/image/padm/star.svg" class="star">';
                            
                        }
                    }

                require '../asset/script/php/pdoDBConect.php';
                  $sql = "SELECT * FROM user WHERE tipo = 2";
                   $sql = $pdo->query($sql);
                   if($sql->rowCount() > 0){
                       foreach($sql->fetchAll() as $usuario){
                           echo '<tr>';
                           echo '<td>'.$usuario['id'].'</td>';
                           echo '<td>'.$usuario['nome'].'</td>';
                           echo '<td>'.$usuario['email'].'</td>';
                           echo '<td>'.score($usuario['score']).'</td>';
                           echo '<td> <a href="editar.php?id='.$usuario['id'].'"><button class="btn btn-warning">Editar</button></a> - <a href="excluir.php?id='.$usuario['id'].'"><button class="btn btn-danger">Excluir</button></a></td>';                         
                           echo '</tr>';
                       }
                   }
                ?>
                </table>
                <button class="btn btn-success" data-toggle="modal" data-target = "#modalCadastro"> Novo </button>
              </div>
            
            <div class="turmas">
                     <h3 class="title">Suas Turmas</h3>
                <table class="table">

                        <tr>
                            <th>Id</th>
                            <th>Turma</th>
                            <th>Horario</th>
                            <th>Alunos</th>
                            <th>Status</th>
                            <th>Ações </th>
                        </tr>
                    <?
                        function validaTurma($par){
                            if($par == 1){
                                return  'Ativo';
                            }else{
                                return  'inativo';
                            }
                        }

                        require '../asset/script/php/pdoDBConect.php';
                        $sql1 = "SELECT * FROM turmas";
                        $sql1 = $pdo->query($sql1);
                        if($sql1->rowCount() > 0){
                            foreach($sql1->fetchAll() as $turmas){
                                echo '<tr>';
                                echo '<td>'.$turmas['id'].'</td>';
                                echo '<td>'.$turmas['nome'].'</td>';
                                echo '<td>'.$turmas['horario'].'</td>';
                                echo '<td>'.$turmas['qtdAlunos'].'</td>';
                                echo '<td>'.validaTurma($turmas['estatus']).'</td>';
                                echo '<td> <a href="editarTurmas.php?id="'.$turmas['id'].'"><button class="btn btn-warning">Editar</button></a> - <a href="excluirTurmas.php?id="'.$turmas['id'].'"><button class="btn btn-danger">Excluir</button></a></td>';

                            }
                        }

                    ?>

                </table>
                <button class="btn btn-success" data-toggle="modal" data-target="#modalTurma"> Novo</button>
            </div>

            <!-- Modal cadastro de turmas-->
            <div class="modal fade" id="modalTurma" tabindex="-1" role="dialog" arial-labelledby="modalTurma" aria-hidden="true">
            <div class="modal-dialog" role="document">
		        <div class="modal-content">
			        <div class="modal-header">
			            <h5 class="modal-title" id="modalCadastroLabel">Cadastro de Turmas</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
			     </button>
			</div>
	  
			<div class="modal-body">
			  <form action = "pdoInsert.php"  method= "POST">
				  <div class="form-group">
					  <input class="form-control" type="name" name="name-turma" placeholder =  "Nome da turma" require/>
				  </div>
				  <div class="form-group">
					  <input class="form-control" type="text" name="horario-turma" placeholder =  "horario" require/>
				  </div>
				  <div class="form-group">
					  <input type="text" class="form-control" name="aluno-turma" placeholder="Adcione alunos">
				  </div>
                  <div class="form-group">
					  <select class="form-control" name="status-turma">
                        <option value="1">Ativa</option>
                        <option value="0">Desativada</option>
                      </select>
				  </div>     
					
				  <button class = "btn btn-success" onclick = cadastrar() >Cadastrar</button>
			  </form>
			</div>
			<div class="modal-footer">
			  <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
			 </div>
			</div>
		</div>
	</div>  




            <!-- Modal cadastro-->
            <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastro" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="modalCadastroLabel">Cadastro</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
	  
			<div class="modal-body">
			  <form action = "../asset/script/php/pdoInsert.php"  method= "POST">
				  <div class="form-group">
					  <input class="form-control" type="name" name="name-user" placeholder =  "Nome Completo" require/>
				  </div>
				  <div class="form-group">
					  <input class="form-control" type="email" name="email-user" placeholder =  "e-mail" require/>
				  </div>
				  <div class="form-group">
					  <input class="form-control" type="password" name="pass-user" placeholder =  "Senha" require/>
				  </div>
                  <div class="form-group">
					  <select class="form-control" name="type-user">
                        <option value="2">Aluno</option>
                        <option class="list-group-item disabled" value="1">Professor</option>
                      </select>
				  </div>     
					<div class="form-group">
					  <input class="form-control" type="text" name="fone-user" placeholder =  "Ex: (99)-9 9999.9999" require/>
				  </div>
				  <button class = "btn btn-success" onclick = cadastrar() >Cadastrar</button>
			  </form>
			</div>
			<div class="modal-footer">
			  <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
			 </div>
			</div>
		</div>
	</div>  
<!--Modal edição de usuario-->
<!-- Modal edição de turma-->



        </div>
    </div>
       
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