@extends('layouts.app')
@section('content')
<h1>タスク一覧</h1>
@if(count($tasks) >0)
<table class="table table-striped table-hover">
    <tr>
        <th>id</th>
        <th>状況</th>
        <th>やること</th>
    </tr>
    @foreach($tasks as $task)
    <tr>
        <td>
        {!! link_to_route('tasks.show',$task->id,['id' => $task->id]) !!}
            </td>
            <td>{{$task->status}}</td>
        <td>{{$task->content}}</td>
    </tr>
    @endforeach
</table>
@endif

{!! link_to_route('tasks.create','新規投稿',[],['class' => 'btn btn-primary']) !!}

@endsection
