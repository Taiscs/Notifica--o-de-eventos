<?php
//data e hora do log
$datahora = date("Y-m-d H:i:s");	

//ip do log	
$ip = $_SERVER['REMOTE_ADDR'];	

//ação do log(Acesso, Exclusão, Atualização, Inserção)
$acao = 'Atualização';	

//Rotina acessada
$rotina = 'Cadastro de Clientes';

//historico, O que alterou, excluiu, ou acessou... adaptar conforme o formulario	
$historico = 'Atualizou Matriz ' . {'id_matriz'};

//Insere o log no banco de dados	
sc_exec_sql("INSERT INTO log (login, data, hora,ip, acao, rotina, historico) 
VALUES('[sm_global_login]', '$datahora', '$datahora',
         '$ip', '$acao', '$rotina', '$historico')");


         ?>