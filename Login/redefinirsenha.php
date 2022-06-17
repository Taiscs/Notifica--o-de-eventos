 <? include_once("conexao.php");

 //incluir o phpMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



//incluir o arquivo do composer 
require 'vendor/autoload.php';


$email = new PHPMailer(true);




 try {
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->CharSet = 'UTF-8';
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '80f346e286ca66';
            $mail->Password = 'fadba192390ea4';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 2525;

            $mail->setFrom('taiscampos2118@gmail.com', 'Qualidade Grupo CSB');
            $mail->addAddress('taiscampos2118@gmail.com', 'Taís');
            
            $mail->isHTML(true);                                 
            $mail->Subject = 'um Novo evento foi notificado';
            $mail->Body = "Olá,  <b>Unovo evetento foi notificado para sua unidade </b>.<br>Verifique o Sistema.";
            $mail->AltBody = "Olá Cesar, Sua solicitação sobre o curso de PHP Developer.\nTexto da segunda linha.";

            $mail->send();
            
            echo 'E-mail enviado com sucesso!<br>';
        } catch (Exception $e) {
            echo "Erro: E-mail não enviado com sucesso. Error PHPMailer: {$mail->ErrorInfo}";
            //echo "Erro: E-mail não enviado com sucesso.<br>";
        }
        ?>



<?php //verifico se usuario clicou em definir
 
 if (isset($_POST[REDEFINIR])){

//recebo o que ele digitou no campo email pelo metodo POST
  $email = ($_POST['email']);

//verifico se o email é válido

  if (filter_var($email,FILTER_VALIDATE_EMAIL)){
$error [] = "E-mail inválido.";

} 
	
if (count($error) == 0) {

//verifico se existe este email no banco 
$result_usuario = "SELECT FROM tblusuario WHERE login == '$email'";
//  a senha será a hora da atualização criptografada por md5 divido o valor em 6 digitos 

$novasenha = substr(md5(time()), 0, 6);
$nscriptografada = md5(md5($novasenha));


//se não houve erro executo o comando de nova senha 

if (mail($email, "Sua nova senha", "":.$novasenha)) {
	# code...

//atualizo no banco com update

$result_usuario  = "UPDATE tblusuario SET senha = '$nscriptografada' WHERE login = '$email' ";


$resultado_usuario = mysqli_query($conn, $result_usuario) or die (mysqli_error($conn));



 }

}


?>

