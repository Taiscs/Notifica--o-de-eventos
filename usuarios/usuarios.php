<?php
  include_once("conexao.php");
  $result_usuario = "SELECT * FROM tblusuario";
  $resultado_usuario  = mysqli_query($conn, $result_usuario);
?>
<!DOCTYPE html>
 <img src="baixados.png" class="rounded mx-auto d-block" alt="...">

 <title>Usuários</title>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='stylesheet.css'>
    <link rel='stylesheet' href='bootstrap.min.css'>
    <script src='bootstrap.min.js'></script>
    <script src='jquery-3.6.0.js'></script>
    <script src='javascript.js'></script>

  </head>
  
  <body>
    <div class="container theme-showcase" role="main">
  <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4"> Acessar Informações</h5>
            <span class="text-muted">

                .</span>
           
         </span>

                       <?php  session_start();
echo "Usuário:" .$_SESSION['usuarionome'];

?>.
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link active" href="colaborador.php">Consulta por Unidade</a>
        <a class="nav-link active" aria-current="page" href="usuarios.php">Usúarios</a>
        <a class="nav-link active" href="cadastrarusuario.php">Cadastrar novo usuário</a>
        <a class="nav-link active" href="registralog.php">Histórico de acesso</a>
        <a class="nav-link active" href="sair.php">Sair</a>
      </div>
    </div>
  </div>
</nav> 

        </div>

    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls=" navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>
    <div class="container-md">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
              <?php while($row_usuario = mysqli_fetch_assoc($resultado_usuario )){ ?>
                <tr>
                  <td><?php echo $row_usuario['id']; ?></td>
                  <td><?php echo $row_usuario['nome']; ?></td>
                  <td><?php echo $row_usuario['login']; ?></td>
                  <td>
                    <button type class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modalusuario<?php echo $row_usuario['id']; ?>">Visualizar</button>
                    <button type="button" class="btn btn-xs btn-warning" data-bs-toggle="modal" data-bs-target="#Modalusuario" data-bs-whateverid="<?php echo $row_usuario['id']; ?>" data-bs-whatever= "<?php echo $row_usuario['nome']; ?> "data-bs-whateverlogin= "<?php echo $row_usuario['login']; ?>" data-bs-whateverperfil= "<?php echo $row_usuario['perfil']; ?>" data-bs-whateverunidade= "<?php echo $row_usuario['unidade']; ?>" data-bs-whateverunidade1= "<?php echo $row_usuario['unidade1']; ?>" data-bs-whateverunidade2= "<?php echo $row_usuario['unidade2']; ?>" data-bs-whateverunidade3= "<?php echo $row_usuario['unidade3']; ?>" data-bs-whateverunidade4= "<?php echo $row_usuario['unidade4']; ?>">Editar</button>

                    <button type="button" class="btn btn-xs btn-danger"><a href='apagar.php?id=" .<?php echo $row_usuario['id']; ?> "' data-confirm='Tem certeza de que deseja excluir o item selecionado?'><font color="#ffffff">Apagar</font></button>
                  </td>
                </tr>
                

<!-- Modal -->
<div class="modal fade" id="Modalusuario<?php echo $row_usuario['id']; ?>" tabindex="-1" aria-labelledby="ModalusuarioLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalusuarioLabel">Informações do Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                        <b> ID:</b><?php echo $row_usuario['id']; ?>
                        <p><b>Nome:<p></p></b><?php echo $row_usuario['nome']; ?></p>
                        <p><b>Email:<P></b><?php echo $row_usuario['login']; ?></p>

                        <p><b>Perfil:<P></P></b><?php echo $row_usuario['perfil']; ?></p>

                        <b>Unidades que consulta:<p></p></b>
                        <?php echo $row_usuario['unidade']; ?><p></p>
                        <?php echo $row_usuario['unidade1']; ?><p></p>
                        <?php echo $row_usuario['unidade2']; ?><p></p>
                        <?php echo $row_usuario['unidade3']; ?><p></p>
                        <?php echo $row_usuario['unidade4']; ?><P></P>
                       
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
              <?php } ?>
            </tbody>
           </table>
        </div>
      </div>    
    </div>




<div class="modal fade" id="Modalusuario" tabindex="-1" aria-labelledby="ModalusuarioLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalusuarioLabel">Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="processausuario.php">
               
             <
                                                                     
      
            <label for="recipient-name" class="col-form-label"></label>
            <input type="hidden" class="form-control" id="recipientid" name = "id" hidden="true">
          


          <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" id="recipient" name= "nome">
         </div>
          
            <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipientlog"  name = "login">
            </div>
           <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Perfil:</label>
            <input type="text" class="form-control"  id="recipientperfil" name ="perfil">
          </div>

          <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Consulta:</label>
            <input type="text" class="form-control" id="recipientunidade" name ="unidade" >
          </div>
          <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Consulta:</label>
            <input type="text" class="form-control" id="recipientunidade1" name = "unidade1">
          </div>
          <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Consulta:</label>
            <input type="text" class="form-control" id="recipientunidade2" name= "unidade2">
          </div>
          <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Consulta:</label>
            <input type="text" class="form-control"  id="recipientunidade3" name ="unidade3">
          </div>
          <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Consulta:</label>
            <input type="text" class="form-control" id="recipientunidade4"  name ="unidade4">
          </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-danger">Alterar</button>
      </div>
           
        </form>
      </div>  
    </div>
  </div>
</div>
</form>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
 <script type="text/javascript"> var Modalusuario = document.getElementById('Modalusuario')
Modalusuario.addEventListener('show.bs.modal', function (event) {
  //Botão que acionou o modal
  var button = event.relatedTarget
  //Extraia informações dos atributos data-bs
  var recipientid = button.getAttribute('data-bs-whateverid')
  var recipient = button.getAttribute('data-bs-whatever')
  var recipientlog = button.getAttribute('data-bs-whateverlogin')
  var recipientperfil = button.getAttribute('data-bs-whateverperfil')
  var recipientunidade = button.getAttribute('data-bs-whateverunidade')
  var recipientunidade1 = button.getAttribute('data-bs-whateverunidade1')
  var recipientunidade2 = button.getAttribute('data-bs-whateverunidade2')
  var recipientunidade3 = button.getAttribute('data-bs-whateverunidade3')
  var recipientunidade4 = button.getAttribute('data-bs-whateverunidade4')
 

  // Atualiza o conteúdo do modal.

   var modal = $(this)
      modal.find('.modal-title').text('Usuário ')
      modal.find('#recipientid').val(recipientid)
      modal.find('#recipient').val(recipient)
      modal.find('#recipientlog').val(recipientlog)
      modal.find('#recipientperfil').val(recipientperfil)
      modal.find('#recipientunidade').val(recipientunidade)
      modal.find('#recipientunidade1').val(recipientunidade1)
      modal.find('#recipientunidade2').val(recipientunidade2)
      modal.find('#recipientunidade3').val(recipientunidade3)
      modal.find('#recipientunidade4').val(recipientunidade4)

  
})
</script>



</form>
 </body>
 </html>



