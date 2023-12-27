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
        <a href="<?= base_url('login') ?>" style="color: black; text-decoration: none;">
            <div class="card-body">
                <h3>Admin</h3>
            </div>
        </a>
    </div>
</div>

<?= $this->endSection() ?>