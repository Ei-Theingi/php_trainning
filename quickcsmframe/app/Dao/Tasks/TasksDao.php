<?php
namespace App\Dao\Tasks;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Constracts\Dao\Tasks\TasksDaoInterface;

class TasksDao implements TasksDaoInterface{
  
  function displayTasks () {
    
    $tasks = Task::orderBy('created_at', 'asc')->get();
    return  $tasks;
 }
 function addTasks (Request $request){
   $validator = Validator::make($request->all(), [
      'name' => 'required|max:255',
  ]);

  if ($validator->fails()) {
      return redirect('/')
          ->withInput()
          ->withErrors($validator);
  }

  $task = new Task;
  $task->name = $request->name;
   $task->save();
   
 }

 function deleteTasks  ($id){

   $deletetask =Task::findOrFail($id)->delete();
      
    return $deletetask;
  }
 }