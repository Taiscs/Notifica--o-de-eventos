
<?php include_once('conexao.php');?>

<?php
 

 $USUARIO = $_POST ['usuario'];
 $LOGIN = $_POST ['login'];
 $SENHA = md5($_POST["senha"]);
 $MATRIZ = $_POST['Matriz'];
 $convenios = $_POST['convenios']; 
 $RIO = $_POST['Rio_vermelho'];
 $mont = $_POST['Mont_serrat'];
 $estevao = $_POST['Santo_Estevao'];
 $PERFIL = $_POST ['perfil'];




$result_usuario = "INSERT INTO tblusuario (nome, login, senha, unidade,unidade1,unidade2,unidade3,unidade4, perfil ) VALUES ('$USUARIO','$LOGIN','$SENHA','$MATRIZ','$convenios','$RIO',' $mont', '$estevao',  '$PERFIL')";

$resultado_usuario = mysqli_query($conn , $result_usuario);



?>

