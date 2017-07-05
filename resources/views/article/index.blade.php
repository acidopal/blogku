@extends('dashboard.partials.main')
@section('title-page')
   <a class="navbar-brand" href="#">Article</a>
@endsection
@section('content')
	        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No</th>
                                    	<th>Judul</th>
                                    	<th>Isi</th>
                                    	<th>Kategori</th>
                                    	<th>Foto</th>
                                    	<th>Author</th>
                                    	<th>Tanggal</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($article as $listArticle)
                                        <tr>
                                        	<td></td>
                                        	<td>{{ $listArticle->judul }}</td>
                                        	<td>{{ $listArticle->isi }}</td>
                                        	<td>{{ $listArticle->kategori }}</td>
                                        	<td><img src="{{url('img/article')}}/{{ $listArticle->foto }}" width="30" height="30"></td>
                                        	<td>{{ $listArticle->author_id }}</td>
                                        	<td>{{ $listArticle->tanggal }}</td>
                                       		<td> <a href="/article/edit/{{$listArticle->id}}"> Edit </a> 
                                       		     <a href="/article/delete/{{$listArticle->id}}"> Delete </a> 
                                       	    </td>
                                        </tr>
                                     @endforeach
                                    </tbody>
                                </table>
                                <center>{{$article->links()}}</center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection