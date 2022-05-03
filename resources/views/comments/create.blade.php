@extends('layouts.app_original')
@section('content')
<main class="section">
    <div class="wrap">
        <div class="comment_top">
            <h2 class="comment_tit">以下の記事にコメントします</h2>
            <div class="inn">
                <p class="time">投稿日時：{{ $post->created_at }}</p>
                <p class="title">{{ $post->title }}</p>
                <p class="txt">{{ $post->body }}</p>
            </div>
        </div>
        <div class="comment_bottom">
            <form action="{{ route('comments.store') }}" method="post">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="form-group">
                    <label>コメント</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body"></textarea>
                </div>
                <div class="co_more_btn">
                    <button type="submit">コメントする</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection