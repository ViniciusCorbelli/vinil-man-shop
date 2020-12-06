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
        if (isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa'])) {
            $pesquisa = $_GET['Pesquisa'];
            $users = App::get('database')->pesquisaName('users', $pesquisa);
        } else {
            $users = App::get('database')->selectAllUsers();
        }

        $totalDeRegistros = 9;
        $quantidade = count($users);
        $totalLinks = ceil($quantidade / $totalDeRegistros);

        $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

        if ($pagina == 0)
            $pagina = 1;
        if ($pagina == 0)
            $pagina = 1;

        return view('admin/usuario', [
            'users' => $users,
            'pagina' => $pagina,
            'totalDeLinks' => $totalLinks
        ]);
    }

    public function create()
    {
        session_start();
        $this->verifyLogged();
        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);


        //Tratando a criação de senhas
        $password = $_POST['password']; //Senha
        $password_controller = $_POST['password-controller']; //Confirme sua senha
        $email = $_POST['email'];
        $nome = $_POST['name'];

        if (empty($password) || empty($password_controller) || empty($email) || empty($nome)) {
            $_SESSION['erros'][] = "Os Campos não podem ficar em branco e devem conter um formato válido";
            return redirect('admin/usuarios');
        } else if ($password == $password_controller) {
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
        $this->verifyLogged();
        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);

        if (empty($_POST['name'])) {
            $_SESSION['erros'][] = "Você deve inserir um nome!";
        }
        if (empty($_POST['email'])) {
            $_SESSION['erros'][] = "Você deve inserir um email válido!";
        }

        try {
            $parameters = ([
                'name' => $_POST['name'],
                'email' => $_POST['email']
            ]);

            App::get('database')->edit('users', $parameters, $_POST['id']);

            $_SESSION['sucessos'][] = "Usuário editado com sucesso!";

            return redirect('admin/usuarios');
        } catch (Exception $e) {
            $e->getMessage();

            $_SESSION['erros'][] = "Algo inesperado aconteceu!";

            return redirect('admin/usuarios');
        }
    }

    public function delete()
    {
        session_start();
        $this->verifyLogged();
        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);


        try {
            $id = $_POST['id'];

            App::get('database')->delete('users', $id);

            $_SESSION['sucessos'][] = "Usuário deletado com sucesso!";

            return redirect('admin/usuarios');
        } catch (Exception $e) {
            $e->getMessage();

            $_SESSION['erros'][] = "Algo inesperado aconteceu!";

            return redirect('admin/usuarios');
        }
    }

    public function changePassword()
    {
        session_start();
        $this->verifyLogged();
        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);

        try {

            if (!isset($_POST) && !empty($_POST)) {
                $_SESSION['erros'][] = "Os campos não podem ser nulos";

                return redirect('admin/usuarios');
            } else {

                $user = App::get('database')->read('users', $_POST['id']);

                if (!password_verify($_POST['oldPassword'], $user->password)) {
                    if ($_POST['newPassword'] == $_POST['newPasswordCheck']) {
                        $hash = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);

                        App::get('database')->edit('users', ['password' => $hash], $_POST['id']);
                        $_SESSION['sucessos'][] = "Senha alterada com sucesso.";

                        return redirect('admin/usuarios');
                    } else {
                        $_SESSION['erros'][] = "As senhas não coincidem.";

                        return redirect('admin/usuarios');
                    }
                } else {
                    $_SESSION['erros'][] = "A senha não corresponde a senha atual.";

                    return redirect('admin/usuarios');
                }
            }
        } catch (Exception $e) {
            $e->getMessage();

            $_SESSION['erros'][] = "Algo inesperado aconteceu!";

            return redirect('admin/usuarios');
        }
    }
}
