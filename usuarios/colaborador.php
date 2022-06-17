<?php
  session_start();
  include_once("conexao.php"); 
  
?>
<!DOCTYPE html>
<html>
  
  <link href="style.css" rel="stylesheet">
  <body>

    <div class="limiter">
      <div class="container-login">
        <div class="div-login">
          <form class="login-form" action="/submit.php" method="post">
            <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQFLruYVvw8iHw/company-logo_200_200/0/1542371371873?e=2159024400&v=beta&t=3J_EMAnVCL3uffp_nK6mz0Ge9_mbV2b-_Mh_DQAf1rY" width="100%" height="300px" style="vertical-align:middle;margin:20px 0px;position:center"/>
            <div class="label" style="margin-bottom:10px;margin-top:10px">
              <label style="color: #800000;text-align:center;font-size:30px;font-weight:bold;font-family: Arial, Helvetica, sans-serif"> <b>Escolha a unidade</b>
              </label>
            </div>   
            <?php

                $id = $_SESSION['Id'];       
                $result_tblusuario = "SELECT * FROM tblusuario where id= '{$id}'";
                $resultado_tblusuario  = mysqli_query($conn, $result_tblusuario);
                while($row_tblusuario = mysqli_fetch_assoc($resultado_tblusuario)){
                    $unidade= $row_tblusuario["unidade"];
                    $unidade1= $row_tblusuario["unidade1"];
                    $unidade2= $row_tblusuario["unidade2"];
                    $unidade3= $row_tblusuario["unidade3"];
                    $unidade4= $row_tblusuario["unidade4"];
                    $perfil= $row_tblusuario["perfil"];
                    $usuario =  $row_tblusuario["nome"];


                }


            ?>

              <ul class="nav flex-column">

                <?php
                  echo $usuario;
               

                if ($unidade=="Matriz") {
                    # code...
                    echo "<li class='nav-item'><a class='nav-link active' id='uni2' href='consultamatriz.php'> Matriz</a></li>";
                    
                  }
                     if ($unidade2=="Rio_vermelho") {
                    echo "<li class='nav-item'><a class='nav-link active' id='uni1' href='consultariovermelho.php'>Rio vermelho</a></li>";
                      
                  }
                   if ($unidade1=="Convênios") {
                    echo "<li class='nav-item'><a class='nav-link active' id='uni1' href='consultaconvenios.php'>Convênios</a></li>";
                      
                  }
                  
                  if ($unidade2==" Mont_serrat") {
                    # code...
                    echo " <li class='nav-item'><a class='nav-link active' id='uni3' href='consultarmontserrat.php'>Mont Serrat</a>  </li>";
                    

                  }
               
                  if ($unidade4=="Santo_Estevao") {
                    # code...
                    echo "<li class='nav-item'><a class='nav-link active' id='uni5' href='consultasantoestevao.php'>Santo estevão</a> </li>";
                    
                  }
                  if ($perfil=="Administrador") {
                    # code...
                    echo "<li class='nav-item'><a class='nav-link active' id='uni5' href='consulta.php'>Administrativo</a>   </li>";
                    
                  }


            ?>
                
               
               
                

                 

              </ul>
            
              <button type="button" class="backbtn"> Voltar </button>

          </form>

        </div>
      </div>
    </div>
      
    <script src="easy_background.js"></script>
    <script>
      easy_background("body",
        {
          slide: ["img/1.jpg", "img/2.jpg", "img/3.jpg"],
          delay: [10000, 10000, 10000, 10000, 10000]
        }
      );
    </script>
    
  </body>
</html>
