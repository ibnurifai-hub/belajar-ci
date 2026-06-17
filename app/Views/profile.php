<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile Information</h5>

                        <div class="row mb-10">
                            <label class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <?= $username ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <span class="badge bg-danger"><?= $role ?></span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <?= $email ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Login Time</label>
                            <div class="col-sm-10">
                                <?= $login_time ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <?php if($status == 'Online'): ?>
                                    <span class="badge bg-success">Sudah Login</span>
                                <?php else: ?>
                                    <span class="badge bg-secondary">Offline</span>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
<?= $this->endSection() ?>