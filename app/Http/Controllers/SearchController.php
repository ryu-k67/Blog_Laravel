<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Article::where('title', 'LIKE', "%{$query}%")
                            ->orWhere('body', 'LIKE', "%{$query}%")
                            ->paginate(10);
        return view('articles.index', ['articles' => $results]);
    }
}
