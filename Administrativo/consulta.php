
 <?php
	session_start();
	include_once('conexao.php');
 ?>

 <!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Notificações</title>
	    <meta charset="utf-8">
        <link rel='stylesheet' href='stylesheet.css'>
        <link rel='stylesheet' href='bootstrap.min.css'>
        <script src='bootstrap.min.js'></script>
        <script src='jquery-3.6.0.js'></script>
        <script src='javascript.js'></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<title></title>
	<head>

  <body>

  	<form method="POST" action="">

  		<meta charset="utf-8">
        <link rel='stylesheet' href='stylesheet.css'>
        <link rel='stylesheet' href='bootstrap.min.css'>

   
  		 <?php function get_post_action($name)
                              {
                                $params = func_get_args();

                                foreach ($params as $name) {
                                if (isset($_POST[$name])) {
                                    return $name;
        }
    }
                                        }

switch (get_post_action('planilhaespecifica', )) {
   
    case 'planilhaespecifica':
      

 
		if(isset($_POST['id_ocorrencia'])){
			// Defini o nome do arquivo que será exportado
			$arquivo = 'Notificados.xls';
			
			// Criei uma tabela HTML com o formato da planilha
			
			$html = '';
			$html .= '<table border="1">';
			$html .= '<tr>';
			$html .= '<td colspan="7">Planilha Eventos Notificados</tr>';
			$html .= '</tr>';
			
			
			$html .= '<tr>';
			$html .= '<td><b>ID</b></td>';
			$html .= '<td><b>Unidade</b></td>';
			$html .= '<td><b>Setor</b></td>';
			$html .= '<td><b>Descrição</b></td>';
			$html .= '<td><b>Data</b></td>';
			$html .= '<td><b>Hora</b></td>';
			$html .= '<td><b>Quando foi Notificado</b></td>';
			$html .= '</tr>';
			
			
			foreach($_POST['id_ocorrencia'] as $id => $id_ocorrencia){
				//echo "ID do item: $id <br>";
				//Selecionar todos os itens da tabela 
				$result_ocorrencias = "SELECT * FROM ocorrencia WHERE id = $id LIMIT 1";
				$resultado_ocorrencias = mysqli_query($conn , $result_ocorrencias);
				
				while($row_ocorrido = mysqli_fetch_assoc($resultado_ocorrencias)){
					$html .= '<tr>';
					$html .= '<td>'.$row_ocorrido["id"].'</td>';
					$html .= '<td>'.$row_ocorrido["unidade"].'</td>';
					$html .= '<td>'.$row_ocorrido["setor"].'</td>';
					$html .= '<td>'.$row_ocorrido["descricao"].'</td>';
					$html .= '<td>'.$row_ocorrido["data"].'</td>';
					$html .= '<td>'.$row_ocorrido["hora"].'</td>';
					$html .= '<td>'.$row_ocorrido["datahora"].'</td>';
					$html .= '</tr>';
					;
				}
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
			exit;
		}else{
			echo "";
		}

	}
		
		?>









		<?php


			if(isset($_POST['data'])){
				$pesquisar = $_POST['data'];
				//Selecionar  os itens da página
				$result_ocorrido = "SELECT * FROM ocorrencia WHERE data LIKE '%$pesquisar%' LIMIT 30";
				$resultado_ocorrido = mysqli_query($conn , $result_ocorrido);				
			}else{
				//Verificar se esta sendo passado na URL a página atual, senão é atribuido a pagina
				$pagina=(isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
				
				//Selecionar todos os itens da tabela 
				$result_ocorrido = "SELECT * FROM ocorrencia";
				$resultado_ocorrido = mysqli_query($conn , $result_ocorrido);
				
				//Contar o total de itens
				$total_ocorrido = mysqli_num_rows($resultado_ocorrido);
				
				//Seta a quantidade de itens por página
				$quantidade_pg = 20;
				
				//calcular o número de páginas 
				$num_pagina = ceil($total_ocorrido/$quantidade_pg);
				
				//calcular o inicio da visualizao	
				$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
				
				//Selecionar  os itens da página
				$result_ocorrido = "SELECT * FROM ocorrencia limit $inicio, $quantidade_pg";
				$resultado_ocorrido = mysqli_query($conn , $result_ocorrido);
				$total_ocorrido = mysqli_num_rows($resultado_ocorrido);
			}
		?>




		
                                            

		  <div class="container theme-showcase" role="main">
			
			<div class="page-header">

                <h1></h1>
              
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4"> Acessar Informações</h5>
            <span class="text-muted"></span>

                       <?php  session_start();
echo "Usuário:" .$_SESSION['usuarionome'];

?>
      

        </div>

    </div>
  
       
    <div class="container-md">

			    



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      	<a class="nav-link active" aria-current="page" href="index.php">Home</a>
      	<a class="nav-link active" href="colaborador.php">Consulta por Unidade</a>
        <a class="nav-link active" aria-current="page" href="usuarios.php">Usúarios</a>
        <a class="nav-link active" href="cadastrarusuario.php">Cadastrar novo usuário</a>
        <a class="nav-link active" href="#">Histórico de acesso</a>
        <a class="nav-link active" href="sair.php">Sair</a>
      </div>
    </div>
  </div>
</nav>  
				   <div class="form-group">
<p></p>
					<div class="col-sm-2">
	<input type="text" name="data" class="form-control" id="inputdata" placeholder="Pesquisar por data" >
</div>

               
      

                   
          
	<br><button type="'%$pesquisar%' " class="btn btn-primary btn-sm">Pesquisar data</button>  
			        
					</div>
				  
				  </div>

                     
                 


				<hr>
		
				<div class="row espaco">
					<div class="pull-right">					
			        <a href="gerar_planilha.php"><button type='button' class="btn btn-outline-success ">Gerar Excel</button></a>
					<input type="submit"class="btn btn-outline-success warning " name="planilhaespecifica" value="Excel selecionados" />
						<a href="gerarpdf.php"><button type='button' value="$id"class="btn btn-outline-danger">Gerar PDF</button></a>
                        <a href="analisegrafica.php"><button type='button' class="btn btn-outline-info ">Análise Gráfica</button></a>


						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped table-bordered table-hover">
							<thead><p></p>
								<tr>
									<th class="text-container">SELECIONE</th>
									        
									          <th>ID</th>
									          <th>UNIDADE</th>
				                              <th>SETOR</th>
				                              <th>TIPO</th>
                                              <th>DATA</th>
                                              <th>HORA</th>
                                              <th>QUANDO FOI NOTIFICADO</th>
                                              <th>DETALHES</th>
                                          
                                  

								</tr>
							</thead>
						



                               
								
                                  
                                  
								<?php 



						
								

								 $result_matriz = "SELECT * FROM matrizanotifica";
                                 $resultado_matriz  = mysqli_query($conn, $result_matriz);?>


                                 <?php while($row_matriz = mysqli_fetch_assoc($resultado_matriz )){ ?>  
				    
                                     <?php


                                        


                                      while($row_ocorrido = mysqli_fetch_assoc($resultado_ocorrido)){?>
		                         <tr>
										    <?php $id = $row_ocorrido["id"]; ?>

										<td class="text-center">
											<?php echo "<input type='checkbox' name='id_ocorrencia[$id]' value='1'>" ?>
										</td>


										
										<td class="text-center"><?php echo $row_ocorrido["id"]; ?></td>
										<td class="text-center"><?php echo $row_ocorrido["unidade"]; ?></td>
										<td class="text-center"><?php echo $row_ocorrido["setor"]; ?></td>
										<td class="text-center"><?php echo $row_ocorrido["tipo"]; ?></td>
										<td class="text-center"><?php echo $row_ocorrido["data"]; ?></td>
                                        <td class="text-center"><?php echo $row_ocorrido["hora"]; ?></td>
                                        <td class="text-center"><?php echo $row_ocorrido["datahora"]; ?></td>
                                     

                                 <td class="text-center">								
											<a href="#">
												<span class="glyphicon glyphicon-eye-open text-primary" aria-hidden="true"></span>
											</a>
											<a href="#">
												<span class="glyphicon glyphicon-pencil text-warning" aria-hidden="true"></span>
											</a>
											<a href="#">
												<span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
											</a>

  
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modalocorrencia1<?php echo $row_ocorrido["id"]; ?>" >Visualizar</button>


  

           </td>
 
  </td>
</tr>

</form>
					        <form action="matriz.php" method="POST">
                   
					<!-- começo Modal -->
					<div class="modal fade" id="Modalocorrencia1<?php echo $row_ocorrido["id"]; ?>" tabindex="-1" aria-labelledby="ModalocorrenciaLabel" aria-hidden="true">
					  <div class="modal-dialog" style="max-width: 100%;"role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title text-center" id="ModalocorrenciaLabel">Evento Notificado: <?php echo $row_ocorrido['tipo']; ?></h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
       
                          <?php echo $row_ocorrido["id"]; ?><br>
                        <b>Notificador:</b><?php echo $row_ocorrido['assinatura']; ?><P>
                        <p><b>Unidade:<p></p></b><?php echo $row_ocorrido['unidade']; ?></p>
                        <p><b>Quando ocorreu:<P></b><?php echo $row_ocorrido['data']; ?>
                        <?php echo $row_ocorrido['hora']; ?></p>

                        <b>Quando foi notificado:<P></p></b>
                        <?php echo $row_ocorrido['datahora']; ?><p></p>
                        <b>Ocorrido:<P></p></b> <?php echo $row_ocorrido['ocorrencia']; ?><p></p>
                        <b>Afetou Paciente?<P></p></b><?php echo $row_ocorrido['afetou_paciente']; ?><p></p>
                        <b>Nome do Paciente Afetado:<P></p></b><?php echo $row_ocorrido['paciente']; ?><p></p>
                        <b>Setor notificado:<P></p></b><?php echo $row_ocorrido['setor']; ?><P></P>
                        <b>Tipo:<P></p></b><?php echo $row_ocorrido['tipo']; ?><p></p>
                        <b>Especificação:<P></p></b><?php echo $row_ocorrido['ocorrido']; ?><p></p>
                        <b>Descrição :</b><?php echo $row_ocorrido['descricao']; ?><P>
                       
                         <font color="#ff0000"> <b>Informações do Medicamento:<P></p></b></font>

                        <b>Medicamento:</b><?php echo $row_ocorrido['medicamento']; ?><br>
                        <b>Lote:</b><?php echo $row_ocorrido['lote']; ?><br>
                        <b>Validade:</b><?php echo $row_ocorrido['validade']; ?><p></p>
                           

                        <font color="#ff0000"><b>Informações Troca de sistema equivocada:<P></p></b></font>
                        <b>Nome do paciente em diálise:</b><?php echo $row_ocorrido['paciente_dialise']; ?><br>
                        <b>Nascimento paciente em diálise:</b><?php echo $row_ocorrido['nascimento_dialise']; ?><br>
                        <b>Nome paciente do capilar de origem:</b><?php echo $row_ocorrido['paciente_capilar']; ?><br>
                        <b>Nascimento paciente do capilar de origem :</b><?php echo $row_ocorrido['nascimento_capilar']; ?>|<br>
                        <b>Tempo que diálisou :</b><?php echo $row_ocorrido['tempodedialise']; ?><P></P>
                        

                            


                        	
                   

                              

                 <?php
                    
                           $matrizunica = 'SELECT * FROM matrizanotifica WHERE id_ocorrencia ='.$row_ocorrido["id"];
                           $resultado_matrizunica = mysqli_query($conn, $matrizunica);
                           $row_matriz = mysqli_fetch_assoc($resultado_matrizunica);


                  ?>
                          
        
                                    
 

	  <span style=" position: absolute; top: 0px; left: 900px; width:100px; height: 100px; ">
    <label for="recipient-name" class="col-form-label"></label>
            <input type="text" class="form-control" name = "idocorrencia"value="<?php echo $row_ocorrido["id"]; ?>" hidden="true">
    </span><p></p>


     
     <label for="recipient-name" class="col-form-label"></label>
            <input type="text" class="form-control" name = "idmatriz" value="<?php echo $row_matriz["id_matriz"]; ?>" hidden="true">
    </span><p></p>

   <span style=" position: absolute; top: 20px; left: 700px; width:100px; height: 100px; ">
 Data:<br><input type="text"class="mb-22"id="data-whateverdata" name = "datamatriz"placeholder="data"value="<?php echo $row_matriz["datamatriz"]; ?>"> ><br>
    </span><p></p>


    <span style=" position: absolute; top: 85px; left: 700px; width:500px; height: 100px; ">
    <textarea class="form-control" placeholder="Desfecho do incidente" id="desfecho" name ="desfecho" ><?php echo $row_matriz["desfecho"]; ?></textarea><br>
    </span><p></p>

     <span style=" position: absolute; top: 200px; left: 700px; width:500px; height: 100px; ">
  <textarea class="form-control" placeholder="Identificação de causas potenciais" id="causaspotenciais" name ="causaspotenciais" style="height: 100px"><?php echo $row_matriz["identificacao_causas"]; ?></textarea><br>
    </span><p></p>


     <span style=" position: absolute; top: 310px; left: 700px; width:500px; height: 100px; ">
  <textarea class="form-control" placeholder="Identificação das causas e confirmação da causa raiz" id="causaraiz" name="causaraiz" style="height: 100px"><?php echo $row_matriz["analise_causaraiz"]; ?></textarea><br>
    </span><p></p>

     <span style=" position: absolute; top: 420px; left: 700px; width:300px; height: 100px; ">
    Causa Raiz:<br><input type="text"class="mb-22"id="raiz" name= "raiz"placeholder="Causa Raiz" value = "<?php echo $row_matriz["causa_raiz"]; ?>"><br>
  </span><p></p>
 
 <span style=" position: absolute; top: 480px; left: 700px; width:500px; height: 100px; ">
  Plano de implementação e acompanhamento:
   </span>
  
   <span style=" position: absolute; top: 490px; left: 700px; width:100px; height: 100px; ">
   <br><input type="text"class="mb-3" id ="oque?"name="oque" placeholder="O que? (What?)" value = "<?php echo $row_matriz["oque"]; ?>"><br>
  </span><p></p>

  <span style=" position: absolute; top: 490px; left: 890px; width:100px; height: 100px; ">
    <br><input type= "text" class="mb-3"id="quem"name="quem"placeholder="Quem?(Who?)" value= "<?php echo$row_matriz[ "quem"]; ?>"><br>
    
</span><p></p>

 <span style=" position: absolute; top:490px; left:1080px; width:100px; height: 100px; ">
        <br><input type= "text" class="mb-3"id="quando"name="quando"placeholder="Quando?(When?)" value="<?php echo $row_matriz["quando"]; ?>"><br>
</span><p></p>

 <span style=" position: absolute; top:500px; left:2000px; width:100px; height: 100px; ">
        <br><input type= "text" class="mb-3"id="onde"name="onde"placeholder="onde?(Where?)" value="<?php echo $row_matriz["onde"]; ?>"><br>
</span><p></p>

 <span style=" position: absolute; top:500px; left:2020px; width:100px; height: 100px; ">
        <br><input type= "text" class="mb-3"id="quando"name="quanto"placeholder="Quanto?(Where?)" value="<?php echo $row_matriz["onde"]; ?>"><br>
</span><p></p>


 <span style=" position: absolute; top: 85px; left: 700px; width:500px; height: 100px; ">
    <textarea class="form-control" placeholder="Desfecho do incidente" id="acoes" name ="acoes" ><?php echo $row_matriz["desfecho"]; ?></textarea><br>
    </span><p></p>




<span style=" position: absolute; top:590px; left:700px; width:100px; height: 100px; ">

<button type="submit" class="btn btn-danger">Salvar </button>
</span>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


    <!-------- encerro modal matriz---------> 
                                                
                                <?php } ?>
   
                                 <?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</form>


			<?php
			if(!isset($_POST['data'])){
				//Verificar pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
				?>
				<nav class="text-center">
					<ul class="pagination">
						<li>
							<?php 
								if($pagina_anterior != 0){
									?><a href="consulta.php?link=50&pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a><?php
								}else{
									?><span aria-hidden="true">&laquo;</span><?php
								}
							?>
						</li>
						<?php
							//Apresentar a paginação
							for($i = 1; $i < $num_pagina + 1; $i++){
								?>
									<li><a href="consulta.php?link=50&pagina=<?php echo $i; ?>">
										<?php echo $i; ?>
									</a></li>
								<?php
							}
						?>
						<li>
							<?php 
								if($pagina_posterior <= $num_pagina){
									?><a href="consulta.php?link=50&pagina=<?php echo $pagina_posterior; ?>" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a><?php
								}else{
									?><span aria-hidden="true">&raquo;</span><?php
								}
							?>
						</li>
					</ul>
				</nav>
			<?php } ?>
		</div>
  


 </body>
 </html>







 