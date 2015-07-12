@extends('layout.blog')

@section('title')
blog list
@stop

@section('content')
<h1>List of all blogs</h1>
<ul>
@foreach ($blogs as $blog)
    <li><a href="/articles"></a>
        {{$blog['title']}}</li>
</ul>
@endforeach
    @stop