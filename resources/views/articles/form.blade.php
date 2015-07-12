<div class="form-group">

    {!!Form::label('title','TITLE:') !!}

    {!!Form::text('title',null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!!Form::label('body','BODY:') !!}

    {!!Form::textarea('body',null, ['class' => 'form-control']) !!}

</div>
<div class="form-group">
    {!!Form::label('published_at','published_on:') !!}

    {!!Form::input('published_at',null,date('Y-m-d'), ['class' => 'form-control']) !!}

</div>
<div class="form-group">
    {!!Form::label('tags','Tags:') !!}

    {!!Form::select('tags',['defaults'],null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!!Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
