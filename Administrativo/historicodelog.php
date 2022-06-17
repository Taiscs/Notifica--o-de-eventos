<?php
	session_start();
	include_once('conexao.php');
 ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>ACESSOS CSB</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	<head>
	<body>
		<?php
			if(isset($_POST['nome'])){
				$pesquisar = $_POST['nome'];
				//Selecionar  os itens da página
				$result_log = "SELECT * FROM log WHERE acao LIKE '%$pesquisar%' LIMIT 30";
				$resultado_log = mysqli_query($conn , $result_log);				
			}else{
				//Verificar se esta sendo passado na URL a página atual, senão é atribuido a pagina
				$pagina=(isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
				
				//Selecionar todos os itens da tabela 
				$result_log = "SELECT * FROM log";
				$resultado_log = mysqli_query($conn , $result_log);
				
				//Contar o total de itens
				$total_log = mysqli_num_rows($resultado_log);
				
				//Seta a quantidade de itens por página
				$quantidade_pg = 20;
				
				//calcular o número de páginas 
				$num_pagina = ceil($total_msg_contatos/$quantidade_pg);
				
				//calcular o inicio da visualizao	
				$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
				
				//Selecionar  os itens da página
				$result_log = "SELECT * FROM log limit $inicio, $quantidade_pg";
				$resultado_log = mysqli_query($conn , $result_log);
				$total_msg_contatos = mysqli_num_rows($resultado_log);
			}
		?>





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
		<div class="container" role="main">
			<div class="page-header">
				<h1>Historico de acesso </h1>
			</div>
			<form class="form-horizontal" method="POST" action="">
				<div class="form-group">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-3">
						<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="ID DA MATRIZ ALTERADA" value="">
					</div><p></p>
					<div class="col-sm-2">
						<button type="submit" class="btn btn-info">Pesquisar</button>
					</div>
				</div>
			</form>	<hr>
			<form method="POST" action="gerar_planilha_especifica.php">
			
					</div>
				</div>
				<div class="container">
					<div class="col-md-9">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th class="text-center">LOGIN</th>
									<th class="text-center">IP</th>
									<th class="text-center">ID DA MATRIZ ALTERADA</th>
									<th class="text-center">DATA DA ALTERAÇÃO</th>
								
								</tr>
							</thead>
							<tbody>
								<?php while($row_log = mysqli_fetch_assoc($resultado_log)){?>
									
										</td>
										<td class="text-center"><?php echo $row_log["id_log"]; ?></td>
										<<td class="text-center"><?php echo $row_log["login"]; ?></td>
										<td class="text-center"><?php echo $row_log["ip"]; ?></td>
										<td class="text-center"><?php echo $row_log["acao"]; ?></td>
										<td class="text-center"><?php echo $row_log["data"]; ?></td>								
											<a href="#">
												<span class="glyphicon glyphicon-eye-open text-primary" aria-hidden="true"></span>
											</a>
											<a href="#">
												<span class="glyphicon glyphicon-pencil text-warning" aria-hidden="true"></span>
											</a>
											<a href="#">
												<span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
											</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</form>
			<?php
			if(!isset($_POST['nome'])){
				//Verificar pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
				?>
				<nav class="text-center">
					<ul class="pagination">
						<li>
							<?php 
								if($pagina_anterior != 0){
									?><a href="administrativo.php?link=50&pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
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
									<li><a href="administrativo.php?link=50&pagina=<?php echo $i; ?>">
										<?php echo $i; ?>
									</a></li>
								<?php
							}
						?>
						<li>
							<?php 
								if($pagina_posterior <= $num_pagina){
									?><a href="administrativo.php?link=50&pagina=<?php echo $pagina_posterior; ?>" aria-label="Next">
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
