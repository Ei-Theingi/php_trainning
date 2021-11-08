<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    public $table="data";
    use HasFactory;
    //declaration
    protected $fillable=[
        'rno',
        'name',
        'Subject',
        'title' ,
        'date',
        'percent',
    ];
}
