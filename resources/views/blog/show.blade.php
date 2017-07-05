@extends('blog.partials.main')
@section('content')
				<!-- Main -->
					<div id="main">

						<!-- Post -->
						@foreach($article as $showArticle)
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="/read/{{$showArticle->id}}">{{ $showArticle->judul }}</a></h2>
										<p>{{ $showArticle->isi}}</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{ $showArticle->tanggal}}</time>
										<a href="#" class="author"><span class="name">{{ $showArticle->author_id }}</span><img src="assets/blog/images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="{{url('img/article/') }}/{{ $showArticle->foto}}" alt="" /></a>
								<p>{{ $showArticle->isi }}</p>
								<footer>
									<ul class="actions">
										<li><a href="/read/{{ $showArticle->id }}" class="button big">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
						 <!-- Pagination -->
						 @endforeach
					</div>
					

@endsection
				


		