@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                詳細画面
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>id</th>
                            <td>{{$todo->id}}</td> <!-- $todo->idと書くことで、$todoのidプロパティの値を取得できる。 -->
                        </tr>
                        <tr>
                            <th>title</th>
                            <td>{{$todo->title}}</td> <!-- $todo->titleと書くことで、$todoのtitleプロパティの値を取得できる。 -->
                        </tr>
                    </tbody>
                </table>
                <a href="{{ url('todos') }}" class="btn btn-info">戻る</a> <!-- 一覧画面に戻るためのリンクを追加 -->
                <!-- Railsでいうlink_toではなく、Laravelではurl関数を使う。url関数の第一引数には、リンク先のURLを指定する。 --> 
            </div>
        </div>
    </div>
</div>
@endsection