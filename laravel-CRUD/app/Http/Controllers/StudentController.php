<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Contracts\Services\student\studentServiceInterface;



class StudentController extends Controller
{
     private $studentService;
    public function __construct(studentServiceInterface $studentService)
    {
      $this->studentService= $studentService;
    }
   public function create(){
    return view('student.studentadd');
   }
    
    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'rno' => 'required',
            'name' => 'required',
            'email'=>'required',
            'phno'=>'required',
            'address'=>'required',
            
        ]);
    
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $this->studentService->save($request);
        return redirect('/');
    }
    public function list(){ 
            return view('student.studentlist',['student' => $this->studentService->list()]);
    }
    public function edit($id){
       
        return view('student.studentupdate',['studentdata'=>$this->studentService->edit($id)]);
    }
    public function update(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'rno' => 'required',
            'name' => 'required',
            'email'=>'required',
            'phno'=>'required',
            'address'=>'required',
            
        ]);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $this->studentService->update($request,$id);
        return redirect('/');
    }
    public function delete($id){
       $this->studentService->delete($id);
       return redirect('/');
    }
    public function downloadCSV()
    { 
      $downloaddata = student::get();
  
          $csvExporter = new \Laracsv\Export();
  
          $csvExporter->build($downloaddata, [
            'id'=>'ID',
            'rno'=>'Rno',
            'name'=>'Name',
            'email'=>'Email',
            'phno'=>'Phone Number',
            'address' =>'Address',
           
       
          ]);
  
          $csvReader = $csvExporter->getReader();
  
          
          $filename = 'datalist.csv';
  
          return response((string) $csvReader)
              ->header('Content-Type', 'text/csv; charset=UTF-8')
              ->header('Content-Disposition', 'attachment; filename="'.$filename.'"');
      }
    
}
