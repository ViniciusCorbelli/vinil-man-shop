<?php

namespace App\Controllers;
use app\core\App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class ContatoController
{

    public function sendMail()
    {
        try {
            
            $destinatario = "vinilmanshop@gmail.com";
            $nome = $_POST['name'];
            $email = $_POST['email'];
            $assunto = $_POST['subject'];
            $mensagem = $_POST['body'];
            
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
            
            if(!$mail->send()) {    
                echo 'Não foi possível enviar a mensagem.<br>';
                echo 'Erro: ' . $mail->ErrorInfo;
                return redirect('/site/contato');
            } else {
                echo 'Mensagem enviada.';
                return redirect('/site/contato');
            }

        } catch (Exception $e) {
            $e->getMessage();
        }
    }
}
