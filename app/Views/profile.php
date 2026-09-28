<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>

<nav>
    <a href="/my-ci4-app/">Today</a> |
    <a href="/my-ci4-app/tasks">All Tasks</a> |
    <a href="/my-ci4-app/profile">Profile</a> |
    <a href="/my-ci4-app/about">About</a>
</nav>

<h1>Demo User Profile</h1>

<p>
    <strong>Username:</strong>
    <?= esc($user['username']) ?>
</p>

<p>
    <strong>Full Name:</strong>
    <?= esc($user['full_name']) ?>
</p>

<p>
    <strong>Email:</strong>
    <?= esc($user['email']) ?>
</p>

<p>
    <strong>Created At:</strong>
    <?= esc($user['created_at']) ?>
</p>

</body>
</html>