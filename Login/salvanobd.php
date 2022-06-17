<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
 
$nomedousuario= $_POST["suario"];
$login= $_POST["login"];
$senha= $_POST["senha"];



$servername = "localhost";
$username = "root"; 
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=dbnotificacao", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "onectado com sucesso";

 $stmt = $conn->prepare("SELECT codigo FROM tblusuario WHERE login=:login AND senha= md5(:senha)");

$stmt->bindParam(':login', $login);
  $stmt->bindParam(':senha', $senha);

  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

   print(result);
}





    catch(PDOException $e) {
  echo "Conexão falhou: " . $e->getMessage();
}

  $conn = null;





 ?>






</body>
</html>




