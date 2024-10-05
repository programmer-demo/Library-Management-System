<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name','book_type_id'
    ];

    public function bookType(){
        return $this->belongsTo(BookType::class);
    }

    public function author(){
        return $this->hasMany(Author::class);
    }
}
