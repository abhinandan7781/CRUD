<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LIbrary extends Model
{
    //protected is used because private comes too private and we need to access it from other files or child classes
    protected $fillable=['name','location','library_id'];
    /** @use HasFactory<\Database\Factories\LIbraryFactory> */
    use HasFactory;
    //relationship with book
    public function books(){
        return $this->hasMany(Book::class);
    }
}
