<?= $this->extend('snippet.php') ?>
<?= $this->section('content') ?>

<div class="container mt-2">
    <div class="title d-flex">
        <div>
            <h1>Domain Information</h1>
        </div>
        <div>
            <a href="<?= base_url() ?>">
                <button class="btn btn-secondary mt-2">Go Back</button>
            </a>
        </div>
    </div>
    <form action="<?= base_url('add_detail') ?>" method="post">
        <?php
        if (!empty(session()->getFlashdata('fail'))): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>
                    <?= session()->getFlashdata('fail'); ?>
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>

        <div class="row">
            <div class="col-md-6">
                <!-- Left Column -->
                <div class="mb-3">
                    <label for="domainName" class="form-label">Domain Name</label>
                    <input type="text" class="form-control" id="domainName" name="domainName"
                        placeholder="Enter domain name">
                    <span class="text-danger">
                        <?= isset($validation) ? display_error($validation, 'domainName') : ""; ?>
                    </span>
                </div>
                <div class="mb-3">
                    <label for="expiryDate" class="form-label">Domain Expiry Date</label>
                    <input type="date" class="form-control" name="domainExpdate" id="expiryDate">
                    <span class="text-danger">
                        <?= isset($validation) ? display_error($validation, 'domainExpdate') : ""; ?>
                    </span>
                </div>
                <!-- More domain-related fields can go here -->
            </div>
            <div class="col-md-6">
                <!-- Right Column -->
                <div class="mb-3">
                    <label for="domainCost" class="form-label">Domain Cost</label>
                    <input type="text" class="form-control" id="domainCost" name="domainCost"
                        placeholder="Enter domain cost">
                    <span class="text-danger">
                        <?= isset($validation) ? display_error($validation, 'domainCost') : ""; ?>
                    </span>
                </div>
                <div class="mb-3">
                    <label for="sellingCost" class="form-label">Selling Cost</label>
                    <input type="text" class="form-control" id="sellingCost" name="sellingCost"
                        placeholder="Enter selling cost">
                    <span class="text-danger">
                        <?= isset($validation) ? display_error($validation, 'sellingCost') : ""; ?>
                    </span>
                </div>
                <!-- More domain-related fields can go here -->
            </div>
            <div class="col-md-6">
                <!-- Left Column -->
                <div class="mb-3">
                    <label for="domainProvider" class="form-label">Domain Provider</label>
                    <input type="text" class="form-control" id="domainProvider" name="domainProvider"
                        placeholder="Enter domain provider name">
                    <span class="text-danger">
                        <?= isset($validation) ? display_error($validation, 'domainProvider') : ""; ?>
                    </span>
                </div>
                <div class="mb-3">
                    <label for="RegistrationDate" class="form-label">Domain Registration Date</label>
                    <input type="date" class="form-control" name="domainRegdate" id="RegistrationDate">
                    <span class="text-danger">
                        <?= isset($validation) ? display_error($validation, 'domainRegdate') : ""; ?>
                    </span>
                </div>
                <!-- More domain-related fields can go here -->
            </div>
            <div class="col-md-6">
                <!-- Right Column -->
                <div class="mb-3">
                    <label for="email" class="form-label">Registered Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter Registered Email">
                    <span class="text-danger">
                        <?= isset($validation) ? display_error($validation, 'email') : ""; ?>
                    </span>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact No.</label>
                    <input type="text" class="form-control" id="contact" name="phone"
                        placeholder="Enter Contact Number">
                    <span class="text-danger">
                        <?= isset($validation) ? display_error($validation, 'phone') : ""; ?>
                    </span>
                </div>
                <!-- More domain-related fields can go here -->
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="company" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="company" name="company"
                        placeholder="Enter Company Name">
                    <span class="text-danger">
                        <?= isset($validation) ? display_error($validation, 'company') : ""; ?>
                    </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="renewalDate" class="form-label">Domain Renewal Year</label>
                    <input type="date" class="form-control" name="renewalDate" id="renewalDate">
                    <span class="text-danger">
                        <?= isset($validation) ? display_error($validation, 'renewalDate') : ""; ?>
                    </span>
                </div>
            </div>
        </div>


        <div class="container mt-2">
            <h1>Hosting Information</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="totalSpace" class="form-label">Total Number of Space (GB)</label>
                        <input type="text" class="form-control" id="totalSpace" name="space"
                            placeholder="Enter total space">
                        <span class="text-danger">
                            <?= isset($validation) ? display_error($validation, 'space') : ""; ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="expiryDate" class="form-label">Expiry Date</label>
                        <input type="date" class="form-control" name="expDate" id="expiryDate">
                        <span class="text-danger">
                            <?= isset($validation) ? display_error($validation, 'expDate') : ""; ?>
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="hostingCost" class="form-label">Hosting Cost</label>
                        <input type="text" class="form-control" id="hostingCost" name="hostingCost"
                            placeholder="Enter hosting cost">
                        <span class="text-danger">
                            <?= isset($validation) ? display_error($validation, 'hostingCost') : ""; ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="hostingSpace" class="form-label">Hosting Space (GB)</label>
                        <input type="text" class="form-control" id="hostingSpace" name="hostingSpace"
                            placeholder="Enter hosting space">
                        <span class="text-danger">
                            <?= isset($validation) ? display_error($validation, 'hostingSpace') : ""; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-2">
            <h1>SSL</h1>
            <div class="row">
                <div class="col-md-6">
                    <!-- Left Column -->
                    <div class="mb-3">
                        <label for="domainName" class="form-label">Domain Name</label>
                        <input type="text" class="form-control" id="domainName" name="domain_Name"
                            placeholder="Enter domain name">
                        <span class="text-danger">
                            <?= isset($validation) ? display_error($validation, 'domain_Name') : ""; ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="expiryDate" class="form-label">Expiry Date</label>
                        <input type="date" class="form-control" id="expiryDate" name="ssl_expDate">
                        <span class="text-danger">
                            <?= isset($validation) ? display_error($validation, 'ssl_expDate') : ""; ?>
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Right Column -->
                    <div class="mb-3">
                        <label for="domainCost" class="form-label">Cost</label>
                        <input type="text" class="form-control" id="domainCost" name="cost"
                            placeholder="Enter domain cost">
                        <span class="text-danger">
                            <?= isset($validation) ? display_error($validation, 'cost') : ""; ?>
                        </span>
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


<?= $this->endSection() ?>