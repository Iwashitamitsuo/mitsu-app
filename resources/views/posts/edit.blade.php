@extends('layouts.app_original')
@section('content')
    <main>
        <div class="section">
            <div class="wrap">
                <div class="form_container">
                    <div class="col-md-8">
                        <form action="{{ route('posts.update',$post->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label>タイトル</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <label>内容</label>
                                <textarea class="form-control" rows="5" name="body">{{ $post->body }}</textarea>
                            </div>
                            <p class="more_btn">
                                <button type="submit">更新する</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection