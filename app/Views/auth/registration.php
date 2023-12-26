<?= $this->extend('snippet.php') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h1>Sign-Up</h1>
    <form action="<?= base_url('register') ?>" method="post">
        <?php
        if (!empty(session()->getFlashdata('fail'))): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>
                    <?= session()->getFlashdata('fail'); ?>
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>
        <?php
        if (!empty(session()->getFlashdata('success'))): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>
                    <?= session()->getFlashdata('success'); ?>
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>


        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            <span class="text-danger">
                <?= isset($validation) ? display_error($validation, 'email') : ""; ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="tel" class="form-control" id="contact" name="phone" placeholder="Enter contact number">
            <span class="text-danger">
                <?= isset($validation) ? display_error($validation, 'phone') : ""; ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            <span class="text-danger">
                <?= isset($validation) ? display_error($validation, 'password') : ""; ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="cpassword" id="confirmPassword"
                placeholder="Confirm password">
            <span class="text-danger">
                <?= isset($validation) ? display_error($validation, 'cpassword') : ""; ?>
            </span>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Register</button>
        <a href="<?= base_url() ?>">
        <button type="button" class="btn btn-secondary m-2">Go Back</button>
      </a>
    </form>
    Already have account, <a href="<?= base_url('login') ?>">Sign-in</a>
</div>

<?= $this->endSection() ?>