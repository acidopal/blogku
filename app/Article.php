<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $table = 'article';
	public $timestamps = false;
	protected $fillable = [
		'judul', 'isi', 'kategori', 'foto', 'author_id','tanggal'
	];
}
