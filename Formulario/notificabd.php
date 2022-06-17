<?php include_once ("conexao.php")?>
	
<?php


 $unidade = $_POST['unidade'];
 $data = $_POST['datadaocorrencia'];
 $hora = $_POST['horadaocorrencia']; 
 $assinado = $_POST['mostrartxtouescondertxtass'];
 $assinatura = $_POST['assinado'];
 $afetou = $_POST['mostrartxtouescondertxt'];   
 $pacienteafetado = $_POST['pacienteafetado'];
 $setor = $_POST['SETOR'];
 $tipo = $_POST['tipo']; 
 $ocorrencia = $_POST['band-rock']; 
 $ocorrido = $_POST['Ocorrencia'];
 $medicamento = $_POST['descricaomedicamento'];
 $lote = $_POST['lote'];
 $validade = $_POST['validade']; 
 $dialisado = $_POST['pacientedialise'];
 $nascimentodialisado = $_POST['nascimentopaciente'];
 $capilarorigem = $_POST['capilardeorigem'];   
 $nascimentocapilar = $_POST['nascimentocapilar'];
 $tempoquedialisou = $_POST['tempoquedialisou'];
 $descricao = $_POST['ocorrenciatext'];
 $acao = $_POST['acao'];

 echo "Evento Notificado";

//$result_notificacao = "CALL dbnotificacao.InserirOcorrencia ('$unidade', '$data', '$hora', '$assinado', '$assinatura', '$afetou', '$pacienteafetado', '$setor', '$tipo', '$ocorrencia', '$ocorrido', '$medicamento', ' $lote', '$validade', '$dialisado',' $nascimentodialisado', '$capilarorigem', '$nascimentocapilar', '$tempoquedialisou', '$descricao');";


#$resultado_notificacao = mysqli_query($conn, $result_notificacao);
$result_notificacao = mysqli_query($conn, 
        "CALL InserirOcorrencia ('$unidade', '$data', '$hora', '$assinado', '$assinatura', '$afetou', '$pacienteafetado', '$setor', '$tipo', '$ocorrencia', '$ocorrido', '$medicamento', ' $lote', '$validade', '$dialisado',' $nascimentodialisado', '$capilarorigem', '$nascimentocapilar', '$tempoquedialisou', '$descricao', '$acao');") or die("Erro na query da procedure: " . mysqli_error($conn));

 #$result_notificacao = "INSERT INTO ocorrencia (unidade, data, hora, assinado, assinatura, afetou_paciente, paciente,  setor, tipo, ocorrencia, ocorrido, medicamento,   lote,   validade, paciente_dialise,   nascimento_dialise, paciente_capilar, nascimento_capilar, tempodedialise, descricao ) VALUES ('$unidade', '$data', '$hora', '$assinado', '$assinatura', '$afetou', '$pacienteafetado', '$setor', '$tipo', '$ocorrencia', '$ocorrido', '$medicamento', ' $lote', '$validade', '$dialisado',' $nascimentodialisado', '$capilarorigem', '$nascimentocapilar', '$tempoquedialisou', '$descricao ')";


?>