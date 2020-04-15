<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $books->name }}</p>
</div>

<!-- Email Author Field -->
<div class="form-group">
    {!! Form::label('email_author', 'Email Author:') !!}
    <p>{{ $books->email_author }}</p>
</div>

<!-- Publication Year Field -->
<div class="form-group">
    {!! Form::label('publication_year', 'Publication Year:') !!}
    <p>{{ $books->publication_year }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $books->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $books->updated_at }}</p>
</div>