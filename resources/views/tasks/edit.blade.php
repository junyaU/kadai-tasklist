@extends('layouts.app')
@section('content')
<h1>id:{{$task->id}}の編集画面</h1>
<div class="row">
    <div class="col-6">
        

{!! Form::model($task,['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

<div class="form-group">
    {!! Form::label('content','やること') !!}
    {!! Form::text('content',null,['class' => 'form-control']) !!}
</div>
{!! Form::submit('変更',['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
    </div>
</div>
<div class="mt-4">
    {!! link_to_route('tasks.index','一覧に戻る',[],['class'=>'btn btn-success']) !!}
</div>
@endsection