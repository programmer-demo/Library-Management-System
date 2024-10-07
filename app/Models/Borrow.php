<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Borrow extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'student_idcard' , 'student_name' , 'student_gender' , 'student_faculty' , 'book_id'
    ];
    public function Book(){
        return $this->hasMany(Book::class);
    }
}
