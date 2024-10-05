<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Library extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'student_id','checkout_date'
    ];
    public function student(){
        return $this->hasMany(Student::class);
    }
}
