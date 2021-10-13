<?php
namespace App\Controllers;


use App\Models\User;
use App\Repositories\MysqlUsersRepository;
use App\Repositories\UsersRepository;
use Ramsey\Uuid\Uuid;

class AuthController
{
    private UsersRepository $usersRepository;

    public function __construct()
    {
        $this->usersRepository = new MysqlUsersRepository();
    }

    public function showRegisterForm()
    {
        require_once 'app/Views/users/register.template.php';
    }

    public function register()
    {
        $user = $this->usersRepository->save(
            new User(
                Uuid::uuid4(),
                $_POST['email'],
                $_POST['name'],
                password_hash($_POST['password_confirmation'], PASSWORD_DEFAULT)
            )
        );
    }

    public function showLoginForm()
    {
        require_once 'app/Views/users/login.template.php';
    }


    public function login()
    {
        $user = $this->usersRepository->getByEmail($_POST['email']);

        if($user != null && password_verify($_POST['password'], $user->getPassword())){
            $_SESSION['authId'] = $user->getId();
            header('Location: /tasks');
        }else{
            header('Location: /login');
        }
    }


    public function logout()
    {
        unset($_SESSION['authId']);
        header('Location: /');
    }













}