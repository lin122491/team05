@extends('app')

@section('title', '顯示特定教育部')

@section('school_theme', '您所選取教育部資料')

@section('school_contents')
<h1>顯示單一教育部<h1>
教育部編號:{{$mes->id}}<br/>
地區:{{$mes->region}}<br/>
網址:{{$mes->url}}<br/>

<h1>{{ $mes->region }}的所有學校</h1>
<table>
    <tr>    
        <th>編號</th>
        <th>學校</th>
        <th>學制</th>
        <th>縣市</th>
        <th>公私立</th>
        <th>地址</th>
        <th>電話</th>
    </tr>
    @foreach ($schools as $school)
        <tr>
            <td>{{ $school->id}}</td>
            <td>{{ $school->school}}</td>
            <td>{{ $school->academic_system }}</td>
            <td>{{ $school->mes->region }}</td>
            <td>{{ $school->public_and_private}}</td>
            <td>{{ $school->address}}</td>
            <td>{{ $school->phone}}</td>
        <tr>
    @endforeach
</table>
@endsection