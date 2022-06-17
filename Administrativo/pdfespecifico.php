
<?php

Include_once("conexao.php");
require 'vendor/autoload.php';

$id = "1";
	$result_correncia = "SELECT * FROM ocorrencia WHERE id = '$id' LIMIT 1";
	$resultado_ocorrencia = mysqli_query($conn, $result_correncia);	
	$row_ocorrencia = mysqli_fetch_assoc($resultado_ocorrencia);	
	
	
	$pagina = 
		"<html>
			<body>
				<h1>Informações da ocorrencia</h1>
				Id: ".$row_ocorrencia['id']."<br>
				Unidade: ".$row_ocorrencia['unidade']."<br>
				Ocorrência: ".$row_ocorrencia['ocorrencia']."<br>
				Data: ".$row_ocorrencia['data']."<br>
				Hora: ".$row_ocorrencia['hora']."<br>
				Quando foi notificado: ".$row_ocorrencia['datahora']."<br>
				


				<h4>Qualidade CSB</h4>
			</body>
		</html>
		";

$arquivo = "Qualidade.pdf";

$mpdf = new DOMPDF();
$mpdf->WriteHTML($pagina);

$mpdf->Output($arquivo, 'I');

// I - Abre no navegador
// F - Salva o arquivo no servido
// D - Salva o arquivo no computador do usuário
?>
