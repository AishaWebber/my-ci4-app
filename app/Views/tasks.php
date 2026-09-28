<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tasks</title>
</head>
<body>

<nav>
    <a href="/my-ci4-app/">Today</a> |
    <a href="/my-ci4-app/tasks">All Tasks</a> |
    <a href="/my-ci4-app/profile">Profile</a> |
    <a href="/my-ci4-app/about">About</a>
</nav>

<h1>Full Task List</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Task Date</th>
        <th>Created At</th>
    </tr>

    <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= esc($task['title']) ?></td>
            <td><?= esc($task['status']) ?></td>
            <td><?= esc($task['task_date']) ?></td>
            <td><?= esc($task['created_at']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>