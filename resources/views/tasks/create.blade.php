@extends('app')


@section('content')
<h2>Create Task For Project "{{$project->name}}"</h2>
{!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class'=>'']) !!}
@include('tasks/partials/_form', ['submit_text' => 'Create Task'])
{!! Form::close() !!}
@stop