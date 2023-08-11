<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmarks extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'article_id'];

    protected $table = 'bookmarks';

    public function article() {

        return $this->belongsTo(Articles::class);
    }

}
