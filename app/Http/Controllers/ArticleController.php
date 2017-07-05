<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use DB;

class ArticleController extends Controller
{
	public function index()
	{
		$article = Article::paginate(4);
		return view('article.index', ['article' => $article]);
	}

	public function editArticle(Request $request)
	{
		$id = $request->id;
		$article = DB::table('article')
					->where('id', $id)
					->get();
		return view ('article.edit', ['article' => $article]);	
	}
	
	public function showArticle()
	{
		$article = Article::paginate(2);
		return view('blog.index',['article' => $article ]);
	}

	public function readArticle(Request $request)
	{
		$id = $request->id;
		$article = DB::table('article')
					->where('id', $id)
					->get();
		return view('blog.show', ['article' => $article]);

	}


}
