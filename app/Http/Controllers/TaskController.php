<?php

namespace App\Http\Controllers;


use App\Services\TaskServices;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct(private TaskServices $taskService)
    {
    }
    public function index()
    {
        $task = $this->taskService->getAll();
        return response(json_encode($task));
    }

    public function store(Request $request)
    {
        $task = $this->taskService->store($request);
    }

    public function edit(Request $request)
    {

        echo $request->input('text_task');
        die;
    }
}
