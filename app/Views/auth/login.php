<?= $this->extend('snippet.php') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
  <h1>Sign-In</h1>
  <form action="<?= base_url('login') ?>" method="post">
    <div class="mb-3">
      <label for="emailUsername" class="form-label">Email or Username</label>
      <input type="text" class="form-control" id="emailUsername" name="email" placeholder="Enter email or username">
      <span class="text-danger">
        <?= isset($validation) ? display_error($validation, 'email') : ""; ?>
      </span>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
      <span class="text-danger">
        <?= isset($validation) ? display_error($validation, 'password') : ""; ?>
      </span>
    </div>
    <div class="button d-flex">
      <button type="submit" name="submit" class="btn btn-primary m-2">Login</button>
      <a href="<?= base_url() ?>">
        <button type="button" class="btn btn-secondary m-2">Go Back</button>
      </a>
    </div>
  </form>
  Don't have account <a href="<?= base_url('register') ?>">Sign-Up</a>
</div>

<?= $this->endSection() ?>