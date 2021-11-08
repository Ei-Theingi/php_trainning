<?php
namespace App\Constracts\Services\Tasks;

use App\Http\Requests\TaskValidateRequest;
use Illuminate\Http\Request;

interface  TasksServiceInterface {
    public function displayTasks();
    public function addTasks(Request $request);
    public function deleteTasks($id);
}