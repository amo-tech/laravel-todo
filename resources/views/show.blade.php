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

        <form method="post" action="{{route('todos.destroy', $todos->id)}}">
            {{csrf_field()}}
            <br>
            <br>
            <button type="submit">削除</button>
        </form>
    </div>
@endsection
