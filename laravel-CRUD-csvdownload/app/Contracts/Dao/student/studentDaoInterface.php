<?php
namespace App\Contracts\Dao\student;

use Illuminate\Http\Request;

interface studentDaoInterface{
    public function save(Request $request);
    public function list();
    public function edit($id);
    public function update(Request $request,$id);
    public function delete($id);
    
}