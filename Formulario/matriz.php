
<?php
		include_once('conexao.php');
		include_once('arquivolog.php');
		session_start();
?>

<?php

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

#$result_matriz = "INSERT INTO matrizanotifica (datamatriz, desfecho, identificacao_causas, analise_causaraiz, causa_raiz, 	oque, quem, quando, onde, 	quanto, situacao, acoes, id_ocorrencia) VALUES (' $data', '$data','$desfecho', '$identificacao_causas', '$analise_causaraiz', '$causa_raiz', '$oque', '$quem',  '$quando', '$onde', '$quanto', '$acoes', '$idocorrencia')";

$result_matriz = "UPDATE matrizanotifica SET datamatriz = '$data', desfecho = '$desfecho', identificacao_causas = '$identificacao_causas', analise_causaraiz = '$analise_causaraiz', causa_raiz = '$causa_raiz', 	oque = '$oque', quem = '$quem', quando = '$quando', onde = '$onde', quanto = '$quanto', acoes = '$acoes' WHERE id_ocorrencia = '$idocorrencia';";


$resultado_matriz = mysqli_query($conn, $result_matriz) or die (mysqli_error($conn));

$result_matriz = "SELECT id_matriz FROM matrizanotifica WHERE id_ocorrencia = $idocorrencia";
$resultado_ocorrencias = mysqli_query($conn , $result_matriz);
$row_matriz = mysqli_fetch_assoc($resultado_ocorrencias);

registrolog($row_matriz['id_matriz'], $conn);
#echo($row_matriz['id_matriz']);

?>


