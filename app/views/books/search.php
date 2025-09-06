<?php ob_start(); ?>
<h1>result of researsh</h1>
<form method="GET" action="/search">
    <input type="text" name="q" placeholder="ابحث عن كتاب..." value="<?= htmlspecialchars($_GET['q'] ?? '') ?>">
    <select name="category">
        <option value="">all cateogries</option>
        <option value="Programming">Programming</option>
        <option value="History">History</option>
    </select>
    <button type="submit">search...</button>
</form>
<ul>
<?php foreach ($books as $book): ?>
    <li><?= $book->title ?> - <?= $book->author ?> (<?= $book->price ?>$)</li>
<?php endforeach; ?>
</ul>
<?php $content = ob_get_clean(); include __DIR__ . '/../layout.php'; ?>
