<?php include_once('conexao.php');?>

<?php

 $id = $_POST ['id'];
 $data = $_POST ['datamatriz'];
 $desfecho = $_POST ['desfecho'];
 $identificacao_causas = $_POST ['causaspotenciais']; 
 $analise_causaraiz = $_POST['causaraiz'];
 $causa_raiz = $_POST['raiz']; 
 $oque = $_POST['oque'];
 $quem = $_POST['quem'];
 $quando = $_POST['quando'];
 $onde = $_POST ['onde'];
 $quanto = $_POST ['quanto'];
 $acoes = $_POST ['acoes'];
 $idocorrencia = $_POST['idocorrencia'];

echo "$idocorrencia $data $desfecho $identificacao_causas $analise_causaraiz  $causa_raiz $oque  $quem $quando $onde $quanto $acoes";

$result_matriz = "INSERT INTO matrizanotifica (datamatriz, desfecho, identificacao_causas, analise_causaraiz, causa_raiz, 	oque, quem, quando, onde, 	quanto, situacao, acoes, id_ocorrencia) VALUES (' $data', '$data','$desfecho', '$identificacao_causas', '$analise_causaraiz', '$causa_raiz', '$oque', '$quem',  '$quando', '$onde', '$quanto', '$acoes', '$idocorrencia')";




$resultado_matriz = mysqli_query($conn, $result_matriz);


?>
