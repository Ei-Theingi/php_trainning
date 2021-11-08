<?php
namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\TaskValidateRequest;
use App\Constracts\Services\Tasks\TasksServiceInterface;

class TasksController extends Controller
{
  private $tasksService;
  public function __construct(TasksServiceInterface $tasksService)
    {
      $this->tasksService = $tasksService;
    }
  
  
  public function displayTasks () {
    $tasks =$this->tasksService->displayTasks();
    return view('tasks', [
      'tasks' => $tasks
  ]);
  }
  
  public function addTasks(Request $request) {
      
        $this->tasksService->addTasks($request);
        return redirect('/'); 
      
     }
    
      public function deleteTasks($id) {
        $this->tasksService->deleteTasks($id);
        return redirect('/');
        
}
}