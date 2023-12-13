@extends('app')

@section('title', '建立學校表單')

@section('school_theme', '建立學校的表單')

@section('school_contents')
    {!! Form::open(['url' => 'school/store']) !!}
    @include('school.form', ['submitButtonText'=>"新增學校資料"])
    {!! Form::close() !!}
@endsection