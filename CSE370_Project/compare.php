<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Component Comparison</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            background-color: #2c3e50;
            color: white;
            border-radius: 8px;
        }
        
        h1 {
            margin: 0;
            font-size: 2.2em;
        }
        .Cpucomparison {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .Cpucomparison th {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
        }
        
        .Cpucomparison td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }
        
        .Cpucomparison tr:last-child td {
            border-bottom: none;
        }
        
        .Cpucomparison tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .better-value {
            background-color: #e8f5e9 !important;
            font-weight: bold;
            color: #2e7d32;
        }
        
        .worse-value {
            background-color: #ffebee !important;
            color: #c62828;
        }
        .gpu {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .gpu th {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
        }
        
        .gpu td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }
        
        .gpu tr:last-child td {
            border-bottom: none;
        }
        
        .gpu tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .better-value {
            background-color: #e8f5e9 !important;
            font-weight: bold;
            color: #2e7d32;
        }
        
        .worse-value {
            background-color: #ffebee !important;
            color: #c62828;
        }
        .ram {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .ram th {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
        }
        
        .ram td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }
        
        .ram tr:last-child td {
            border-bottom: none;
        }
        
        .ram tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .better-value {
            background-color: #e8f5e9 !important;
            font-weight: bold;
            color: #2e7d32;
        }
        
        .worse-value {
            background-color: #ffebee !important;
            color: #c62828;
        }
        .mobo {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .mobo th {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
        }
        
        .mobo td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }
        
        .mobo tr:last-child td {
            border-bottom: none;
        }
        
        .mobo tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .better-value {
            background-color: #e8f5e9 !important;
            font-weight: bold;
            color: #2e7d32;
        }
        
        .worse-value {
            background-color: #ffebee !important;
            color: #c62828;
        }
        .str {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .str th {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
        }
        
        .str td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }
        
        .str tr:last-child td {
            border-bottom: none;
        }
        
        .str tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .better-value {
            background-color: #e8f5e9 !important;
            font-weight: bold;
            color: #2e7d32;
        }
        
        .worse-value {
            background-color: #ffebee !important;
            color: #c62828;
        }
        .pwr {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .pwr th {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
        }
        
        .pwr td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }
        
        .pwr tr:last-child td {
            border-bottom: none;
        }
        
        .pwr tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .better-value {
            background-color: #e8f5e9 !important;
            font-weight: bold;
            color: #2e7d32;
        }
        
        .worse-value {
            background-color: #ffebee !important;
            color: #c62828;
        }
    </style>
</head>

<body>
    <h1 align="center">CPU Comparison</h1>
    <table class = "Cpucomparison">
        <thead>
            <tr>
                <th></th>
                <th>Brand</th>
                <th>SKU</th>
                <th>Price (tk)</th>
                <th>Core</th>
                <th>Thread</th>
                <th>Base Clock (GHz)</th>
                <th>Boost Clock (GHz)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form method="POST" action="">
                    <td>Select CPU 1
                        <select name="cpu1_sku" onchange="this.form.submit()">
                            <option value="">--Select--</option>
                            <?php
                            require_once 'dbconnect.php';
                            $result = mysqli_query($conn, "SELECT * FROM cpu");
                            while ($row = mysqli_fetch_array($result)) {
                                $selected = (isset($_POST['cpu1_sku']) && $_POST['cpu1_sku'] == $row['cpu_sku']) ? 'selected' : '';
                                echo "<option value='" . $row['cpu_sku'] . "' $selected>" . $row['brand'] . " " . $row['cpu_sku'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    if (isset($_POST['cpu1_sku']) && !empty($_POST['cpu1_sku'])) {
                        $cpu1_sku = $_POST['cpu1_sku'];
                        $query = "SELECT * FROM cpu WHERE cpu_sku = '$cpu1_sku'";
                        $result = mysqli_query($conn, $query);
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<td>" . $row['brand'] . "</td>";
                            echo "<td>" . $row['cpu_sku'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['core'] . "</td>";
                            echo "<td>" . $row['thread'] . "</td>";
                            echo "<td>" . $row['base_clock'] . "</td>";
                            echo "<td>" . $row['boost_clock'] . "</td>";
                        } else {
                            echo "<td colspan='7'>No data found</td>";
                        }
                    } else {
                        echo "<td colspan='7'>Select a CPU</td>";
                    }
                    ?>
                    <input type="hidden" name="cpu2_sku" value="<?php echo isset($_POST['cpu2_sku']) ? $_POST['cpu2_sku'] : ''; ?>">
                </form>
            </tr>
            <tr>
                <form method="POST" action="">
                    <td>Select CPU 2
                        <select name="cpu2_sku" onchange="this.form.submit()">
                            <option value="">--Select--</option>
                            <?php
                            require_once 'dbconnect.php';
                            $result = mysqli_query($conn, "SELECT * FROM cpu");
                            while ($row = mysqli_fetch_array($result)) {
                                $selected = (isset($_POST['cpu2_sku']) && $_POST['cpu2_sku'] == $row['cpu_sku']) ? 'selected' : '';
                                echo "<option value='" . $row['cpu_sku'] . "' $selected>" . $row['brand'] . " " . $row['cpu_sku'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    if (isset($_POST['cpu2_sku']) && !empty($_POST['cpu2_sku'])) {
                        $cpu2_sku = $_POST['cpu2_sku'];
                        $query = "SELECT * FROM cpu WHERE cpu_sku = '$cpu2_sku'";
                        $result = mysqli_query($conn, $query);
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<td>" . $row['brand'] . "</td>";
                            echo "<td>" . $row['cpu_sku'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['core'] . "</td>";
                            echo "<td>" . $row['thread'] . "</td>";
                            echo "<td>" . $row['base_clock'] . "</td>";
                            echo "<td>" . $row['boost_clock'] . "</td>";
                        } else {
                            echo "<td colspan='7'>No data found</td>";
                        }
                    } else {
                        echo "<td colspan='7'>Select a CPU</td>";
                    }
                    ?>
                    <input type="hidden" name="cpu1_sku" value="<?php echo isset($_POST['cpu1_sku']) ? $_POST['cpu1_sku'] : ''; ?>">
                </form>
            </tr>
        </tbody>
    </table>

    <h1 align="center">GPU Comparison</h1>
    <table class = "gpu">
        <thead>
            <tr>
                <th></th>
                <th>Brand</th>
                <th>SKU</th>
                <th>Price (tk)</th>
                <th>VRAM (GB)</th>
                <th>Game Clock (MHz)</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <form method="POST" action="">
                    <td>Select GPU 1
                        <select name="gpu1_sku" onchange="this.form.submit()">
                            <option value="">--Select--</option>
                            <?php
                            require_once 'dbconnect.php';
                            $result = mysqli_query($conn, "SELECT * FROM gpu");
                            while ($row = mysqli_fetch_array($result)) {
                                $selected = (isset($_POST['gpu1_sku']) && $_POST['gpu1_sku'] == $row['gpu_sku']) ? 'selected' : '';
                                echo "<option value='" . $row['gpu_sku'] . "' $selected>" . $row['brand'] . " " . $row['gpu_sku'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    if (isset($_POST['gpu1_sku']) && !empty($_POST['gpu1_sku'])) {
                        $gpu1_sku = $_POST['gpu1_sku'];
                        $query = "SELECT * FROM gpu WHERE gpu_sku = '$gpu1_sku'";
                        $result = mysqli_query($conn, $query);
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<td>" . $row['brand'] . "</td>";
                            echo "<td>" . $row['gpu_sku'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['vram'] . "</td>";
                            echo "<td>" . $row['game_clock'] . "</td>";
                        } else {
                            echo "<td colspan='7'>No data found</td>";
                        }
                    } else {
                        echo "<td colspan='7'>Select a GPU</td>";
                    }
                    ?>
                    <input type="hidden" name="gpu2_sku" value="<?php echo isset($_POST['gpu2_sku']) ? $_POST['gpu2_sku'] : ''; ?>">
                </form>
            </tr>
            <tr>
                <form method="POST" action="">
                    <td>Select GPU 2
                        <select name="gpu2_sku" onchange="this.form.submit()">
                            <option value="">--Select--</option>
                            <?php
                            require_once 'dbconnect.php';
                            $result = mysqli_query($conn, "SELECT * FROM gpu");
                            while ($row = mysqli_fetch_array($result)) {
                                $selected = (isset($_POST['gpu2_sku']) && $_POST['gpu2_sku'] == $row['gpu_sku']) ? 'selected' : '';
                                echo "<option value='" . $row['gpu_sku'] . "' $selected>" . $row['brand'] . " " . $row['gpu_sku'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    if (isset($_POST['gpu2_sku']) && !empty($_POST['gpu2_sku'])) {
                        $gpu2_sku = $_POST['gpu2_sku'];
                        $query = "SELECT * FROM gpu WHERE gpu_sku = '$gpu2_sku'";
                        $result = mysqli_query($conn, $query);
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<td>" . $row['brand'] . "</td>";
                            echo "<td>" . $row['gpu_sku'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['vram'] . "</td>";
                            echo "<td>" . $row['game_clock'] . "</td>";
                        } else {
                            echo "<td colspan='7'>No data found</td>";
                        }
                    } else {
                        echo "<td colspan='7'>Select a GPU</td>";
                    }
                    ?>
                    <input type="hidden" name="gpu1_sku" value="<?php echo isset($_POST['gpu1_sku']) ? $_POST['gpu1_sku'] : ''; ?>">
                </form>
            </tr>
        </tbody>
    </table>


    <h1 align="center">RAM Comparison</h1>
    <table class = "ram">
        <thead>
            <tr>
                <th></th>
                <th>Brand</th>
                <th>SKU</th>
                <th>Price (tk)</th>
                <th>Memory Type</th>
                <th>Frequency (MHz)</th>
                <th>Latency</th>
                <th>Capacity (GB)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form method="POST" action="">
                    <td>Select RAM 1
                        <select name="ram1_sku" onchange="this.form.submit()">
                            <option value="">--Select--</option>
                            <?php
                            require_once 'dbconnect.php';
                            $result = mysqli_query($conn, "SELECT * FROM ram");
                            while ($row = mysqli_fetch_array($result)) {
                                $selected = (isset($_POST['ram1_sku']) && $_POST['ram1_sku'] == $row['ram_sku']) ? 'selected' : '';
                                echo "<option value='" . $row['ram_sku'] . "' $selected>" . $row['brand'] . " " . $row['ram_sku'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    if (isset($_POST['ram1_sku']) && !empty($_POST['ram1_sku'])) {
                        $ram1_sku = $_POST['ram1_sku'];
                        $query = "SELECT * FROM ram WHERE ram_sku = '$ram1_sku'";
                        $result = mysqli_query($conn, $query);
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<td>" . $row['brand'] . "</td>";
                            echo "<td>" . $row['ram_sku'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['memory_type'] . "</td>";
                            echo "<td>" . $row['frequency'] . "</td>";
                            echo "<td>" . $row['latency'] . "</td>";
                            echo "<td>" . $row['capacity'] . "</td>";
                        } else {
                            echo "<td colspan='7'>No data found</td>";
                        }
                    } else {
                        echo "<td colspan='7'>Select a RAM</td>";
                    }
                    ?>
                    <input type="hidden" name="ram2_sku" value="<?php echo isset($_POST['ram2_sku']) ? $_POST['ram2_sku'] : ''; ?>">
                </form>
            </tr>
            <tr>
                <form method="POST" action="">
                    <td>Select RAM 2
                        <select name="ram2_sku" onchange="this.form.submit()">
                            <option value="">--Select--</option>
                            <?php
                            require_once 'dbconnect.php';
                            $result = mysqli_query($conn, "SELECT * FROM ram");
                            while ($row = mysqli_fetch_array($result)) {
                                $selected = (isset($_POST['ram2_sku']) && $_POST['ram2_sku'] == $row['ram_sku']) ? 'selected' : '';
                                echo "<option value='" . $row['ram_sku'] . "' $selected>" . $row['brand'] . " " . $row['ram_sku'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    if (isset($_POST['ram2_sku']) && !empty($_POST['ram2_sku'])) {
                        $ram2_sku = $_POST['ram2_sku'];
                        $query = "SELECT * FROM ram WHERE ram_sku = '$ram2_sku'";
                        $result = mysqli_query($conn, $query);
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<td>" . $row['brand'] . "</td>";
                            echo "<td>" . $row['ram_sku'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['memory_type'] . "</td>";
                            echo "<td>" . $row['frequency'] . "</td>";
                            echo "<td>" . $row['latency'] . "</td>";
                            echo "<td>" . $row['capacity'] . "</td>";
                        } else {
                            echo "<td colspan='7'>No data found</td>";
                        }
                    } else {
                        echo "<td colspan='7'>Select a RAM</td>";
                    }
                    ?>
                    <input type="hidden" name="ram1_sku" value="<?php echo isset($_POST['ram1_sku']) ? $_POST['ram1_sku'] : ''; ?>">
                </form>
            </tr>
        </tbody>
    </table>








    <h1 align="center">Motherboard Comparison</h1>
    <table class = "mobo">
        <thead>
            <tr>
                <th></th>
                <th>Brand</th>
                <th>SKU</th>
                <th>Price (tk)</th>
                <th>Chipset</th>
                <th>Ram Type</th>
                <th>Form Factor</th>
                <th>CPU Brand</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form method="POST" action="">
                    <td>Select Motherboard 1
                        <select name="mobo1_sku" onchange="this.form.submit()">
                            <option value="">--Select--</option>
                            <?php
                            require_once 'dbconnect.php';
                            $result = mysqli_query($conn, "SELECT * FROM motherboard");
                            while ($row = mysqli_fetch_array($result)) {
                                $selected = (isset($_POST['mobo1_sku']) && $_POST['mobo1_sku'] == $row['mobo_sku']) ? 'selected' : '';
                                echo "<option value='" . $row['mobo_sku'] . "' $selected>" . $row['brand'] . " " . $row['mobo_sku'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    if (isset($_POST['mobo1_sku']) && !empty($_POST['mobo1_sku'])) {
                        $mobo1_sku = $_POST['mobo1_sku'];
                        $query = "SELECT * FROM motherboard WHERE mobo_sku = '$mobo1_sku'";
                        $result = mysqli_query($conn, $query);
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<td>" . $row['brand'] . "</td>";
                            echo "<td>" . $row['mobo_sku'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['chipset'] . "</td>";
                            echo "<td>" . $row['ram_type'] . "</td>";
                            echo "<td>" . $row['form_factor'] . "</td>";
                            echo "<td>" . $row['cpu_brand'] . "</td>";
                        } else {
                            echo "<td colspan='7'>No data found</td>";
                        }
                    } else {
                        echo "<td colspan='7'>Select a Motherboard</td>";
                    }
                    ?>
                    <input type="hidden" name="mobo2_sku" value="<?php echo isset($_POST['mobo2_sku']) ? $_POST['mobo2_sku'] : ''; ?>">
                </form>
            </tr>
            <tr>
                <form method="POST" action="">
                    <td>Select Motherboard 2
                        <select name="mobo2_sku" onchange="this.form.submit()">
                            <option value="">--Select--</option>
                            <?php
                            require_once 'dbconnect.php';
                            $result = mysqli_query($conn, "SELECT * FROM motherboard");
                            while ($row = mysqli_fetch_array($result)) {
                                $selected = (isset($_POST['mobo2_sku']) && $_POST['mobo2_sku'] == $row['mobo_sku']) ? 'selected' : '';
                                echo "<option value='" . $row['mobo_sku'] . "' $selected>" . $row['brand'] . " " . $row['mobo_sku'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    if (isset($_POST['mobo2_sku']) && !empty($_POST['mobo2_sku'])) {
                        $mobo2_sku = $_POST['mobo2_sku'];
                        $query = "SELECT * FROM motherboard WHERE mobo_sku = '$mobo2_sku'";
                        $result = mysqli_query($conn, $query);
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<td>" . $row['brand'] . "</td>";
                            echo "<td>" . $row['mobo_sku'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['chipset'] . "</td>";
                            echo "<td>" . $row['ram_type'] . "</td>";
                            echo "<td>" . $row['form_factor'] . "</td>";
                            echo "<td>" . $row['cpu_brand'] . "</td>";
                        } else {
                            echo "<td colspan='7'>No data found</td>";
                        }
                    } else {
                        echo "<td colspan='7'>Select a Motherboard</td>";
                    }
                    ?>
                    <input type="hidden" name="mobo1_sku" value="<?php echo isset($_POST['mobo1_sku']) ? $_POST['mobo1_sku'] : ''; ?>">
                </form>
            </tr>
        </tbody>
    </table>


    <h1 align="center">Storage Comparison</h1>
    <table class = "str">
        <thead>
            <tr>
                <th></th>
                <th>Brand</th>
                <th>SKU</th>
                <th>Price (tk)</th>
                <th>Type</th>
                <th>Write Speed</th>
                <th>Read Speed</th>
                <th>Capacity (GB)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form method="POST" action="">
                    <td>Select Storage 1
                        <select name="s1_sku" onchange="this.form.submit()">
                            <option value="">--Select--</option>
                            <?php
                            require_once 'dbconnect.php';
                            $result = mysqli_query($conn, "SELECT * FROM storage");
                            while ($row = mysqli_fetch_array($result)) {
                                $selected = (isset($_POST['s1_sku']) && $_POST['s1_sku'] == $row['s_sku']) ? 'selected' : '';
                                echo "<option value='" . $row['s_sku'] . "' $selected>" . $row['brand'] . " " . $row['s_sku'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    if (isset($_POST['s1_sku']) && !empty($_POST['s1_sku'])) {
                        $s1_sku = $_POST['s1_sku'];
                        $query = "SELECT * FROM storage WHERE s_sku = '$s1_sku'";
                        $result = mysqli_query($conn, $query);
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<td>" . $row['brand'] . "</td>";
                            echo "<td>" . $row['s_sku'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['type'] . "</td>";
                            echo "<td>" . $row['write_speed'] . "</td>";
                            echo "<td>" . $row['read_speed'] . "</td>";
                            echo "<td>" . $row['capacity'] . "</td>";
                        } else {
                            echo "<td colspan='7'>No data found</td>";
                        }
                    } else {
                        echo "<td colspan='7'>Select a Storage</td>";
                    }
                    ?>
                    <input type="hidden" name="s2_sku" value="<?php echo isset($_POST['s2_sku']) ? $_POST['s2_sku'] : ''; ?>">
                </form>
            </tr>
            <tr>
                <form method="POST" action="">
                    <td>Select Storage 2
                        <select name="s2_sku" onchange="this.form.submit()">
                            <option value="">--Select--</option>
                            <?php
                            require_once 'dbconnect.php';
                            $result = mysqli_query($conn, "SELECT * FROM storage");
                            while ($row = mysqli_fetch_array($result)) {
                                $selected = (isset($_POST['s2_sku']) && $_POST['s2_sku'] == $row['s_sku']) ? 'selected' : '';
                                echo "<option value='" . $row['s_sku'] . "' $selected>" . $row['brand'] . " " . $row['s_sku'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    if (isset($_POST['s2_sku']) && !empty($_POST['s2_sku'])) {
                        $s2_sku = $_POST['s2_sku'];
                        $query = "SELECT * FROM storage WHERE s_sku = '$s2_sku'";
                        $result = mysqli_query($conn, $query);
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<td>" . $row['brand'] . "</td>";
                            echo "<td>" . $row['s_sku'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['type'] . "</td>";
                            echo "<td>" . $row['write_speed'] . "</td>";
                            echo "<td>" . $row['read_speed'] . "</td>";
                            echo "<td>" . $row['capacity'] . "</td>";
                        } else {
                            echo "<td colspan='7'>No data found</td>";
                        }
                    } else {
                        echo "<td colspan='7'>Select a Storage</td>";
                    }
                    ?>
                    <input type="hidden" name="s1_sku" value="<?php echo isset($_POST['s1_sku']) ? $_POST['s1_sku'] : ''; ?>">
                </form>
            </tr>
        </tbody>
    </table>










    <h1 align="center">Power Supply Comparison</h1>
    <table class = "pwr">
        <thead>
            <tr>
                <th></th>
                <th>Brand</th>
                <th>SKU</th>
                <th>Price (tk)</th>
                <th>Capacity (GB)</th>
                <th>Modular Type</th>
                <th>Efficiency</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form method="POST" action="">
                    <td>Select PSU 1
                        <select name="pwr1_sku" onchange="this.form.submit()">
                            <option value="">--Select--</option>
                            <?php
                            require_once 'dbconnect.php';
                            $result = mysqli_query($conn, "SELECT * FROM power_supply");
                            while ($row = mysqli_fetch_array($result)) {
                                $selected = (isset($_POST['pwr1_sku']) && $_POST['pwr1_sku'] == $row['pwr_sku']) ? 'selected' : '';
                                echo "<option value='" . $row['pwr_sku'] . "' $selected>" . $row['brand'] . " " . $row['pwr_sku'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    if (isset($_POST['pwr1_sku']) && !empty($_POST['pwr1_sku'])) {
                        $pwr1_sku = $_POST['pwr1_sku'];
                        $query = "SELECT * FROM power_supply WHERE pwr_sku = '$pwr1_sku'";
                        $result = mysqli_query($conn, $query);
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<td>" . $row['brand'] . "</td>";
                            echo "<td>" . $row['pwr_sku'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['capacity'] . "</td>";
                            echo "<td>" . $row['modular_type'] . "</td>";
                            echo "<td>" . $row['efficiency'] . "</td>";
                        } else {
                            echo "<td colspan='7'>No data found</td>";
                        }
                    } else {
                        echo "<td colspan='7'>Select a PSU</td>";
                    }
                    ?>
                    <input type="hidden" name="pwr2_sku" value="<?php echo isset($_POST['pwr2_sku']) ? $_POST['pwr2_sku'] : ''; ?>">
                </form>
            </tr>
            <tr>
                <form method="POST" action="">
                    <td>Select PSU 2
                        <select name="pwr2_sku" onchange="this.form.submit()">
                            <option value="">--Select--</option>
                            <?php
                            require_once 'dbconnect.php';
                            $result = mysqli_query($conn, "SELECT * FROM power_supply");
                            while ($row = mysqli_fetch_array($result)) {
                                $selected = (isset($_POST['pwr2_sku']) && $_POST['pwr2_sku'] == $row['pwr_sku']) ? 'selected' : '';
                                echo "<option value='" . $row['pwr_sku'] . "' $selected>" . $row['brand'] . " " . $row['pwr_sku'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    if (isset($_POST['pwr2_sku']) && !empty($_POST['pwr2_sku'])) {
                        $pwr2_sku = $_POST['pwr2_sku'];
                        $query = "SELECT * FROM power_supply WHERE pwr_sku = '$pwr2_sku'";
                        $result = mysqli_query($conn, $query);
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<td>" . $row['brand'] . "</td>";
                            echo "<td>" . $row['pwr_sku'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['capacity'] . "</td>";
                            echo "<td>" . $row['modular_type'] . "</td>";
                            echo "<td>" . $row['efficiency'] . "</td>";
                        } else {
                            echo "<td colspan='7'>No data found</td>";
                        }
                    } else {
                        echo "<td colspan='7'>Select a PSU</td>";
                    }
                    ?>
                    <input type="hidden" name="pwr1_sku" value="<?php echo isset($_POST['pwr1_sku']) ? $_POST['pwr1_sku'] : ''; ?>">
                </form>
            </tr>
        </tbody>
    </table>
</body>

</html>