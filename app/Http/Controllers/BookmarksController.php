<?php

namespace App\Http\Controllers;

use App\Models\Bookmarks;
use Illuminate\Http\Request;

class BookmarksController extends Controller
{
   /**
     * @author obrien
     */
    public function bookmark($article) {

        try {
            $bookmarks = new Bookmarks();
            $bookmarks->user_id = auth()->user()->id;
            $bookmarks->article_id = $article;
            $bookmarks->save();

        }catch (\Exception $e) {

            return redirect()->back()->with('error', 'The article you are trying to bookmark is already in your bookmarks');
        }

        return redirect()->back()->with('success', 'The article has been bookmarked successfully');
    }
}
