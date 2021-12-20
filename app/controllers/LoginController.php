<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{

    public function fazLogin()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {//Verificar se a sessão não já está aberta.
            session_start();
        }
        unset($_SESSION["erro"]);

        if ($_POST['email'] && $_POST['senha']) {
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);

            $usuario = App::get('database')->SelectLogin($email);
            
            if(!empty($usuario)){

                $usuario = $usuario[0];
            

                if($senha == $usuario->senha){

                    $_SESSION['email'] = $email;

                    return redirect('dashboard');
    
                }else{
                    $_SESSION["erro"] = "Senha inválida";
                    return redirect('login');
                }

            }else{
                $_SESSION["erro"] = "E-mail inválido";
                return redirect('login');
            }
        }else{
            $_SESSION["erro"] = "Os campos devem ser preenchidos!";
        }
        
        return redirect('login');
    }

    public static function verifySession(){

        if (session_status() !== PHP_SESSION_ACTIVE) {//Verificar se a sessão não já está aberta.
            session_start();
        }

      
        if(!$_SESSION["email"]){
           return redirect("login");
        }
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();

        return redirect("login");

    }
}