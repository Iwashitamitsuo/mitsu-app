@extends('layouts.app_original')
@section('content')
    <main>
        <div class="section">
            <div class="wrap">
                <p class="more_btn new_btn"><a href="{{ route('posts.create') }}">新規投稿</a></p>
                <div class="indexbox">
                    @foreach ($posts as $post)
                    <div class="box flex">
                        <div class="box_item">
                            <p class="time">投稿日：{{ $post->created_at }}</p>
                            <h2 class="title">{{ $post->title }}</h2>
                            <p class="txt">{{ $post->body }}</p>
                            <p class="username">投稿者：{{ $post->user->name }}さん</p>
                        </div>
                        <p class="more_btn"><a href="{{ route('posts.show', $post->id) }}">詳細はこちら</a></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection