<?= $this->extend('snippet.php') ?>
<?= $this->section('content') ?>

<div class="container mt-3">
    <h2>List of Registered Domain's</h2>
    <table class="table table-bordered  table-hover mt-5">
        <thead>
            <tr>
                <th scope="col">S.no</th>
                <th scope="col">Domain Name</th>
                <th scope="col">Domain Provider</th>
                <th scope='col'>Registered Email</th>
                <th scope='col'>Expiry Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($domain as $user): ?>
                <tr>
                    <th scope="row">
                        <?= $user['id'] ?>
                    </th>
                    <td>
                        <?= $user['domainName'] ?>
                    </td>
                    <td>
                        <?= $user['domainProvider'] ?>
                    </td>
                    <td>
                        <?= $user['email'] ?>
                    </td>
                    <td>
                        <?= $user['domainExpdate'] ?>
                    </td>
                    <td>
                        <a href="<?= base_url('domain_info/'.$user['id'])?>">View More</a>
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