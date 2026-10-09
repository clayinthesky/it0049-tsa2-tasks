<?= view('layout/header') ?><?= view('layout/nav') ?><h1>Tasks for Today</h1><p>Welcome to the public task overview.</p><?= view('tasks/_list', ['tasks' => $tasks]) ?><?= view('layout/footer') ?>
