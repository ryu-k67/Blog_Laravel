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
        <div class="site-title">簡易ブログ</div>
    </header>
    <main class="container">
        @foreach ($articles as $article)
        <article class="article-item">
            <div class="article-title">{{ $article->title }}</div>
            <div class="article-body">{{ $article->body }}</div>
        </article>
        @endforeach
    </main>
    <footer>
        &copy; ryu
    </footer>
</body>
</html>