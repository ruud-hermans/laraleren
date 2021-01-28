@extends('layout')

@section('content')

<div id="wrapper">
    <div id="page" class="container">
		<ul class="style1">
			@foreach ($articles as $article)
			<li class="first">
				<h3>
					<a href="/articles/{{$article->id}}"> {{ $article->title }}
    			</h3>
				
                <p><a>{{ $article->excerpt }}</a></p>
                <p><a>{{ $article->body }}</a></p>
			</li>
			@endforeach
        </ul>
        {{ $articles->links() }}
    </div>
    
</div>






@endsection