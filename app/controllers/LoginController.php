<?php 

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController{
    
    /*Funções de Login*/
    /*Estou usando essas funções como base https://www.todoespacoonline.com/w/2014/07/login-simples-com-php/ */
    public function makeLogin()
    {
        session_start();
        $_SESSION['erros'] = ([]);

        try {
            if (!isset($_POST['email']) && !empty($_POST['email'])) {
                $_SESSION['erros'][] = "O Campo email não pode ficar vazio ou ter um valor inválido";
                return redirect('login');
            } else if (!isset($_POST['password']) && !empty($_POST['password'])) {
                $_SESSION['erros'][] = "O Campo senha não pode ficar vazio ou ter um valor inválido";
                return redirect('login');
            } else {
                $user = App::get('database')->search('users', ['email' => $_POST['email']]);
                
                if (count(array_keys($user)) == 0) {
                    //die(var_dump($user));
                    $_SESSION['erros'][] = "Não existe usuário cadastrado com este email";
                    return redirect('login');
                } else {

                    $user = $user[0];
                    if (password_verify($_POST['password'], $user->password)) {
                        
                        $this->sessionStart($user);
                        if(isset($_SESSION['logged']) && $_SESSION['logged'])
                        {
                            return redirect('admin');
                        }

                    } else {
                        $_SESSION['erros'][] = "As senhas não coincidem";
                        return redirect('login');
                    }
                }
            }
        } catch (Exception $e) {
            $_SESSION['erros'][] = "{$e->getMessage()}";
        }
    }

    private function sessionStart($user)
    {
        session_cache_expire(180);

        session_start();

        $_SESSION['logged'] = True;

        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

        $_SESSION['hash'] = md5($_SERVER['REMOTE_ADDR']);
    }

    public function verifyLogged()
    {
        $check = md5($_SERVER['REMOTE_ADDR']);
        
        if(!isset($_SESSION))
        {
            session_start();
        }

        if(!isset($_SESSION) || !$_SESSION['logged'] || $check != $_SESSION['hash'])
        {
            return redirect('login-alert');
        }
    }

    public function makeLogout()
    {
        session_start();
        try {
            session_unset();

            session_destroy();
    
            return redirect('');
        }catch(Exception $e)
        {
            $e->getMessage();
            return redirect('/admin');
        }
        
    }
}

?>