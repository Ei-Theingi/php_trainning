<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
   public $table="student";
    use HasFactory;
    protected $fillable=[
        'rno',
        'name',
        'email' ,
        'phone_number',
        'address',
    ];
}
