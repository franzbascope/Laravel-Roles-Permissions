<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Author Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_author', 'Email Author:') !!}
    {!! Form::email('email_author', null, ['class' => 'form-control']) !!}
</div>

<!-- Publication Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publication_year', 'Publication Year:') !!}
    {!! Form::number('publication_year', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('books.index') }}" class="btn btn-default">Cancel</a>
</div>
