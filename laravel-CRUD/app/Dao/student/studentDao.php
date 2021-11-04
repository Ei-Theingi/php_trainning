<?php
namespace App\Dao\student;
use App\Models\student;
use Illuminate\Http\Request;
use App\Contracts\Dao\student\studentDaoInterface;

class studentDao implements studentDaoInterface{
    
public function save(Request $request){

    $studentData=$this->getStudent($request);
    $student=student::create($studentData);
    return $student;
}
public function list(){
    $studentlist=student::all();
    return $studentlist;

}
public function edit($id)
{
    $studentdata =student::where('id','=',$id)->first();
    return $studentdata;
}
 
public function update(Request $request,$id)
{
    $studentupdate=$this->getStudent($request);
    $studentupdatedata=student::where('id',$id)->update($studentupdate);
    return $studentupdatedata;

}
public function delete($id){
    $studentdelete=student::where('id',$id)->delete();
    return $studentdelete; 
}

private function getStudent($request){
        
    return[
        'rno'=>$request->rno,
        'name'=>$request->name,
        'email'=>$request->email,
        'phone_number'=>$request->phno,
        'address'=>$request->address,
        
    ];
}
}