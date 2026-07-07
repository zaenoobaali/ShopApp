<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){
        $tasks = [
            ["title" => "Task1", "body" => "My first Task!"],
            ["title" => "Task2", "body" => "My second Task!"],
            ["title" => "Task3", "body" => "My third Task!"]
        ];

        return view('task', ["tasks" => $tasks]);
    }
}
