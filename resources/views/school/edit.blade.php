@extends('app')

@section('title', '編輯特定學校')

@section('school_theme', '編輯中的學校')

@section('school_contents')
    {!! Form::model($school, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\SchoolController@update', $school->id]]) !!}
    @include('school.form', ['submitButtonText'=>'更新學校資料'])
    {!! Form::close() !!}
@endsection