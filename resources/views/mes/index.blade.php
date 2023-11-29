@extends('app')

@section('title', '學校網站 - 列出所有教育部')

@section('school_contents')
<h1>列出所有教育部</h1>

<table>
    <tr>
        <th>編號</th>
        <th>地區</th>
        <th>網址</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @for($i=0; $i<count($mes); $i++)
        <tr>
            <td>{{ $mes[$i]['id'] }}</td>
            <td>{{ $mes[$i]['region'] }}</td>
            <td>{{ $mes[$i]['url'] }}</td>
            <td><a href="{{ route('mes.show', ['id'=>$mes[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('mes.edit', ['id'=>$mes[$i]['id']]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endfor
<table>
@endsection