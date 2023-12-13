@extends('app')

@section('title', '編輯特定教育部')

@section('school_theme', '編輯中的教育部')

@section('school_contents')
    {!! Form::model($mes, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\MesController@update', $mes->id]]) !!}
    @include('mes.form', ['submitButtonText'=>'更新教育部資料'])
    {!! Form::close() !!}
@endsection