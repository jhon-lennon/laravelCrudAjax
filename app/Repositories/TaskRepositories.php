<?php

namespace App\Repositories;

use App\Models\Tasks;
use DateTime;

class TaskRepositories{

    public function __construct(private Tasks $model)
    {
    
    }
    public function getAll(){
        $task = $this->model->get();
        return $task;
    }

    public function store($data){

      $task =  $this->model->create([
            'task' => $data['task'],
            'concluded' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        return $task;
    }
}