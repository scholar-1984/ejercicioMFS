<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Book extends Model
{
    use HasFactory;
    protected $primaryKey= 'book_id';
    public function author():BelongsTo
    {
        return $this->belongsTo(Author::class,'author_id','author_id');
    }
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','category_id');
    }
}
