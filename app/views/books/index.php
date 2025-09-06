<?php ob_start(); ?>
<h1>list of books</h1>
<ul>
<?php foreach ($books as $book): ?>
    <li><?= $book->title ?> - <?= $book->author ?> (<?= $book->price ?>$)</li>
<?php endforeach; ?>
</ul>
<?php $content = ob_get_clean(); include __DIR__ . '/../layout.php'; ?>
