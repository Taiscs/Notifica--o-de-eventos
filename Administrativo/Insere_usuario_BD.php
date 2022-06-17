

<?php include_once('conexao.php');?>

<?php
$id = $_POST['id'];
$nome = $_POST ['nome'];
$login = $_POST ['login'];
$unidade = $_POST ['unidade']; 
 $unidade1 = $_POST['unidade1'];
 $unidade2 = $_POST['unidade2']; 
 $unidade3 = $_POST['unidade3'];
 $unidade4 = $_POST['unidade4'];
 $perfil = $_POST ['perfil'];
 





$result_usuario = "UPDATE tblusuario SET nome = '$nome', login = '$login', unidade = '$unidade', unidade1 = '$unidade1', unidade2 = '$unidade2', 	unidade3 = '$unidade3', unidade4 = '$unidade4', perfil = '$perfil' WHERE id = '$id';";



$resultado_usuario = mysqli_query($conn, $result_usuario) or die (mysqli_error($conn));




?>



