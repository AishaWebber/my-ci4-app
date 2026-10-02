<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>

<h1>Edit Task</h1>

<?= validation_list_errors() ?>

<form method="post"
      action="<?= site_url('tasks/update/' . $task['id']) ?>">

    <?= csrf_field() ?>

    <p>
        <label>Task Title:</label><br>
        <input
            type="text"
            name="title"
            value="<?= old('title', $task['title']) ?>"
        >
    </p>

    <p>
        <label>Status:</label><br>
        <select name="status">
            <option value="pending"
                <?= old('status', $task['status']) === 'pending' ? 'selected' : '' ?>>
                Pending
            </option>

            <option value="in progress"
                <?= old('status', $task['status']) === 'in progress' ? 'selected' : '' ?>>
                In Progress
            </option>

            <option value="completed"
                <?= old('status', $task['status']) === 'completed' ? 'selected' : '' ?>>
                Completed
            </option>
        </select>
    </p>

    <p>
        <label>Task Date:</label><br>
        <input
            type="date"
            name="task_date"
            value="<?= old('task_date', $task['task_date']) ?>"
        >
    </p>

    <button type="submit">Update Task</button>
</form>

<br>

<a href="<?= site_url('tasks') ?>">Back to Task List</a>

</body>
</html>