<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builder</title>
    <style>
        :root {
            --primary: #3498db;
            --secondary: #2ecc71;
            --danger: #e74c3c;
            --dark: #2c3e50;
            --light: #ecf0f1;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f6fa;
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px 0;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .header-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding: 0 30px;
        }

        .header-buttons .btn {
            flex: 1;
            max-width: 200px;
            padding: 12px 20px;
            font-size: 16px;
            min-width: 100px;
        }
        h1 {
            color: var(--dark);
            margin-bottom: 10px;
        }
        
        .main-content {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .builder-section, .saved-builds {
            flex: 1;
            min-width: 300px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            margin-bottom: 20px;
            color: var(--primary);
            border-bottom: 2px solid var(--light);
            padding-bottom: 10px;
        }
        
        .component-select {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }
        
        select, input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
        }
        
        .btn-danger {
            background-color: var(--danger);
            color: white;
        }
        
        .btn-danger:hover {
            background-color: #c0392b;
        }
        
        .btn-secondary {
            background-color: var(--secondary);
            color: white;
        }
        
        .btn-secondary:hover {
            background-color: #27ae60;
        }
        
        .current-build {
            margin-top: 20px;
            padding: 15px;
            background-color: var(--light);
            border-radius: 4px;
        }
        
        .current-build h3 {
            margin-bottom: 10px;
        }
        
        .current-build ul {
            list-style-type: none;
        }
        
        .current-build li {
            padding: 5px 0;
            border-bottom: 1px solid #ddd;
        }
        
        .build-actions {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }
        
        .saved-build {
            background-color: var(--light);
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 4px;
            position: relative;
        }
        
        .saved-build h3 {
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .saved-build ul {
            list-style-type: none;
            margin-bottom: 10px;
        }
        
        .saved-build li {
            padding: 5px 0;
            border-bottom: 1px solid #ddd;
        }
        
        .build-date {
            font-size: 12px;
            color: #7f8c8d;
            margin-top: 5px;
        }
        
        .build-actions-right {
            position: absolute;
            top: 15px;
            right: 15px;
        }
        
        .total-price {
            font-weight: bold;
            margin-top: 10px;
            font-size: 18px;
        }
        
        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">

        <header>
            <h1>PC Builder</h1>
            <p>Build your dream computer and save your configurations</p>
            <div class="header-buttons">
              <button class="btn btn-secondary" onclick="openComparePage()">Compare Components</button>
              <button class="btn btn-secondary" onclick="openPreBuiltPage()">Pre Built PCs</button>
            </div>
          </header>

        <div class="main-content">
            <section class="builder-section">
                <h2>Build Your PC</h2>

                <div class="component-select">
                    <label for="cpu">CPU (Processor)</label>
                    <select id="cpu">
                        <option value="">Select a CPU</option>
                        <?php
                        require_once("dbconnect.php");
                        $result = mysqli_query($conn, "SELECT cpu_sku, price FROM cpu");

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row[0], " ($", $row[1], ")" ?>"> <?php echo $row[0], " - ", $row[1], "tk" ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>


                <div class="component-select">
                    <label for="gpu">GPU (Graphics Card)</label>
                    <select id="gpu">
                        <option value="">Select a GPU</option>
                        <?php
                        require_once("dbconnect.php");
                        $result = mysqli_query($conn, "SELECT gpu_sku, price FROM gpu");

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row[0], " ($",$row[1], ")"?>"> <?php echo $row[0], " - ", $row[1], "tk" ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="component-select">
                    <label for="ram">RAM (Memory)</label>
                    <select id="ram">
                        <option value="">Select RAM</option>
                        <?php
                        require_once("dbconnect.php");
                        $result = mysqli_query($conn, "SELECT brand, ram_sku, capacity, price FROM ram");

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row[0], " ", $row[1], " ", $row[2], "GB", " ($",$row[3], ")" ?>"> <?php echo $row[0], " ", $row[1], " ", $row[2], "GB - ", $row[3], "tk" ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="component-select">
                    <label for="motherboard">Motherboard</label>
                    <select id="motherboard">
                        <option value="">Select a Motherboard</option>
                        <?php
                        require_once("dbconnect.php");
                        $result = mysqli_query($conn, "SELECT brand, mobo_sku, price FROM motherboard");

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row[0], " ", $row[1], " ($",$row[2], ")" ?>"> <?php echo $row[0], " ", $row[1], " - ", $row[2], "tk" ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="component-select">
                    <label for="storage">Storage</label>
                    <select id="storage">
                        <option value="">Select Storage</option>
                        <?php
                        require_once("dbconnect.php");
                        $result = mysqli_query($conn, "SELECT brand, s_sku, capacity, price FROM storage");

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row[0], " ", $row[1], " ", $row[2], "GB", " ($",$row[3], ")" ?>"> <?php echo $row[0], " ", $row[1], " ", $row[2], "GB - ", $row[3], "tk" ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="component-select">
                    <label for="psu">PSU (Power Supply)</label>
                    <select id="psu">
                        <option value="">Select a PSU</option>
                        <?php
                        require_once("dbconnect.php");
                        $result = mysqli_query($conn, "SELECT brand, pwr_sku, capacity, price FROM power_supply");

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row[0], " ", $row[1], " ", $row[2], "W", " ($",$row[3], ")" ?>"> <?php echo $row[0], " ", $row[1], " ", $row[2], "W - ", $row[3], "tk" ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="current-build">
                    <h3>Current Build</h3>
                    <ul id="currentBuildList">
                        <li>No components selected yet</li>
                    </ul>
                    <div class="total-price" id="totalPrice">Total: 0 tk</div>
                </div>

                <div class="build-actions">
                    <button id="saveBuild" class="btn btn-primary">Save Build</button>
                    <button id="resetBuild" class="btn btn-danger">Reset</button>
                </div>
            </section>

            <section class="saved-builds">
                <h2>Saved Builds</h2>
                <div id="savedBuildsContainer">
                    <p>No saved builds yet. Build a PC and save it here!</p>
                </div>
            </section>
        </div>
    </div>

    <script>
        // DOM Elements
        const cpuSelect = document.getElementById('cpu');
        const gpuSelect = document.getElementById('gpu');
        const ramSelect = document.getElementById('ram');
        const moboSelect = document.getElementById('motherboard');
        const storageSelect = document.getElementById('storage');
        const psuSelect = document.getElementById('psu');
        const currentBuildList = document.getElementById('currentBuildList');
        const totalPriceElement = document.getElementById('totalPrice');
        const saveBuildBtn = document.getElementById('saveBuild');
        const resetBuildBtn = document.getElementById('resetBuild');
        const savedBuildsContainer = document.getElementById('savedBuildsContainer');

        // State
        let currentBuild = {
            cpu: null,
            gpu: null,
            ram: null,
            motherboard: null,
            storage: null,
            psu: null
        };

        let savedBuilds = JSON.parse(localStorage.getItem('pcBuilds')) || [];

        // Initialize
        updateCurrentBuildDisplay();
        renderSavedBuilds();

        // Event Listeners
        cpuSelect.addEventListener('change', (e) => {
            currentBuild.cpu = e.target.value;
            updateCurrentBuildDisplay();
        });

        gpuSelect.addEventListener('change', (e) => {
            currentBuild.gpu = e.target.value;
            updateCurrentBuildDisplay();
        });

        ramSelect.addEventListener('change', (e) => {
            currentBuild.ram = e.target.value;
            updateCurrentBuildDisplay();
        });

        moboSelect.addEventListener('change', (e) => {
            currentBuild.motherboard = e.target.value;
            updateCurrentBuildDisplay();
        });

        storageSelect.addEventListener('change', (e) => {
            currentBuild.storage = e.target.value;
            console.log(currentBuild.storage);
            updateCurrentBuildDisplay();
        });

        psuSelect.addEventListener('change', (e) => {
            currentBuild.psu = e.target.value;
            updateCurrentBuildDisplay();
        });

        saveBuildBtn.addEventListener('click', saveBuild);
        resetBuildBtn.addEventListener('click', resetBuild);

        // Functions
        function updateCurrentBuildDisplay() {
            const components = [];
            let totalPrice = 0;

            for (const [key, value] of Object.entries(currentBuild)) {
                if (value) {
                    components.push(value);

                    // Extract price from the string (format: "Name ($price)")
                    const priceMatch = value.match(/\$([\d,]+)/);
                    if (priceMatch) {
                        const price = parseFloat(priceMatch[1].replace(',', ''));
                        totalPrice += price;
                    }

                }
            }

            if (components.length === 0) {
                currentBuildList.innerHTML = '<li>No components selected yet</li>';
            } else {
                currentBuildList.innerHTML = components.map(comp => `<li>${comp}</li>`).join('');
            }

            totalPriceElement.textContent = `Total: ${totalPrice.toLocaleString()} tk`;
        }

        function saveBuild() {


            const hasComponents = Object.values(currentBuild).some(val => val !== null);
            if (!hasComponents) {
                alert('Please select at least one component');
                return;
            }

            const newBuild = {
                id: Date.now(),
                components: {
                    ...currentBuild
                },
                date: new Date().toLocaleString(),
                totalPrice: calculateTotalPrice()
            };

            savedBuilds.push(newBuild);
            localStorage.setItem('pcBuilds', JSON.stringify(savedBuilds));

            renderSavedBuilds();
            resetBuild();
            alert('Build saved successfully!');
        }

        function calculateTotalPrice() {
            let total = 0;

            for (const value of Object.values(currentBuild)) {
                if (value) {
                    const priceMatch = value.match(/\$([\d,]+)/);
                    if (priceMatch) {
                        total += parseFloat(priceMatch[1].replace(',', ''));
                    }
                }
            }

            return total;
        }

        function resetBuild() {
            currentBuild = {
                cpu: null,
                gpu: null,
                ram: null,
                motherboard: null,
                storage: null,
                psu: null
            };

            cpuSelect.value = '';
            gpuSelect.value = '';
            ramSelect.value = '';
            moboSelect.value = '';
            storageSelect.value = '';
            psuSelect.value = '';

            updateCurrentBuildDisplay();
        }

        function renderSavedBuilds() {
            if (savedBuilds.length === 0) {
                savedBuildsContainer.innerHTML = '<p>No saved builds yet. Build a PC and save it here!</p>';
                return;
            }

            savedBuildsContainer.innerHTML = savedBuilds.map(build => `
                <div class="saved-build">
                    <ul>
                        ${build.components.cpu ? `<li>${build.components.cpu}</li>` : ''}
                        ${build.components.gpu ? `<li>${build.components.gpu}</li>` : ''}
                        ${build.components.ram ? `<li>${build.components.ram}</li>` : ''}
                        ${build.components.motherboard ? `<li>${build.components.motherboard}</li>` : ''}
                        ${build.components.storage ? `<li>${build.components.storage}</li>` : ''}
                        ${build.components.psu ? `<li>${build.components.psu}</li>` : ''}
                    </ul>
                    <div class="total-price">Total: ${build.totalPrice.toLocaleString()} tk</div>
                    <div class="build-date">Saved on: ${build.date}</div>
                    <div class="build-actions-right">
                        <button class="btn btn-danger" onclick="deleteBuild(${build.id})">Delete</button>
                    </div>
                </div>
            `).join('');
        }

        function deleteBuild(id) {
            if (confirm('Are you sure you want to delete this build?')) {
                savedBuilds = savedBuilds.filter(build => build.id !== id);
                localStorage.setItem('pcBuilds', JSON.stringify(savedBuilds));
                renderSavedBuilds();
            }
        }
        function openComparePage() {
                window.location.href = "compare.php";
            }
        function openPreBuiltPage() {
                window.location.href = "prebuild.php";
        }

        // Make deleteBuild available globally
        window.deleteBuild = deleteBuild;
    </script>
</body>

</html>