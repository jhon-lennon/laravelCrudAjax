<?php

namespace App\Services;

use App\Repositories\TaskRepositories;

class TaskServices{

public function __construct(private TaskRepositories $taskRepositories)
{
    
}
public function getAll(){

    $task = $this->taskRepositories->getAll();
    return $task;
}

public function store($request){

    $data = ['task' => $request->input('text_task')];
    $task = $this->taskRepositories->store($data);

    return $task;
}
}