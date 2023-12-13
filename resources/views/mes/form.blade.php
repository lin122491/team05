<div class="form-group">
    {!! Form::label('id', '教育部名稱：') !!}
    {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('region', '地區：') !!}
    {!! Form::text('region', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('url', '網址：') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>