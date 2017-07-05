<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use DB, Carbon;

class ArticleController extends Controller
{
	public function index()
	{
		$article = Article::paginate(4);
		return view('article.index', ['article' => $article]);
	}

	public function updateArticle(Request $request)
	{
		$id = $request->id;
		$tanggal = Carbon\Carbon::now()->toDateTimeString();

		$data = [
			'judul' => $request->judul,
			'isi' => $request->isi,
			'kategori' => $request->kategori,
			'author_id' => $request->author_id,
			'tanggal' => $tanggal
		];

		if ($request->hasFile('foto')) {
			$foto = $request->file('foto');
			$nama = $foto->getClientOriginalName();
			$dir  = public_path(). '/img/article/';
			$foto->move($dir, $nama);
			$data['foto'] = $nama;
		}

		Article::find($id)->update($data);

		return redirect()->route('article');
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
