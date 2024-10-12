<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name','gender','dob','pob','phone', 'faculty' , 'id_card' , 'library_id'
    ];

    public function book(){
        return $this->hasMany(Book::class);
    }
    public function library(){
        return $this->hasMany(Library::class);
    }
}
