<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<?php if (session()->getFlashdata('error')): ?>
    <p style="color: red;">
        <?= esc(session()->getFlashdata('error')) ?>
    </p>
<?php endif; ?>

<?php if (session()->getFlashdata('message')): ?>
    <p style="color: green;">
        <?= esc(session()->getFlashdata('message')) ?>
    </p>
<?php endif; ?>

<?= validation_list_errors() ?>

<form method="post" action="<?= site_url('login') ?>">
    <?= csrf_field() ?>

    <p>
        <label>Username:</label><br>
        <input type="text" name="username" value="<?= old('username') ?>">
    </p>

    <p>
        <label>Password:</label><br>
        <input type="password" name="password">
    </p>

    <button type="submit">Login</button>
</form>

<br>

<a href="<?= site_url('/') ?>">Back to Home</a>

</body>
</html>