@extends('layouts.app_original')
@section('content')
    <main>
        <div class="section">
            <div class="wrap">
                <div class="detailsbox">
                    <p class="time">投稿日：{{ $post->created_at }}</p>
                    <h2 class="title">{{ $post->title }}</h2>
                    <div class="inn">
                        <p class="txt">{{ $post->body }}</p>
                    </div>
                    <div class="btn_box flex">
                        <p class="more_btn"><a href="{{ route('posts.edit', $post->id) }}">編集する</a></p>
                        <p class="more_btn"><a href="{{ route('posts.index') }}">一覧へ戻る</a></p>
                        <form action='{{ route('posts.destroy',$post->id) }}' method='post' class="form_btn">
                            @csrf
                            @method('delete')
                            <input type='submit' value='削除する' class="btn-danger" onclick='return confirm("本当に削除しますか？");'>
                        </form>
                    </div>
                </div>
                <p class="co_more_btn"><button type="button" onclick="location.href='{{ route('comments.create',$post->id) }}'">コメントする</button></p>
                <div class="comment_area">
                    <p class="title">コメント一覧</p>
                    @foreach($post->comments as $comment)
                    <div class="box">
                        <div class="box_item">
                            <p class="time">投稿日：{{ $comment->created_at }}</p>
                            <p class="txt">{{ $comment->body }}</p>
                            <p class="username">投稿者：{{ $comment->user->name }}さん</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection