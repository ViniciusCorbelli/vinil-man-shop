<?php 

namespace App\Controllers;
use App\Core\App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class ContatoController{

    public function sendMail()
    {
        try{

            $destinatario = "";
            $nome = $_POST['name'];
            $email = $_POST['email'];
            $assunto = $_POST['subject'];
            $mensagem = $_POST['text'];

        }catch(Exception $e)
        {
            $e->getMessage();
        }
    }

}

?>