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
        // todoモデルからidが$idと一致するレコードを取得
        $todo = Todo::find($id);
        // viewにtodoというキーで$todoを渡す
        return view('todo/show', compact('todo')); // src/resources/views/todo/show.blade.phpを表示する処理を追加
        // 上記の'todo/show'は、'todo.show'と書いてもOK。Laravelでは、ドットで区切られた文字列は階層構造を表す。ドットで区切られた文字列を使うことで、view関数の第一引数に指定した文字列に対応するビューファイルを表示することができる。
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::find($id); // todoモデルからidが$idと一致するレコードを取得。Railsでいうset_todoと同じ。
        // 疑問：LaravelではRailsのように処理をまとめるフィルタ機能はあるのかな？

        return view('todo.edit', compact('todo')); // src/resources/views/todo/edit.blade.phpを表示する処理を追加
        // compact関数で指定したtodoは、view関数の第二引数で指定した変数名と同じになる。つまり、view関数の第二引数で指定した変数名を使って、ビューファイルに渡すことができる。
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
        $todo = Todo::find($id);

        $todo->title = $request->input('title');
        $todo->save();

        return redirect('todos')->with(
            'status',
            $todo->title . 'を更新しました。'
        ); // 更新後、一覧画面にリダイレクトする処理を追加。上の行の.は、文字列を連結するためのもの。
        // なので、flashメッセージで表示される内容としては「~を更新しました。」となる。 PHPの連結演算子.なので、Railsのように+でないことで覚えとこ。
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('todos')->with(
            'status',
            $todo->title . 'を削除しました。'
        ); // 削除後、一覧画面にリダイレクトする処理を追加
        // ブラウザで「本当に削除しますか？」といった確認表示をするには、Railsではコントローラに処理を書いていた。
        // Laravelでは、JavaScriptを使って確認表示をすることが多い。
        // つまり、ビューファイルにJavaScriptを書くことになる。Railsは便利すぎだったのかもしれん
    }
}
