<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Todo;
use Illuminate\Http\Request;



class TodosController extends Controller
{

    public function index()
    {
        $todos = Todo::orderby('priority')->get();
        return view('index', ['todos' => $todos]);
    }

    public function show($id)
    {
        $todos = Todo::with('comments')->find($id);
        return view('show', ['todos' => $todos]);
    }

    public function create()
    {
        $todos = new Todo;
        return view('new', ['todos' => $todos]);
    }
    public function storeNew(Request $request)
    {
        $todos = new Todo;
        $todos->content = request('content');
        $todos->priority = request('priority');
        $todos->save();
        return redirect()->route('todos.detail', ['id' => $todos->id]);
    }
    public function storeComment(Request $request, $id)
    {
        $comment = new Comment;
        $comment->todo_id = $id;
        $comment->comment = request('comment');
        $comment->save();
        return redirect(route('todos.detail', ['id' => $id]));
    }


    public function edit($id)
    {
        $todos = Todo::find($id);
        return view('show', ['todos' => $todos]);
    }
    public function update(Request $request, $id)
    {
        $todos = Todo::find($id);
        $todos->name = request('id');
        $todos->content = request('content');
        $todos->priority = request('priority');
        $todos->save();
        return redirect()->route('todos.detail', ['id' => $todos->id]);
    }
    public function destroy($id)
    {
        $todos = Todo::find($id);
        $todos->delete();
        return redirect('/todos');
    }
}



