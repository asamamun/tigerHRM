<?php

namespace App\Controllers;
use App\Models\TodoModel;

use App\Controllers\BaseController;

class TodoController extends BaseController
{
    public function index()
    {
        $todolist = new TodoModel();
        $alltodo = $todolist->findAll();
        $data['todo'] = $alltodo;

        return view("todo/index", $data);
    }
}
