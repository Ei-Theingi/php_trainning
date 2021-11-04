<?php

namespace App\Dao\data;

use App\Models\data;
use Illuminate\Http\Request;
use App\Contracts\Dao\data\dataDaoInterface;


class dataDao implements dataDaoInterface{
    public function store(Request $request){
        $data=$this->getData($request);
        $getdata=data::create($data);
        return $getdata;
    }
    public function list(){
        $data = data::all();
       return $data;
    }
    public function edit($id)
    {
        $data=data::where('id','=',$id)->first();
        return $data;
    }
    public function update(Request $request,$id){
        $updatedata=$this->getData($request);
       $update =data::where('id',$id)->update($updatedata);
       return $update;
    }
    public function delete($id){
      $deletedata = data::where('id',$id)->delete();
      return $deletedata;

    }
  
        
    private function getData($request){
        return[
            'rno' =>$request->rno,
            'name' =>$request->name,
            'Subject'=>$request->subject,
            'title' =>$request->title,
            'date'=>$request->date,
            'percent'=>$request->percent,
        ];
    }
}