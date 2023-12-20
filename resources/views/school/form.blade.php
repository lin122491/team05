<div class="form-group">
    {!! Form::label('school', '學校名稱：') !!}
    {!! Form::text('school', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('academic_system', '學制：') !!}
    {!! Form::text('academic_system', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('mid', '縣市：') !!}
    {!! Form::select('mid', $mes, $mesSelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('public_and_private', '公私立：') !!}
    {!! Form::text('public_and_private', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('address', '地址：') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone', '電話：') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>