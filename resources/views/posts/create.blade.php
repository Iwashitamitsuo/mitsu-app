@extends('layouts.app_original')
@section('content')
    <main>
        <div class="section">
            <div class="wrap">
                <div class="form_container">
                    <div class="col-md-8">
                        <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label>タイトル</label>
                                <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                            </div>
                            <div class="form-group">
                                <label>内容</label>
                                <textarea class="form-control" placeholder="内容" rows="5" name="body"></textarea>
                            </div>
                            <p class="more_btn">
                                <button type="submit">作成</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection