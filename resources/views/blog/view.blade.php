@extends('layout.blog')

@section('title')
{{$title}}
@stop

@section('content')
<p>{{$title}}</p>
{{$content}}
@stop