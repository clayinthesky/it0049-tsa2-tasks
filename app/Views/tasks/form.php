<?= view('layout/header') ?><?= view('layout/nav') ?><h1><?= $task ? 'Edit Task' : 'New Task' ?></h1>
<form method="post" action="<?= $task ? site_url('tasks/' . $task['id']) : site_url('tasks') ?>"><?= csrf_field() ?>
    <label>Title</label><input name="title" value="<?= old('title', $task['title'] ?? '') ?>" required>
    <label>Description</label><textarea name="description"><?= old('description', $task['description'] ?? '') ?></textarea>
    <label>Task Date</label><input type="date" name="task_date" value="<?= old('task_date', $task['task_date'] ?? '') ?>" required>
    <button type="submit">Save Task</button>
</form><?= view('layout/footer') ?>
