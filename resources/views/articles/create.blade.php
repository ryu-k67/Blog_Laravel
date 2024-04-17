@extends('layouts.app')
@section('content')
@include('commons.errors')
<form action="{{ route('articles.store') }}" method="post">
    @include('articles.form')
    <button type="submit">投稿</button>
    <a href="{{ route('articles.index') }}" class="plain-link">キャンセル</a>
</form>
@endsection()