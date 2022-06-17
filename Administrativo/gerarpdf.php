<?php	







	include_once("conexao.php");
	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>UNIDADE</th>';
	$html .= '<th>OCORRÊNCIA</th>';
	$html .= '<th>DESCRIÇÃO</th>';
	$html .= '<th>DATA</th>';
	$html .= '<th>HORA</th>';
	$html .= '<th>QUANDO FOI NOTIFICADO</th>';
	$html .= '<th>ACAO</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	
$result_ocorrido= "SELECT * FROM ocorrencia";
	$resultado_ocorrido = mysqli_query($conn, $result_ocorrido);
	while($row_ocorrido = mysqli_fetch_assoc($resultado_ocorrido)){
		
              
		    $html .= '<tr><td>'.$row_ocorrido["id"]."</td>";
			$html .= '<td>'.$row_ocorrido["unidade"]."</td>";
			$html .= '<td>'.$row_ocorrido["ocorrencia"]."</td>";
			$html .= '<td>'.$row_ocorrido["descricao"]."</td>";
			$html .= '<td>'.$row_ocorrido["data"]."</td>";
			$html .= '<td>'.$row_ocorrido["hora"]."</td>";
            $html .= '<td>'.$row_ocorrido["datahora"]."</td>";
            $html .= '<td>'.$row_ocorrido["acao"]."</td></tr>";
			

           }


	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_NotificaçõesCSB.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>