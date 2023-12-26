<?= $this->extend('snippet.php') ?>
<?= $this->section('content') ?>

<div class="container mt-3">
    <h1>Admin Dashboard</h1>
    <div class="container d-flex m-4">
        <a href="<?= base_url('domain_list') ?>"style="color: #000; text-decoration: none;">
            <div class="card p-3 m-3" style="width: 18rem;">
                <h3>Registered Doamin's</h3>
            </div>
        </a>
        <a href="<?= base_url('user_list') ?>" style="color: #000; text-decoration: none;">
            <div class="card p-3 m-3" style="width: 18rem;">
                <h3>Registered Admin Details</h3>
            </div>
        </a>
    </div>
</div>

<?= $this->endSection() ?>