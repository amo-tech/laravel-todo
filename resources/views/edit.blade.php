@extends('layout')

@section('content')
    <h1>Todoの編集</h1>

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
        <button type="submit">更新</button>
    </form>

    <div>
        <a href="{{ route('todos.list') }}">一覧に戻る</a>
    </div>
@endsection
