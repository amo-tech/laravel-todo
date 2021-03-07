@extends('layout')

@section('content')
    <h1>Todo</h1>

    <h2>Todo</h2>
    @foreach ($todos as $todo)
        @if ($todo->status == 0)
            <a href="{{ route('todos.detail', ['id' =>  $todo->id]) }}">
                <ul>
                    <li>{{ $todo->content }}</li>
                </ul>
            </a>
        @endif
    @endforeach

    <h2>実装中</h2>
    @foreach ($todos as $todo)
        @if ($todo->status == 1)
            <a href="{{ route('todos.detail', ['id' =>  $todo->id]) }}">
                <ul>
                    <li>{{ $todo->content }}</li>
                </ul>
            </a>
        @endif
    @endforeach

    <h2>Done</h2>
    @foreach ($todos as $todo)
        @if ($todo->status == 2)
            <a href="{{ route('todos.detail', ['id' =>  $todo->id]) }}">
                <ul>
                    <li>{{ $todo->content }}</li>
                </ul>
            </a>
        @endif
    @endforeach
    {{--    <table class='table table-striped table-hover'>--}}
    {{--        <tr>--}}
    {{--            <th>内容</th>--}}
    {{--        </tr>--}}
    {{--        @foreach ($todos as $todo)--}}
    {{--            @if ($todo->status == 0)--}}

    {{--            <tr>--}}
    {{--                <td>--}}
    {{--                    <a href="{{ route('todos.detail', ['id' =>  $todo->id]) }}">--}}
    {{--                    {{ $todo->content }}--}}
    {{--                </td>--}}
    {{--            </tr>--}}
    {{--            @endif--}}
    {{--        @endforeach--}}
    {{--    </table>--}}

    <div>
        <a href="{{ route('todos.new') }}" class="btn btn-outline-primary">新規作成</a>
    </div>
@endsection
