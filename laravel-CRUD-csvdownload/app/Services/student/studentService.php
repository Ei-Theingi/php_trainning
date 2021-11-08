<?php

namespace App\Services\student;

use App\Contracts\Dao\student\studentDaoInterface;
use App\Contracts\Services\student\studentServiceInterface;
use Illuminate\Http\Request;

class studentService implements studentServiceInterface{

    private $studentDao;
    
    public function __construct(studentDaoInterface $studentDao)
    {
      $this->studentDao = $studentDao;
    }
  
    public function save(Request $request){
        return $this->studentDao->save($request);
    }
    public function list(){
      return $this->studentDao->list();

    }
   public  function edit($id){
     return $this->studentDao->edit($id);

   }
  public function update(Request $request,$id){
    return $this->studentDao->update($request,$id);

  }
  public function delete($id){
  return $this->studentDao->delete($id);
  }
  public function upload()
  {
    $postList = $this->postDao->getPostList();
    $filename = "post.csv";
    //write csv file
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array('Title', 'Description', 'Posted User', 'Posted Date'));

    foreach ($postList as $row) {
      fputcsv($handle, array(
        $row->title, $row->description, $row->created_user,
        date('Y/m/d', strtotime($row->created_at))
      ));
    }

    fclose($handle);

    $headers = array(
      'Content-Type' => 'text/csv',
    );

    return response()
      ->download($filename, $filename, $headers)
      ->deleteFileAfterSend();
  }
}

