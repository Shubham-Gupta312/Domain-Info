<?= $this->extend('snippet.php') ?>
<?= $this->section('content') ?>

<div class="container d-flex m-5">
    <div class="card m-3" style="width: 18rem;">
        <a href="<?= base_url('add_detail') ?>"
            style="color: black; text-decoration: none;">
            <div class="card-body">
                <h3>Add Domain Details</h3>
            </div>
        </a>
    </div>
    <div class="card m-3" style="width: 18rem;">
    <!-- If admin login then it redirect to dashboard page otherwise it redirect to login page -->
        <a href="<?php echo (session()->loggedin == 'loggedin') ? base_url('admin_dashboard') : base_url('login') ?>" style="color: black; text-decoration: none;">
            <div class="card-body">
                <h3>Admin</h3>
            </div>
        </a>
        
    </div>
    <!-- <a href="<?php echo (session()->loggedin == 'loggedin') ? base_url('admin_dashboard') : base_url('login') ?>">hello</a> -->
</div>

<?= $this->endSection() ?>