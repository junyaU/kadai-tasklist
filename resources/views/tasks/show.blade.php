@extends('layouts.app')
@section('content')
<h1>id:{{$task->id}}の詳細ページ</h1>
<table class="table table-bordered">
    <tr>
        <th>id</th>
        <td>{{$task->id}}</td>
    </tr>
    <tr>
        <th>状況</th>
        <td>{{$task->status}}</td>
    </tr>
    <tr>
        <th>やること</th>
        <td>{{$task->content}}</td>
    </tr>
</table>
{!! link_to_route('tasks.index','一覧に戻る',[],['class' => 'btn btn-primary']) !!}
{!! link_to_route('tasks.edit','編集する',['id' => $task->id],['class' => 'btn btn-success']) !!}

<div class="mt-4">
{!! Form::model($task,['route' => ['tasks.destroy',$task->id],'method' => 'delete']) !!}
{!! Form::submit('削除する',['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
</div>
@endsection