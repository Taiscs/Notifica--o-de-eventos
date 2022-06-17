<!DOCTYPE html>
<html>
<head>


<form name="" method= "post"action="log.php" >


	<title>Notificação de ocorrência </title>
        <meta charset="utf-8">
        <link rel = 'stylesheet' href='stylesheet.css'>
        <link rel = 'stylesheet' href='bootstrap.min.css'>
        <script  src='bootstrap.min.js'></script>
        <script  src='jquery-3.6.0.js'></script>
        <script  src='javascript.js'></script>
        <body>

<div class ="container-md">

        <form id = ""action="login.php" method="post">
                   
                   <?php if (isset($resultado) &&$resultado ["id"] == 0:)  ?>
            
                <div class = "alert alert-danger">
                   <?php echo $resultado["msg"]; ?>
                </div>
            <?php endif;  ?>

         <div class="p-1 mb-1 bg-secondary text-white"><h1> CADASTRO DE FUNCIONÁRIO-CSB</h1></div>


<div class ="container">
           
          
            

Nome:<br> <input type="text"class="mb-3"id="usuario" name= "usuario"placeholder="Nome do funcionário" required><br>
Login:<br> <input type="text"class="mb-3" id ="login"name="login" placeholder="Login"required><br>
Senha:<br> <input type= "password" class="mb-3"id="senha"name="senha"placeholder="Senha"required><br>

<button type="submit" id ="submeter" class="btn btn-danger">Cadastrar</button>



</form>

</head>

</body>
</html>
