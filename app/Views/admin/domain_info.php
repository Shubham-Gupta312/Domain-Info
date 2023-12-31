<?= $this->extend('snippet.php') ?>
<?= $this->section('content') ?>
<div class="container mt-3">
    <div class="box d-flex">
        <h2>Select Services</h2>
        <a href="<?= base_url('domain_list') ?>">
            <button class="btn btn-secondary mt-1">Go Back</button>
        </a>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="domainCheckbox">
        <label class="form-check-label" for="domainCheckbox">Domain</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="hostingCheckbox">
        <label class="form-check-label" for="hostingCheckbox">Hosting</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="sslCheckbox">
        <label class="form-check-label" for="sslCheckbox">SSL</label>
    </div>
</div>

<div class="container mt-2">
    <strong id="result" class="text-danger"></strong>

</div>

<div class="container mt-3" id="domainDiv" style="display: none;">
    <h3>Domain Information</h3>
    <!-- Domain-related fields go here -->
    <div class="row">
        <div class="col-md-6">
            <!-- Left Column -->
            <div class="mb-3">
                <label for="domainName" class="form-label">Domain Name</label>
                <input type="text" value="<?= $domain_detail['domainName'] ?>" class="form-control" id="domainName"
                    name="domainName" readonly placeholder="Enter domain name">
            </div>
            <div class="mb-3">
                <label for="expiryDate" class="form-label">Domain Expiry Date</label>
                <input type="date" class="form-control" value="<?= $domain_detail['domainExpdate'] ?>"
                    name="domainExpdate" id="expiryDate" readonly>
            </div>
            <!-- More domain-related fields can go here -->
        </div>
        <div class="col-md-6">
            <!-- Right Column -->
            <div class="mb-3">
                <label for="domainCost" class="form-label">Domain Cost</label>
                <input type="text" class="form-control" id="domainCost" value="<?= $domain_detail['domainCost'] ?>"
                    name="domainCost" placeholder="Enter domain cost" readonly>

            </div>
            <div class="mb-3">
                <label for="sellingCost" class="form-label">Selling Cost</label>
                <input type="text" class="form-control" id="sellingCost" value="<?= $domain_detail['sellingCost'] ?>"
                    name="sellingCost" placeholder="Enter selling cost" readonly>

            </div>
            <!-- More domain-related fields can go here -->
        </div>
        <div class="col-md-6">
            <!-- Left Column -->
            <div class="mb-3">
                <label for="domainProvider" class="form-label">Domain Provider</label>
                <input type="text" class="form-control" id="domainProvider"
                    value="<?= $domain_detail['domainProvider'] ?>" name="domainProvider"
                    placeholder="Enter domain provider name" readonly>

            </div>
            <div class="mb-3">
                <label for="RegistrationDate" class="form-label">Domain Registration Date</label>
                <input type="date" class="form-control" value="<?= $domain_detail['domainRegdate'] ?>"
                    name="domainRegdate" id="RegistrationDate" readonly>

            </div>
            <!-- More domain-related fields can go here -->
        </div>
        <div class="col-md-6">
            <!-- Right Column -->
            <div class="mb-3">
                <label for="email" class="form-label">Registered Email</label>
                <input type="email" class="form-control" id="email" value="<?= $domain_detail['email'] ?>" name="email"
                    placeholder="Enter Registered Email" readonly>

            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact No.</label>
                <input type="text" class="form-control" id="contact" value="<?= $domain_detail['phone'] ?>" name="phone"
                    placeholder="Enter Contact Number" readonly>

            </div>
            <!-- More domain-related fields can go here -->
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="company" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="company" value="<?= $domain_detail['company'] ?>"
                    name="company" placeholder="Enter Company Name" readonly>

            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="renewalDate" class="form-label">Domain Renewal Year</label>
                <input type="date" class="form-control" value="<?= $domain_detail['renewalDate'] ?>" name="renewalDate"
                    id="renewalDate" readonly>

            </div>
        </div>
    </div>
</div>
</div>

<div class="container mt-3" id="hostingDiv" style="display: none;">
    <h3>Hosting Information</h3>
    <!-- Hosting-related fields go here -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="totalSpace" class="form-label">Total Number of Space (GB)</label>
                <input type="text" class="form-control" value="<?= $domain_detail['space'] ?>" id="totalSpace"
                    name="space" placeholder="Enter total space" readonly>

            </div>
            <div class="mb-3">
                <label for="expiryDate" class="form-label">Expiry Date</label>
                <input type="date" class="form-control" value="<?= $domain_detail['expDate'] ?>" name="expDate"
                    id="expiryDate" readonly>

            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="hostingCost" class="form-label">Hosting Cost</label>
                <input type="text" class="form-control" id="hostingCost" value="<?= $domain_detail['hostingCost'] ?>"
                    name="hostingCost" readonly placeholder="Enter hosting cost">

            </div>
            <div class="mb-3">
                <label for="hostingSpace" class="form-label">Hosting Space (GB)</label>
                <input type="text" class="form-control" id="hostingSpace" value="<?= $domain_detail['hostingSpace'] ?>"
                    name="hostingSpace" readonly placeholder="Enter hosting space">

            </div>
        </div>
    </div>
</div>


<div class="container mt-3" id="sslDiv" style="display: none;">
    <h3>SSL Information</h3>
    <!-- SSL-related fields go here -->
    <div class="row">
        <div class="col-md-6">
            <!-- Left Column -->
            <div class="mb-3">
                <label for="domainName" class="form-label">Domain Name</label>
                <input type="text" class="form-control" id="domainName" value="<?= $domain_detail['domain_Name'] ?>"
                    name="domain_Name" readonly placeholder="Enter domain name">

            </div>
            <div class="mb-3">
                <label for="expiryDate" class="form-label">Expiry Date</label>
                <input type="date" class="form-control" id="expiryDate" value="<?= $domain_detail['ssl_expDate'] ?>"
                    name="ssl_expDate" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Right Column -->
            <div class="mb-3">
                <label for="domainCost" class="form-label">Cost</label>
                <input type="text" class="form-control" id="domainCost" value="<?= $domain_detail['cost'] ?>"
                    name="cost" placeholder="Enter domain cost" readonly>
            </div>
        </div>
    </div>
</div>
<script>
    // Function to check checkbox status and display corresponding divs
    function showHideDivs() {
        var hostingCheckbox = document.getElementById('hostingCheckbox');
        var domainCheckbox = document.getElementById('domainCheckbox');
        var sslCheckbox = document.getElementById('sslCheckbox');

        var hostingDiv = document.getElementById('hostingDiv');
        var domainDiv = document.getElementById('domainDiv');
        var sslDiv = document.getElementById('sslDiv');

        hostingDiv.style.display = hostingCheckbox.checked ? 'block' : 'none';
        domainDiv.style.display = domainCheckbox.checked ? 'block' : 'none';
        sslDiv.style.display = sslCheckbox.checked ? 'block' : 'none';

        if (hostingCheckbox.checked && sslCheckbox.checked) {
            hostingDiv.style.display = 'block';
            sslDiv.style.display = 'block';
        }
        if (domainCheckbox.checked && sslCheckbox.checked) {
            domainDiv.style.display = 'block';
            sslDiv.style.display = 'block';
        }
        if (hostingCheckbox.checked && domainCheckbox.checked && sslCheckbox.checked) {
            hostingDiv.style.display = 'block';
            domainDiv.style.display = 'block';
            sslDiv.style.display = 'block';
        }
    }

    // Add change event listeners to the checkboxes
    document.getElementById('hostingCheckbox').addEventListener('change', showHideDivs);
    document.getElementById('domainCheckbox').addEventListener('change', showHideDivs);
    document.getElementById('sslCheckbox').addEventListener('change', showHideDivs);

    // Initially call the function to check the status of checkboxes
    showHideDivs();

    // Calculate remaining time to expire domain
    // Get references to the date input fields
    const startDateInput = document.getElementById("RegistrationDate");
    const endDateInput = document.getElementById("expiryDate");
    const resultText = document.getElementById("result");

    // Function to calculate date difference
    function calculateDateDifference() {
        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);
        const today = new Date(); // Get today's date

        if (!isNaN(startDate.getTime()) && !isNaN(endDate.getTime())) {
            if (endDate < today) {
                // Domain has expired
                resultText.innerText = 'The domain has expired. Please renew it.';
            } else {
                const difference = Math.abs(endDate - today);
                const differenceInDays = Math.ceil(difference / (1000 * 60 * 60 * 24));
                resultText.innerText = `The domain will expire in ${differenceInDays} days. Domain expiry date is ${endDate.toDateString()}.`;
            }
        }
    }
    // Add event listeners to date input fields
    startDateInput.addEventListener('input', calculateDateDifference);
    endDateInput.addEventListener('input', calculateDateDifference);

    // Initially calculate the difference
    calculateDateDifference();
</script>


<?= $this->endSection() ?>