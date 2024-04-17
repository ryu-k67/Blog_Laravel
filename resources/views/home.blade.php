@extends('layouts.app')
@section('content')
@include('commons.errors')
<h1 class="page-heading">マイページ</h1>
<p>ようこそ、{{ Auth::user()->name }}さん｜<a href="{{ route('articles.create') }}" class="plain-link">記事を書く</a></p>
@include('articles.articles')
@endsection()