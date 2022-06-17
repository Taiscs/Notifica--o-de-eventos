<!DOCTYPE html>
<html>
   <head>


    <?php include_once('conexao.php');
  session_start();?>
  <meta charset="utf-8">
    
    <link href="style.css" rel="stylesheet">
    <html lang="pt-br">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
             <div class="limiter">
       

      <!-- Modal -->
       
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              
             
              <h4 class="modal-title text-center" id="myModalLabel">Recuperar Senha</h4>
            </div>
            <div class="modal-body">
              <P>
             <form method="POST" action="redefinirsenha.php">

 

   
    Email:<br><input type="Email"class="mb-3" id ="email"name="email"placeholder="....@gmail.com"  required><br>
  

<button type="submit" name ="REDEFINIR" class="btn-danger">Redefinir Senha</button>



</form> 
</P>
           
          </div>
        </div>
      </div>    
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    
    <div class="limiter">
      <div class="container-login">
        <div class="div-login">
          <form id="log" action="login.php" method="post">
            <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQFLruYVvw8iHw/company-logo_200_200/0/1542371371873?e=2159024400&v=beta&t=3J_EMAnVCL3uffp_nK6mz0Ge9_mbV2b-_Mh_DQAf1rY" width="100%" height="200px" style="vertical-align:middle;margin:20px 0px;position:center"/>
            <div class="label" style="margin-bottom:10px;margin-top:10px">
              <label style="color:#42a5f5;text-align:center;font-size:30px;font-weight:bold;font-family: Arial, Helvetica, sans-serif"> Login
              </label>
            </div>   
            
            <input type="text" id="login" name="login" placeholder="Digite seu login" />
            <input type="password" id="pass" name="senha" placeholder="Digite sua senha" />
            <button type="submit" id="submeter"> Entrar </button>

            <div class="label">
              <label>
               <div class="label" style=" top:10px; width: 200px; height: 150px;">
     <button type = "button" data-bs-toggle="modal" data-bs-target="#myModal" type="button" class="btn btn-danger" >Esqueci a senha</button>
      </div>
                
                  </td>
                </tr>
               
           </table>
        </div>
      </div>    
    </div>
  
        </div>
      </div>
    </div>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      
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

