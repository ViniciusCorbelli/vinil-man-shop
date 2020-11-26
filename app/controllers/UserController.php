<?php

namespace App\Controllers;

use app\core\App;
use Exception;

class UserController
{

    public function index()
    {
        $users = App::get('database')->selectAllUsers();

        return view('admin/usuario',[
            'users' => $users,
            'flag' => '',
            'mensagem' => ''
        ]);
    }

    public function create()
    {
        //Tratando a criação de senhas
        $password = $_POST['password']; //Senha
        $password_controller = $_POST['password-controller']; //Confirme sua senha
        $email = $_POST['email'];
        $nome = $_POST['name'];

        if($password == "" || $password_controller == "" || $email == "" || $nome == "")
        {
            $mensagem = " Todos os campos são obrigatórios";
            $flag = true;
            return redirect('admin/usuarios',[
                'mensagem' => $mensagem,
                'flag' => $flag
            ]);
        }
        else if($password == " " || $password_controller == " " || $email == " " || $nome == " ")
        {
            $mensagem = " Todos os campos são obrigatórios";
            $flag = true;
            return redirect('admin/usuarios',[
                'mensagem' => $mensagem,
                'flag' => $flag
            ]);

        } else if($password == $password_controller)
        {
            $user = App::get('database')->search('users', ['email' => $_POST['email']]);

            if (count($user) > 0) {
                $flag = true;
                $mensagem = "Já existe um usuário registrado com este email";

                return redirect('admin/usuarios',[
                    'mensagem' => $mensagem,
                    'flag' => $flag
                ]);
            } else {
    
                $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
                $parameters = ([
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' => $hash
                ]);
    
                App::get('database')->insert('users', $parameters);
    
                return redirect('admin/usuarios');
            }
        } else {
            $mensagem = "As senhas não coincidiram";
            $flag = true;

            return redirect('admin/usuarios',[
                'mensagem' => $mensagem,
                'flag' => $flag
            ]);
        }
    }

    public function edit()
    {
        try{
            $parameters = ([
                'name' => $_POST['name'],
                'email' => $_POST['email']
            ]);
    
            App::get('database')->edit('users', $parameters, $_POST['id']);
    
            return redirect('admin/usuarios');
        }catch(Exception $e)
        {
            $e->getMessage();

            $mensagem = " Erro 404 - recurso não encontrado";

            return redirect('admin/usuarios',[
                'mensagem' => $mensagem
            ]);
        }

    }

    public function delete()
    {
        try{
            $id = $_POST['id'];

            App::get('database')->delete('users', $id);
            
            $mensagem = " ";

            return redirect('admin/usuarios',
                    $mensagem            
                    );
        }catch(Exception $e)
        {
            $e->getMessage();

            $mensagem = " Erro 404 - recurso não encontrado";

            return redirect('admin/usuarios',[
                'mensagem' => $mensagem
            ]);
        }
    }
}
