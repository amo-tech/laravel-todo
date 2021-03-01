@extends('layout')

@section('content')
    <h1>Todo</h1>

    <table class='table table-striped table-hover'>
        <tr>
            <th>優先順位</th>
            <th>内容</th>
        </tr>
        @foreach ($todos as $todo)
            <tr>
                <td>
                    @if ($todo->priority == 0)
                        high
                    @elseif ($todo->priority == 1)
                        mid
                    @else
                        low
                    @endif
                </td>
                <td>
                    <a href="{{ route('todos.detail', ['id' =>  $todo->id]) }}">
                    {{ $todo->content }}
                </td>
            </tr>
        @endforeach
    </table>

    <div>
        <a href="{{ route('todos.new') }}" class="btn btn-outline-primary">新規作成</a>
        </div>
@endsection
