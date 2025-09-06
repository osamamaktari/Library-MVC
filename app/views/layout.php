<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>library</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="/books">books</a>
            <a href="/search?q=">search..</a>
            <?php session_start(); if(isset($_SESSION['user'])): ?>
                <span>مرحباً <?= $_SESSION['user'] ?></span>
                <a href="/logout">logout</a>
            <?php else: ?>
                <a href="/login">login</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>
        <?= $content ?? '' ?>
    </main>
</body>
</html>
