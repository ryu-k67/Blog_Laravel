@extends('layouts.app')
@section('content')
<h1 class="page-heading">記事検索</h1>
@include('articles.search')
@include('articles.articles')
@endsection()