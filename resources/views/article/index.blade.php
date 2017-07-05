@extends('dashboard.partials.main')
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
                                    </thead>
                                    <tbody>
                                    @foreach($article as $listArticle)
                                        <tr>
                                        	<td></td>
                                        	<td>{{ $listArticle->judul }}</td>
                                        	<td>{{ $listArticle->isi }}</td>
                                        	<td>{{ $listArticle->kategori }}</td>
                                        	<td>{{ $listArticle->foto }}</td>
                                        	<td>{{ $listArticle->author_id }}</td>
                                        	<td>{{ $listArticle->tanggal }}</td>
                                        </tr>
                                     @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection