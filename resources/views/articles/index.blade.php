@extends('app')
@section('content')
<h1>articles</h1>
</hr>

@foreach($articles as $article)

<article>
   <h2>
       <a href="/cerebro/ {{ $article->id}}">{{$article->title }}</a>
   </h2>
    <div class="body">{{$article->body}}</div>
</article>
@endforeach

@stop