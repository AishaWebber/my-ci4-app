<!DOCTYPE html>
<html>
<head>
    <title>New Task</title>
</head>
<body>

<h1>Create New Task</h1>

<?= validation_list_errors() ?>

<?php if (session()->getFlashdata('error')): ?>
    <p style="color: red;">
        <?= esc(session()->getFlashdata('error')) ?>
    </p>
<?php endif; ?>

<form method="post" action="<?= site_url('tasks/create') ?>">
    <?= csrf_field() ?>

    <p>
        <label>Task Title:</label><br>
        <input
            type="text"
            name="title"
            value="<?= old('title') ?>"
        >
    </p>

    <p>
        <label>Status:</label><br>
        <select name="status">
            <option value="pending"
                <?= old('status', 'pending') === 'pending' ? 'selected' : '' ?>>
                Pending
            </option>

            <option value="in progress"
                <?= old('status') === 'in progress' ? 'selected' : '' ?>>
                In Progress
            </option>

            <option value="completed"
                <?= old('status') === 'completed' ? 'selected' : '' ?>>
                Completed
            </option>
        </select>
    </p>

    <p>
        <label>Task Date:</label><br>
        <input
            type="date"
            name="task_date"
            value="<?= old('task_date') ?>"
        >
    </p>

    <button type="submit">Create Task</button>
</form>

<br>

<a href="<?= site_url('tasks') ?>">Back to Task List</a>

</body>
</html>