<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'name'
    ];

    public function shelves()
    {
        return $this->belongsToMany(Shelf::class, 'book_shelf', 'book_id', 'shelf_id');
    }
    
}
