<?php
namespace App\Service\Tasks;
use App\Constracts\Dao\Tasks\TasksDaoInterface;
use App\Constracts\Services\Tasks\TasksServiceInterface;
use Illuminate\Http\Request;

class TasksService implements TasksServiceInterface{

    private $tasksDao;

public function __construct(TasksDaoInterface $tasksDao)
  {
    $this->tasksDao = $tasksDao;
  }
  function displayTasks () { 
    return $this->tasksDao->displayTasks();
 }
 function addTasks (Request $request){
    return $this->tasksDao->addTasks($request);
 }

 function deleteTasks ($id){
    return $this->tasksDao->deleteTasks($id);
    
  }
 }