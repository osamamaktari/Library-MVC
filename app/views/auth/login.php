<?php ob_start(); ?>
<h1>login</h1>
<form method="POST" action="/login">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <button type="submit">login</button>
</form>
<?php $content = ob_get_clean(); include __DIR__ . '/../layout.php'; ?>
