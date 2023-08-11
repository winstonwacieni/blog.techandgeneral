<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmarks extends Model
{
    use HasFactory;

    public $fillable = ['user_id', 'article_id'];

    /**
     * @author obrien
     */
    public function article() {

        return $this->belongsTo(Articles::class);
    }

}
