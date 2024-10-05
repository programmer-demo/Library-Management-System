<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name','student_id'
    ];
    public function student(){
        return $this->hasMany(Student::class);
    }
}
