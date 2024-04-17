@extends('layouts.app')
@section('content')
<div class="welcome">
    <h1>簡易ブログ</h1>
    @auth
    <a class="btn plain-link" href="{{ route('home') }}">マイページ</a>
    <a class="btn plain-link" href="{{ route('articles.index') }}">ブログを見る</a>
    @else
    <a class="btn plain-link" href="{{ route('register') }}">会員登録</a>
    <a class="btn plain-link" href="{{ route('login') }}">ログイン</a>
    @endauth
</div>
@endsection()