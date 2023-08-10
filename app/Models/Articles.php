<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    public $fillable = ['title', 'excerpt', 'block_quote', 'body', 'image', 'thumbnail'];

    public $table = 'articles';
}
