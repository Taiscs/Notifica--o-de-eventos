<div class = "text-center">
<b><h1>ANÁLISE GRÁFICA</h1></b>
</div>

 <?php // abrindo conexao php  
 include_once("conexao.php");

 //Gerando variaveis que resultam no grafico 
$a = 0;
$b = 0;
$c = 0;
$d = 0;
$e = 0;

$dados_unidades = [];
$dados_ocorrencias = [];
//percorre o banco 
$result_unidade = "SELECT * FROM ocorrencia ";
$resultado_unidade= mysqli_query($conn, $result_unidade);
while($row_unidade = mysqli_fetch_assoc($resultado_unidade)){
  switch($row_unidade['unidade']){
    case "Matriz":
      $a++;
      break;
    case "Convênios":
      $b++;
      break;
    case "Mont_serrat":
      $c++;
      break;
    case "Rio_vermelho":
      $d++;
      break;
    case "Santo_Estevao":
      $e++;
      break;
    }
}

$dados_unidades = [$a, $b, $c, $d, $e];
$a = $b = $c = $d = $e = 0;



$f = 0;
$g = 0;
$h = 0;
$i = 0;
$j = 0;
$l = 0;
$m = 0;

$result_tipo = "SELECT * FROM ocorrencia ";
$resultado_tipo = mysqli_query($conn, $result_tipo);
while($row_tipo = mysqli_fetch_assoc($resultado_tipo)){
  switch($row_tipo['tipo']){
    case "Restrição de Acessos":
      $f++;
      break;
    case "Falha do Sistema de TI":
      $g++;
      break;
    case "Armazenamento Físico da Informação":
      $h++;
      break;
    case "Falha do operador de dados":
      $i++;
      break;
    case "Irregularidade em contratos":
      $j++;
      break;
    case "Falha de processo":
      $l++;
      break;
    case "Outro":
      $m++;
      break;
    }
}

// trás as informações para o gráfico.

$dados_ocorrencias = [$f, $g, $h, $i, $j, $l, $m];

$n=0; 
$o=0;
$p=0;
$q=0;
$r=0;
$s=0;
$t=0;
$u=0;
$v=0;
$w=0;
$x=0;
$y=0;
$z=0;
$aa=0;
$ab=0;
$ac=0;
$ad=0;
$ae=0;
$af=0;
$ag=0;
$ah=0;
$al=0;
$am=0;
$an=0;
$ao=0;
$ap=0;
$aq=0;
$ar=0;
$as=0;
$at=0;
$au=0; 
$av=0;
$aw=0;
$ax=0;
$ay=0;
$az=0;
$ab=0;
$bb=0;
$bc=0;
$bd=0;





// Busca as informações no banco e armazena nas variáveis 
$result_fato = "SELECT * FROM ocorrencia ";
$resultado_fato = mysqli_query($conn, $result_fato);
while($row_fato = mysqli_fetch_assoc($resultado_fato)){
  switch($row_fato['setor']){
    case "Dados pessoais e identificáveis":
      $n++;
      break;
    case "Dados identificados":
      $o++;
      break;
    case "Dados sensíveis":
      $p++;
      break;
    case "Contrato Tercerizado":
      $q++;
      break;
    case "Contrato PJ":
      $r++;
      break;
    case "Contrato com prestadores de serviço":
      $s++;
      break;
    case "Farmácia":
      $t++;
      break;
        $u++;
      break;
    case "Faturamento":
      $v++;
      break;
    case "Financeiro":
      $w++;
      break;
    case "Gestão administrativa":
      $x++;
      break;
    case "Gestão de equipamentos":
      $y++;
      break;
    case "Gestão de pessoas":
      $z++;
      break;
    case "Gestão de Suprimentos":
      $aa++;
      break;

         $ab++;
      break;
    case "Higienização":
      $ac++;
      break;
    case "Recepção":
      $ad++;
      break;
    case "Faturamento":
      $ae++;
      break;
    case "Sistema de informação do paciente":
      $af++;
      break;
    case "Terapia Diálitica:HD":
      $ag++;
      break;
    case "Terapia Diálitica:DP":
      $ah++;
      break;

      $al++;
      break;
    case "Assistencia Hemoterápica":
      $am++;
      break;
    case "CME":
      $an++;
      break;
    case "Diagnóstico":
      $ao++;
      break;
    case "Gestão de Suprimentos":
      $ap++;
      break;
    case "Processamento de roupas":
      $aq++;
      break;
    case "capilar":
      $ar++;
      break;
       $as++;
      break;
    case "Diluição na administração do medicamento":
      $at++;
      break;
    case "Dose inadequada na administração do medicamento":
      $au++;
      break;
    case "Infiltração na infusão da medicação":
      $av++;
      break;
    case "Medicacao vencida":
      $aw++;
      break;
    case "Medicação administrada em via errada":
      $ax++;
      break;
    case "Paciente não medicado, mas com prescrição":
      $ay++;
      break;

      $az++;
      break;
    case "Reação adversa ao medicamento":
      $ab++;
      break;
    case "Erro no aprazamento":
      $bb++;
      break;

   case "Outro":
      $bc++;
      break;


      case "Desenvolvimento impróprio/Inadequado do projeto":
      $bd++;
      break;


    }
}

// trás as informações para o gráfico.

$dados_ocorrido = [$n ,$o, $p ,$q ,$r,$s,$t,$u,$v,$w,$x,$y,$z,$aa,$ab,$ac,$ad,$ae, $af,$ag,$ah, $al, $am, $an,$ao,$ap, $aq,$ar,$as,$at,$au, $av,$aw,$ax,$ay,$az,$ab,$bb,$bc,$bd];




$sim = 0;
$nao = 0;


$result_paciente = "SELECT * FROM ocorrencia ";
$resultado_paciente = mysqli_query($conn, $result_paciente);
while($row_paciente = mysqli_fetch_assoc($resultado_paciente)){
  switch($row_paciente['afetou_paciente']){
    case "Sim":
     $sim++;
      break;
    case "Não":
      $nao++;
      
    }
}

// trás as informações para o gráfico.

$dados_paciente = [$sim, $nao];

$anonimo = 0;
$assinado = 0;


$result_identificado = "SELECT * FROM ocorrencia ";
$resultado_identificado = mysqli_query($conn, $result_identificado);
while($row_identificado = mysqli_fetch_assoc($resultado_identificado)){
  switch($row_identificado['assinado']){
    case "Não":
     $anonimo++;
      break;
    case "Sim":
     $assinado++;
      
    }
}

// trás as informações para o gráfico.

$dados_paciente = [$anonimo,$assinado];









?>
<html>
  <head>

  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Matriz',  <?=$dados_unidades[0]?>], //copia $a
          ['Convênios',<?=$dados_unidades[1]?>], //copia $b
          ['Mont_serrat',<?=$dados_unidades[2]?>],//copia $c
          ['Rio_vermelho', <?=$dados_unidades[3]?>], //copia $d
          ['Santo_Estevao',<?=$dados_unidades[4]?>],
          
        ]);
          //titulo do gráfico
        var options = {
          title: 'Ocorrencias por unidade'
        };

        var chart = new google.visualization.PieChart(document.getElementById('graficounidade'));

        chart.draw(data, options);
      }


    </script>
  </head>
  <body>
      <span style=" position: absolute; top: 60px; left: 0px; width:600px; height: 800px; ">
    <div id="graficounidade" style="width: 600px; height: 700px; left: 30px;"></div>
  </span>
  </body>
</html>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Irregularidade em contratos', <?=$dados_ocorrencias[0]?>],
          ['Falha do Sistema de TI', <?=$dados_ocorrencias[1]?>],
          ['Restrição de Acessos',  <?=$dados_ocorrencias[2]?>],
          ['Armazenamento Físico da Informação', <?=$dados_ocorrencias[3]?>],
          ['Falha do operador de dados',    <?=$dados_ocorrencias[4]?>],
          ['Falha de processo',    <?=$dados_ocorrencias[5]?>],
          ['Outro',    <?=$dados_ocorrencias[6]?>]
        ]);

        var options = {
          title: 'Tipo de ocorrência',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('graficotipo'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <span style=" position: absolute; top: 150px; left: 490px; width:600px; height: 800px; ">
    <div id="graficotipo" style="width: 600px; height: 500px;"></div>
  </span>
  </body>
</html>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Language', 'Speakers (in millions)'],
          ['Dados pessoais e identificáveis', <?=$dados_ocorrido[0]?>], ['Faturamento', <?=$dados_ocorrido[7]?>], ['Gestão de pessoas', <?=$dados_ocorrido[11]?>],
          ['Dados identificados', <?=$dados_ocorrido[1]?>], ['Financeiro', <?=$dados_ocorrido[8]?>], ['Gestão de Suprimentos', <?=$dados_ocorrido[12]?>],
          ['Dados  sensíveis', <?=$dados_ocorrido[2]?>], ['Gestão administrativa', <?=$dados_ocorrido[9]?>], ['Higienização', <?=$dados_ocorrido[13]?>],
          ['Contrato Tercerizado', <?=$dados_ocorrido[3]?>], ['Gestão de equipamentos', <?=$dados_ocorrido[10]?>], ['Recepção', <?=$dados_ocorrido[14]?>],
          ['Contrato PJ', <?=$dados_ocorrido[4]?>], ['Terapia Diálitica:HD', <?=$dados_ocorrido[15]?>],
          ['Contrato com prestadores de serviço', <?=$dados_ocorrido[5]?>], ['Sistema de informação do paciente', <?=$dados_ocorrido[16]?>], ['Terapia Diálitica:DP', <?=$dados_ocorrido[17]?>],
          ['Assistencia Hemoterápica', <?=$dados_ocorrido[18]?>], ['CME', <?=$dados_ocorrido[19]?>], ['Diagnóstico', <?=$dados_ocorrido[20]?>], ['Gestão de Suprimentos', <?=$dados_ocorrido[21]?>], ['Processamento de roupas', <?=$dados_ocorrido[22]?>], ['capilar', <?=$dados_ocorrido[23]?>],['Diluição na administração do medicamento', <?=$dados_ocorrido[24]?>], ['Dose inadequada na administração do medicamento', <?=$dados_ocorrido[25]?>],['Infiltração na infusão da medicação', <?=$dados_ocorrido[26]?>], ['Medicamento com prazo de validade vencido', <?=$dados_ocorrido[27]?>], ['Medicação administrada em via errada', <?=$dados_ocorrido[28]?>],['Paciente não medicado, mas com prescrição', <?=$dados_ocorrido[29]?>], ['Reação adversa ao medicamento', <?=$dados_ocorrido[30]?>],['Erro no aprazamento', <?=$dados_ocorrido[31]?>],
            ['Outro', <?=$dados_ocorrido[32]?>], ['Desenvolvimento impróprio/Inadequado do projeto', <?=$dados_ocorrido[33]?>]
        ]);

        var options = {
          title: 'Ocorrência',
          legend: 'none',
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('graficoocorrido'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

    <span style=" position: absolute; top: 130px; left: 1000px; width:400px; height: 500px; ">
    <div id="graficoocorrido" style="width: 400px; height: 500px;"></div>
     </span>>

  </body>
</html>



<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Sim', <?=$dados_paciente[0]?>],
          ['Não', <?=$dados_paciente[1]?>],
  
        ]);

        var options = {
          title: 'Afetou Paciente ?',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('pacienteafedato'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
     <span style=" position: absolute; top: 620px; left: 0px; width:600px; height: 500px; ">
    <div id="pacienteafedato" style="width: 600px; height: 500px;"></div>
  </span>
  </body>
</html>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Pac Man', 'Percentage'],
          ['Sim', <?=$dados_paciente[0]?>],
          ['Não', <?=$dados_paciente[1]?>]
        ]);

        var options = {
           title: 'As Notificações foram assinadas ?',
          legend: 'Noticações anônimas',
          pieSliceText: 'Noticações Assinadas',
          pieStartAngle: 135,
          tooltip: { trigger: 'none' },
          slices: {
            0: { color: 'green' },
            1: { color: 'Red' }
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('pacman'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
     <span style=" position: absolute; top: 620px; left: 500px; width:600px; height: 500px; ">
    <div id="pacman" style="width: 600px; height: 500px;"></div>
  </span>
  </body>
</html>


</body><html>
 <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          [ 'Aspecto a ser melhorado', 'Circustância de risco', 'Evento com dano', 'Evento sem dano', 'Não conformidade', 'Near miss','Outro'],
          ['2004/05',  165,      938,         522,             998,           450,      614.6],
          ['2005/06',  135,      1120,        599,             1268,          288,      682],
          ['2006/07',  157,      1167,        587,             807,           397,      623],
          ['2007/08',  139,      1110,        615,             968,           215,      609.4],
          ['2008/09',  136,      691,         629,             1026,          366,      569.6]
        ]);

        var options = {
          title : 'Ocorrencias por periodo',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Periodo'},
          seriesType: 'bars',
          series: {6: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
     <span style=" position: absolute; top: 1100px; left: 0px; width:100%; height: 500px; ">
    <div id="chart_div" style="width: 900px; height: 500px;"></div>

  </span>
  </body>
</html>






<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Language', 'Speakers (in millions)'],
          ['Assamese', 13], ['Bengali', 83], ['Bodo', 1.4],
          ['Dogri', 2.3], ['Gujarati', 46], ['Hindi', 300],
          ['Kannada', 38], ['Kashmiri', 5.5], ['Konkani', 5],
          ['Maithili', 20], ['Malayalam', 33], ['Manipuri', 1.5],
          ['Marathi', 72], ['Nepali', 2.9], ['Oriya', 33],
          ['Punjabi', 29], ['Sanskrit', 0.01], ['Santhali', 6.5],
          ['Sindhi', 2.5], ['Tamil', 61], ['Telugu', 74], ['Urdu', 52]
        ]);

        var options = {
          title: 'Indian Language Use',
          legend: 'none',
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" span style=" position: absolute; top: 2000px; left: 0px width: 900px; height: 500px;"></div>
    span style=" position: absolute; top: 1100px; left: 0px
  </body>
</html>


  </body>
</html>
</html>