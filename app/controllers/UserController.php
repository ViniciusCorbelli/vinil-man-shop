<?php

namespace App\Controllers;

use app\core\App;
use Exception;

class UserController extends LoginController
{

    public function index()
    {
        session_start();
        $this->verifyLogged();

        $users = App::get('database')->selectAllUsers();

        return view('admin/usuario',[
            'users' => $users
        ]);
    }

    public function create()
    {
        session_start();
        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);


        //Tratando a criação de senhas
        $password = $_POST['password']; //Senha
        $password_controller = $_POST['password-controller']; //Confirme sua senha
        $email = $_POST['email'];
        $nome = $_POST['name'];

        if(empty($password) || empty($password_controller) || empty($email) || empty($nome))
        {   
            $_SESSION['erros'][] = "Os Campos não podem ficar em branco e devem conter um formato válido";
            return redirect('admin/usuarios');
        }
        else if($password == $password_controller)
        {
            $user = App::get('database')->search('users', ['email' => $_POST['email']]);

            if (count($user) > 0) {
                $_SESSION['erros'][] = "O Email inserido já existe no sistema!";
                return redirect('admin/usuarios');
            } else {
    
                $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
                $parameters = ([
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' => $hash
                ]);
    
                App::get('database')->insert('users', $parameters);

                $_SESSION['sucessos'][] = "Usuário criado com sucesso!";   
                return redirect('admin/usuarios');
            }
        } else {
            $_SESSION['erros'][] = "Algo inesperado aconteceu!";

            return redirect('admin/usuarios');
        }
    }

    public function edit()
    {
        session_start();
        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);

        if(empty($_POST['name']))
        {
            $_SESSION['erros'][] = "Você deve inserir um nome!";
        }
        if(empty($_POST['email']))
        {
            $_SESSION['erros'][] = "Você deve inserir um email válido!";
        }

        try{
            $parameters = ([
                'name' => $_POST['name'],
                'email' => $_POST['email']
            ]);
    
            App::get('database')->edit('users', $parameters, $_POST['id']);
                
            $_SESSION['sucessos'][] = "Usuário editado com sucesso!";    

            return redirect('admin/usuarios');
        }catch(Exception $e)
        {
            $e->getMessage();

            $_SESSION['erros'][] = "Algo inesperado aconteceu!";

            return redirect('admin/usuarios');
        }

    }

    public function delete()
    {
        session_start();
        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);


        try{
            $id = $_POST['id'];

            App::get('database')->delete('users', $id);
            
            $_SESSION['sucessos'][] = "Usuário deletado com sucesso!";

            return redirect('admin/usuarios');
        }catch(Exception $e)
        {
            $e->getMessage();

            $_SESSION['erros'][] = "Algo inesperado aconteceu!";

            return redirect('admin/usuarios');
        }
    }
}
