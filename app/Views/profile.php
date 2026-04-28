<?= $this->extend('layout')?>
<?= $this->section('content')?>
<h4>Profil Pengguna</h4>

<p>Username: <?= session('username') ?></p>
<p>Role: <?= session('role') ?></p>
<p>Email: <?= session('email') ?></p>
<p>Login Time: <?= session('login_time') ?></p>
<?= $this->endSection() ?>