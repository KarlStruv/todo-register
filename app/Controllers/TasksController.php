<?php

namespace App\Controllers;

use App\Models\Task;
use App\Repositories\CsvTasksRepository;
use App\Repositories\MySqlTasksRepository;
use App\Repositories\TasksRepository;
use Ramsey\Uuid\Uuid;


class TasksController{

    private TasksRepository $tasksRepository;

    public function __construct()
    {
        $this->tasksRepository = new MysqlTasksRepository();
    }


    public function index()
    {
        $tasks = $this->tasksRepository->getAll();


        require_once 'app/Views/users/index.template.php';
    }

    public function create()
    {
        require_once 'app/Views/users/create.template.php';
    }

    public function store()
    {
        $task = new Task(
            Uuid::uuid4(),
            $_POST['title']
        );

        $this->tasksRepository->save($task);

        header("Location: /");
    }

    public function delete(array $vars)
    {
        $id = $vars['id'] ?? null;

        if ($id == null) header('Location /');

        $task = $this->tasksRepository->getOne($id);

        if ($task !== null){
            $this->tasksRepository->delete($task);
        }
        header('Location: /');
    }



    public function register()
    {

    }

    public function logIn()
    {

    }
}