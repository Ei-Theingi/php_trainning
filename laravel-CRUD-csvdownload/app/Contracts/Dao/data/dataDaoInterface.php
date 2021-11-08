<?php
namespace App\Contracts\Dao\data;

use Illuminate\Http\Request;

interface dataDaoInterface{
    public function store(Request $request);
    public function list();
    public function edit($id);
    public function update(Request $request,$id);
    public function delete($id);
    
}