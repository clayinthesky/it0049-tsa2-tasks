<nav class="nav">
    <a href="<?= site_url('/') ?>">Welcome</a>
    <a href="<?= site_url('tasks') ?>">Task List</a>
    <a href="<?= site_url('profile') ?>">Profile</a>
    <a href="<?= site_url('about') ?>">About</a>
    <?php if (session('user_id')): ?><a href="<?= site_url('logout') ?>">Logout</a><?php else: ?><a href="<?= site_url('login') ?>">Login</a><?php endif; ?>
</nav>
