<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
    <a href="/" class="site-title plain-link">簡易ブログ</a>
        <nav class="tab">
            <ul>
                @if (Auth::check())
                <li><a class="tab-item{{ Request::is('home') ? ' active' : ''}} plain-link" href="{{ route('home') }}">マイページ</a></li>
                <li><a class="tab-item{{ Request::is('articles') ? ' active' : ''}} plain-link" href="{{ route('articles.index') }}">記事検索</a></li>
                <li><a class="tab-item{{ Request::is('bookmarks') ? ' active' : ''}} plain-link" href="{{ route('bookmarks') }}">ブックマーク</a></li>
                <li>
                    <form on-submit="return confirm('ログアウトしますか？')" action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">ログアウト</button>
                    </form>
                </li>
                @else 
                <li><a href="{{ route('login') }}" class="btn plain-link">ログイン</a></li>
                <li><a href="{{ route('register') }}" class="btn plain-link">会員登録</a></li>
                @endif
            </ul>
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        &copy; ryu
    </footer>
</body>
</html>