<?php
namespace Microstar\Controllers\Route;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Microstar\Banco\Database;
use Microstar\Entity\Email;

require __DIR__."/../../../vendor/autoload.php";



abstract class ControllerEmail {

    public function EnviarEmail(array $info, array $emails)
    {

     extract($info);
   

        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'clayton.a.s.f@gmail.com';
        $mail->Password = 'Maria1997*'; 
        $mail->Port = 587;
        
        
        $mail->setFrom('clayton.a.s.f@gmail.com');
        //$mail->addReplyTo('no-reply@email.com.br');
        
         $mail->addAddress("{$email}");
        
      
        
        // $mail->addAddress("$email");
         foreach($emails as $emailEnvio){
          
          if($emailEnvio->getHidden() === true){
            echo "copia oculta";
             $mail->addBCC("{$emailEnvio->getEmail()}", 'Cópia Oculta');
          }else{
          
           $mail->addCC("{$emailEnvio->getEmail()}", 'Cópia');
          }
      
         }
        
        //$mail->addBCC('email@email.com.br', 'Cópia Oculta');
        
        
        $mail->isHTML(true);
        $mail->Subject = "Chamado Microstar({$position})";
        $mail->Body    =  "<strong>Nome</strong>: {$attendance}<br>
                           <strong>E-mail</strong>: {$email}<br>
                           <strong>Empresa</strong>: {$company}<br>
                           =====================================================
                         
                           <h2><strong>Status:</strong> {$position}</h2> <br>
                          
                           <h3><strong>Descrição do Cliente:</strong></h3> {$obs}<br>
                          
                          -------------------------------------------------------------------------------------------------------------
                           <h3><strong>Conclusão:</strong></h3> {$concluded}<br><br>
                         ---------------------------------------------------------------------------------------------------------------
                          <br><i> Att,{$attendance}</i>.
                            "
        
                                           ;
        //$mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';
        $mail->addAttachment('/tmp/image.jpg', 'nome.jpg');
        
       
        if(!$mail->send()) {
          echo 'Não foi possível enviar a mensagem.<br>';
          echo 'Erro: ' . $mail->ErrorInfo;
        }  
        
        switch($position){
            case'Concluido':
              $_SESSION['message'] = "Chamado Concluido com Sucesso";
              $_SESSION['class'] = "success";
              header('Location: /chamado-concluido');
              break;
              case'Visita Técnica':
                $_SESSION['message'] = "Solicitação de Visita Técnica realizada";
                $_SESSION['class'] = "danger";
                header('Location: /chamado-visita-tecnica');
                break;
                  default:
                  header('Location: /atendimento');
                   break;
        }
       
       
    }


}