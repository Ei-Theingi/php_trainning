<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Contracts\Services\data\dataServiceInterface;

class ApiController extends Controller
{
    private $dataservice;
    public function __construct(dataServiceInterface $dataservice)
      {
        $this->dataservice = $dataservice;
      }
      public function store(Request $request)  
      {
        
       $validator = Validator::make($request->all(), [
        'rno' => 'required',
        'name' => 'required',
        'subject'=>'required',
        'title'=>'required',
        'date'=>'required',
        'percent'=>'required',
    ]);

    if ($validator->fails()) {
        return back()
                    ->withErrors($validator)
                    ->withInput();
    }
       $datastore=$this->dataservice->store($request);
        return response()->json($datastore);
      
     
    }
    public function list( )
    {
       $datalist = $this->dataservice->list();
        return response()->json($datalist);
        
    }
    public function update(Request $request, $id)
      {
                
           $dataupdate =$this->dataservice->update($request,$id);
           
           return response()->json($dataupdate);
          
      }
  
      public function delete($id)
      {
         $datadelete= $this->dataservice->delete($id);
         return response()->json($datadelete);
          
      }
  
}
