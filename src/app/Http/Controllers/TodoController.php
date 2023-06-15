<?php

namespace App\Http\Controllers;

use App\Todo; // todoモデルを使うために追加
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all(); // todoモデルの全てのレコードを取得

        return view(('todo/index'), compact('todos')); // view関数の第二引数にcompact関数を使うことで、第一引数で指定した変数をviewに渡すことができる。
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create'); // src/resources/views/todo/create.blade.phpを表示する処理を追加
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // todoモデルのインスタンスを作成
            $todo = new Todo();
            // todoモデルの各プロパティに値を代入
            $todo->title = $request->input('title'); // $request->titleでもOK
            // todoモデルのインスタンスを保存
            $todo->save();
            // ルートにリダイレクト
            return redirect('/todos')->with(
                'status',
                $todo->title . 'を登録しました。'
            ); // 保存後、一覧画面にリダイレクトする処理を追加
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
