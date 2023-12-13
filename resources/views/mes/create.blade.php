@extends('app')

@section('title', '建立教育部表單')

@section('school_theme', '建立教育部的表單')

@section('school_contents')
    {!! Form::open(['url' => 'mes/store']) !!}
    @include('mes.form', ['submitButtonText'=>'新增教育部資料'])
    {!! Form::close() !!}
@endsection