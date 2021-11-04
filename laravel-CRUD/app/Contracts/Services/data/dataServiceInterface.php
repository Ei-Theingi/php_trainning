<?php
namespace App\Contracts\Services\data;
use Illuminate\Http\Request;
interface dataServiceInterface{
    public function store(Request $request);
    public function list();
    public function edit($id);
    public function update(Request $request,$id);
    public function delete($id);
    
}