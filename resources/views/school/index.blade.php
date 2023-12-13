@extends('app')

@section('title', '學校網站 - 列出所有學校')

@section('school_contents')
<h1>列出所有學校</h1>

<table>
    <tr>
        <th>編號</th>
        <th>學校</th>
        <th>學制</th>
        <th>縣市</th>
        <th>公私立</th>
        <th>地址</th>
        <th>電話</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach ($school as $school)
        <tr>
            <td>{{ $school->id}}</td>
            <td>{{ $school->school}}</td>
            <td>{{ $school->academic_system }}</td>
            <td>{{ $school->mid }}</td>
            <td>{{ $school->public_and_private}}</td>
            <td>{{ $school->address}}</td>
            <td>{{ $school->phone}}</td>
            <td><a href="{{ route('school.show', ['id'=>$school->id]) }}">顯示</a></td>
            <td><a href="{{ route('school.edit', ['id'=>$school->id]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endforeach
<table>
@endsection

