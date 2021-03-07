@extends('layout')

@section('content')
    <h1>NewTodo</h1>

    <form method="post" action="{{route('todos.list')}}">
        {{csrf_field()}}
        <label>
            内容
            <input type="text" name="content"/>
        </label>
        <select name="priority">
            <option value="0">high</option>
            <option value="1">mid</option>
            <option value="2">low</option>
        </select>
        <select name="status">
            <option value="0">Todo</option>
            <option value="1">実装中</option>
            <option value="2">Done</option>
        </select>
        <button type="submit">送信</button>
    </form>

    <div>
        <a href="{{ route('todos.list') }}">一覧に戻る</a>
    </div>
@endsection
