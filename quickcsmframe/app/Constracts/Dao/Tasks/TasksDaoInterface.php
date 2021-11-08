<?php
namespace App\Constracts\Dao\Tasks;

use Illuminate\Http\Request;

interface  TasksDaoInterface {
    public function displayTasks();
    public function addTasks(Request $request);
    public function deleteTasks($id);
}