@extends('layout')

@section('content')
    <h1>{{ $todos->name }}</h1>

    <div>
        <p>{{ $todos->content}}</p>
    </div>
    <ol>
        @foreach($todos->comments as $comment)
            <li>{{$comment->comment}}</li>
        @endforeach
    </ol>
    <form method="post" action="{{route('todos.comment', $todos->id)}}">
        {{csrf_field()}}
        <textarea name="comment" rows="4" cols="40" placeholder="こめんと"></textarea>
        <button type="submit">入力確定</button>
    </form>
    <div>
        <a href={{ route('todos.list') }}>Todo一覧に戻る</a>
    </div>

    <form method="get" action="{{route('todos.status2', $todos->id)}}">
        {{csrf_field()}}
        今のステータス：
        @if ($todos->status == 0)
            Todo
        @elseif($todos->status == 1)
            実装中
        @else
            Done
        @endif
    </form>

    <form method="post" action="{{route('todos.statechange', $todos->id)}}">
        {{csrf_field()}}
        <select name="status">
            <option value="0">Todo</option>
            <option value="1">実装中</option>
            <option value="2">Done</option>
        </select>
        <button type="submit">変更</button>
    </form>

    <form method="post" action="{{route('todos.destroy', $todos->id)}}">
        {{csrf_field()}}
        <br>
        <br>
        <button type="submit">削除</button>
    </form>

@endsection
