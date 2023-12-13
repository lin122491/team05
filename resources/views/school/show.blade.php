@extends('app')

@section('title', '顯示特定學校')
@section('school_theme', '您所選取學校資料')
<h1>列出所有學校<h1>
@section('school_contents')
<h1>列出單一學校<h1>
學校編號:{{$school->id}}<br/>
學校:{{$school->school}}<br/>
學制:{{$school->academic_system}}<br/>
縣市:{{$school->mid}}<br/>
公私立:{{$school->public_and_private}}<br/>
地址:{{$school->address}}<br/>
電話:{{$school->phone}}<br/>
@endsection