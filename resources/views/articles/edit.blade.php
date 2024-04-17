@extends('layouts.app')
@section('content')
@include('commons.errors')
<form action="{{ route('articles.update', $article) }}" method="post">
    @method('patch')
    @include('articles.form')
    <button type="submit">更新</button>
    <a href="{{ route('articles.show', $article) }}" class="plain-link">キャンセル</a>
</form>
@endsection()