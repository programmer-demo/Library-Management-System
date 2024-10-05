<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookType extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name'
    ];

    public function Book(){
        return $this->hasMany(Book::class);
    }
}
