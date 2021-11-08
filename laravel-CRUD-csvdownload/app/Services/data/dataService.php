<?php 
namespace App\Services\data;

use App\Contracts\Dao\data\dataDaoInterface;
use App\Contracts\Services\data\dataServiceInterface;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class dataService implements dataServiceInterface  {
   
    
    private $dataDao;

    public function __construct(dataDaoInterface $dataDao)
  {
    $this->dataDao = $dataDao;
  }
  public function store(Request $request){
     return $this->dataDao->store($request);
  } 
  public function list(){
    return $this->dataDao->list();
  }
  public function edit($id){
 return $this->dataDao->edit($id);
  }
  public function update(Request $request,$id){
 return $this->dataDao->update($request,$id);
  }
  public function delete($id){
return $this->dataDao->delete($id);
  }
  
  public function downloadPostCSV()
  {
    
  }

}