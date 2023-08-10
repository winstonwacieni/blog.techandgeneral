<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Articles extends Model
{
    use HasFactory;

    public $fillable = ['title', 'excerpt', 'block_quote', 'body', 'image', 'thumbnail'];

    public $table = 'articles';

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
