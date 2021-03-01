@extends('layout')

@section('content')
    <h1>{{ $todos->name }}</h1>
    <div>
        <p>{{ $todos->content}}</p>
    </div>
    <div>
        <a href={{ route('todos.list') }}>Todo一覧に戻る</a>
        | <a href={{ route('todos.edit', ['id' =>  $todos->id]) }}>編集</a>
        <p></p>
        <form method="post" action="{{route('todos.destroy', $todos->id)}}">
            {{csrf_field()}}
            <button type="submit">削除</button>
        </form>
    </div>
@endsection
