<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class ContatoController 
{

    public function sendMail()
    {
        try {
            
            $_POST['copiaEmail'] = ( isset($_POST['copiaEmail']) ) ? true : null;

            $destinatario = "vinilmanshop@gmail.com";
            $nome = $_POST['name'];
            $email = $_POST['email'];
            $assunto = $_POST['subject'];
            $mensagem = $_POST['body'];
            $copiaEmail = $_POST['copiaEmail'];
            
            $mail = new PHPMailer(); //Instanciando o PHPMailer

            $mail->CharSet = 'UTF-8';

            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;            
            $mail->isSMTP(true); //Informando o protocolo de envio
            $mail->Host = 'smtp.gmail.com'; //Endereço de servidor do Gmail
            $mail->SMTPAuth = true; //Habilitando autenticação
            $mail->SMTPSecure = 'tls'; //Definindo a criptografia a ser utilizada
            /*Dados da conta para realizar o envio*/
            $mail->Username = 'vinilmanshop@gmail.com'; 
            $mail->Password = 'CODEtnv3';

            $mail->Port = 587; //Definindo a porta de envio

            $mail->setFrom($email,$nome); //Definindo quem está enviando o email
            $mail->addAddress($destinatario,'VinilMan Shop'); //Para quem o email é enviado

            /*Escrevendo a mensagem*/
            $mail->isHTML(true);
            $mail->Subject = $assunto;
            $mail->Body = $mensagem;

            $mailCC = $mail; // Possivel Cópia para o email
            
            if(!$mail->send()) {    
                echo 'Não foi possível enviar a mensagem.<br>';
                echo 'Erro: ' . $mail->ErrorInfo;
                return redirect('contato');
            } else {
                echo 'Mensagem enviada.';

                if($copiaEmail)
                {
                    $mailCC->setFrom('vinilmanshop@gmail.com','Vinilman Shop');
                    $mailCC->addReplyTo('vinilmanshop@gmail.com','Vinilman Shop');

                    $mailCC->addAddress($email,$nome);

                    $mailCC->Subject = "Cópia de - {$assunto}";
                    $mailCC->Body = $mensagem;

                    $mailCC->isHTML(true);
                    $mailCC->send();
                }

                return redirect('contato');
            }

        } catch (Exception $e) {
            $e->getMessage();
        }
    }
}
