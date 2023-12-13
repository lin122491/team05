@extends('app')

@section('title', '顯示特定教育部')
@section('mes_theme', '您所選取教育部資料')
@section('mes_contents')
<h1>顯示單一球隊<h1>
教育部編號:{{$mes->id}}<br/>
地區:{{$mes->region}}<br/>
網址:{{$mes->url}}<br/>
@endsection