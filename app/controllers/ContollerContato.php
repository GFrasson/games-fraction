<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

require 'mailer/PHPMailerAutoload.php';


class ControllerContato
{
    public function index()
    {
        return view('site/projetoContato');
    }

    public function enviar()
    {
        if ($_POST['nome'] && $_POST['email'] && $_POST['telefone']  && $_POST['assunto'] && $_POST['mensagem'])
        {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $assunto = $_POST['assunto'];
            $mensagem = $_POST['mensagem'];
        }
        

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'gamesfraction00@gmail.com';
        $mail->Password = 'gf2021code';
        $mail->Port = 587;

        $mail->setFrom('gamesfraction00@gmail.com', 'Contato');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = $mensagem;
        $mail->AltBody = $email;

        if(!$mail->send()) {
            echo 'Não foi possível enviar a mensagem.<br>';
            echo 'Erro: ' . $mail->ErrorInfo;
        } else {
            echo 'Mensagem enviada.';
        }
    }

    
}