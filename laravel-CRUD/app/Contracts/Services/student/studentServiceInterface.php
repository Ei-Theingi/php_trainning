<?php
namespace App\Contracts\Services\student;

use Illuminate\Http\Request;

interface studentServiceInterface{
    public function save(Request $request);
    public function list();
    public function edit($id);
    public function update(Request $request,$id);
    public function delete($id);
}