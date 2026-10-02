<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>

<h1>Tasks for Today</h1>

<nav>
    <a href="<?= site_url('/') ?>">Today</a> |
    <a href="<?= site_url('tasks') ?>">All Tasks</a> |
    <a href="<?= site_url('profile') ?>">Profile</a> |
    <a href="<?= site_url('about') ?>">About</a> |
    <a href="<?= site_url('customers') ?>">Customers</a> |
    <a href="<?= site_url('users') ?>">Users</a>
</nav>

<hr>

<?php if (session()->get('isLoggedIn')): ?>

    <p>
        Welcome,
        <?= esc(session()->get('full_name')) ?>
    </p>

    <a href="<?= site_url('tasks/new') ?>">Add New Task</a> |
    <a href="<?= site_url('logout') ?>">Logout</a>

<?php else: ?>

    <a href="<?= site_url('login') ?>">Login to Manage Tasks</a>

<?php endif; ?>

<hr>

<?php if (empty($tasks)): ?>

    <p>No active tasks for today.</p>

<?php else: ?>

    <?php foreach ($tasks as $task): ?>

        <article>
            <h2><?= esc($task['title']) ?></h2>

            <p>
                Status:
                <?= esc($task['status']) ?>
            </p>

            <p>
                Task Date:
                <?= esc($task['task_date']) ?>
            </p>

            <?php if (session()->get('isLoggedIn')): ?>

                <a href="<?= site_url('tasks/edit/' . $task['id']) ?>">
                    Edit
                </a>

                <form
                    method="post"
                    action="<?= site_url('tasks/delete/' . $task['id']) ?>"
                    style="display: inline;"
                    onsubmit="return confirm('Archive this task?');"
                >
                    <?= csrf_field() ?>

                    <button type="submit">
                        Delete
                    </button>
                </form>

            <?php endif; ?>
        </article>

        <hr>

    <?php endforeach; ?>

<?php endif; ?>

</body>
</html>