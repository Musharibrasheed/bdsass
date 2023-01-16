<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $comments->name }}</p>
</div>

<!-- Comments Field -->
<div class="col-sm-12">
    {!! Form::label('comments', 'Comments:') !!}
    <p>{{ $comments->comments }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $comments->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $comments->updated_at }}</p>
</div>

