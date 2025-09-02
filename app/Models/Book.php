<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Must include all columns that will be filled via factory or forms
    protected $fillable = ['title', 'author', 'published_year', 'genre', 'price','library_id'];
    //relationship with library
    public function library(){
        return $this->belongsTo(LIbrary::class);
    }

}
