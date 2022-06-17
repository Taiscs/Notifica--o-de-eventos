<?php
	session_start();

    


	include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>EVENTOS NOTIFICADOS</title>
	<head>
	<body>
		<?php
		// Defini o nome do arquivo que será exportado
		$arquivo = 'NOTIFICAÇÕES.xls';
		
		// Criei uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="7">Planilha de eventos Notificados</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>UNIDADE</b></td>';
		$html .= '<td><b>OCORRÊNCIA</b></td>';
		$html .= '<td><b>DESCRIÇÃO</b></td>';
		$html .= '<td><b>DATA</b></td>';
		$html .= '<td><b>HORA</b></td>';
		$html .= '<td><b>QUANDO FOI NOTIFICADO</b></td>';
        $html .= '<td><b>AÇÃO IMEDIATA</b></td>';
		$html .= '</tr>';
		
		//Selecionei todos os itens da tabela 
		
	$result_ocorrencia = "SELECT * FROM ocorrencia";
	$resultado_ocorrencia = mysqli_query($conn, $result_ocorrencia);	
	while($row_ocorrido = mysqli_fetch_assoc($resultado_ocorrencia)){
	
	
	$pagina =
		


		
			$html .= '<tr>';
			$html .= '<td>'.$row_ocorrido["id"].'</td>';
			$html .= '<td>'.$row_ocorrido["unidade"].'</td>';
			$html .= '<td>'.$row_ocorrido["ocorrencia"].'</td>';
			$html .= '<td>'.$row_ocorrido["descricao"].'</td>';
			$html .= '<td>'.$row_ocorrido["data"].'</td>';
			$html .= '<td>'.$row_ocorrido["hora"].'</td>';
            $html .= '<td>'.$row_ocorrido["datahora"].'</td>';
            $html .= '<td>'.$row_ocorrido["acao"].'</td>';
			$html .= '</tr>';
			;
		}
  
  	// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>