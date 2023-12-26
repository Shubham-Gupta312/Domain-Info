<?= $this->extend('snippet.php') ?>
<?= $this->section('content') ?>

<div class="container mt-3">
    <h2>List of Registered User's</h2>
    <table class="table table-bordered  table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">S.no</th>
                <th scope="col">Email</th>
                <th scope="col">Contact Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <th scope="row">
                        <?= $user['id'] ?>
                    </th>
                    <td>
                        <?= $user['email'] ?>
                    </td>
                    <td>
                        <?= $user['phone'] ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="<?= base_url('admin_dashboard') ?>">
        <button class="btn btn-secondary">Go Back</button>
    </a>
</div>

<?= $this->endSection() ?>