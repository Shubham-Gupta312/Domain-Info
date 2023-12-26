<?= $this->extend('snippet.php') ?>
<?= $this->section('content') ?>
    <div class="container mt-3">
        <h2>Select Services</h2>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="hostingCheckbox">
            <label class="form-check-label" for="hostingCheckbox">Hosting</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="domainCheckbox">
            <label class="form-check-label" for="domainCheckbox">Domain</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="sslCheckbox">
            <label class="form-check-label" for="sslCheckbox">SSL</label>
        </div>
    </div>

    <div class="container mt-3" id="hostingDiv" style="display: none;">
        <h3>Hosting Information</h3>
        <!-- Hosting-related fields go here -->
        <input type="text" class="form-control mb-2" placeholder="Hosting Field 1">
        <input type="text" class="form-control mb-2" placeholder="Hosting Field 2">
    </div>

    <div class="container mt-3" id="domainDiv" style="display: none;">
        <h3>Domain Information</h3>
        <!-- Domain-related fields go here -->
        <input type="text" class="form-control mb-2" placeholder="Domain Field 1">
        <input type="text" class="form-control mb-2" placeholder="Domain Field 2">
    </div>

    <div class="container mt-3" id="sslDiv" style="display: none;">
        <h3>SSL Information</h3>
        <!-- SSL-related fields go here -->
        <input type="text" class="form-control mb-2" placeholder="SSL Field 1">
        <input type="text" class="form-control mb-2" placeholder="SSL Field 2">
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
    </script>


<?= $this->endSection() ?>