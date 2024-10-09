<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name', 'barcode' , 'author' , 'written_in' , 'borrow_id' ,  'status'
    ];

    public function bookType(){
        return $this->belongsTo(BookType::class);
    }

    public function author(){
        return $this->hasMany(Author::class);
    }
    public function borrow(){
        return $this->belongsTo(Borrow::class);
    }
}
