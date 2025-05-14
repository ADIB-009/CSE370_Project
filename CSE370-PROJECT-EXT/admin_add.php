<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Component</title>


</head>


<body>
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <h2>ADD a CPU</h2>
            <form action="cpu_insert.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="cpu_sku">CPU SKU</label>
                    <input type="text" id="cpu_sku" name="cpu_sku" required>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" id="brand" name="brand" required>
                </div>
                <div class="form-group">
                    <label for="price">Price (tk)</label>
                    <input type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="core">Core</label>
                    <input type="number" id="core" name="core" required>
                </div>
                <div class="form-group">
                    <label for="thread">Thread</label>
                    <input type="number" id="thread" name="thread" required>
                </div>
                <div class="form-group">
                    <label for="base_clock">Base Clock (GHz)</label>
                    <input type="number" id="base_clock" name="base_clock" required step="0.01">
                </div>
                <div class="form-group">
                    <label for="boost_clock">Boost Clock (GHz)</label>
                    <input type="number" id="boost_clock" name="boost_clock" required step="0.01"> 
                </div>
                <input type="submit" class="btn signup-btn-submit" value="ADD" name="signup" />
            </form>
        </div>
    </div>

    <div id="signupModal" class="modal">
        <div class="modal-content">
            <h2>ADD a GPU</h2>
            <form action="gpu_insert.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="gpu_sku">GPU SKU</label>
                    <input type="text" id="gpu_sku" name="gpu_sku" required>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" id="brand" name="brand" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="vram">VRAM (GB)</label>
                    <input type="number" id="vram" name="vram" required>
                </div>
                <div class="form-group">
                    <label for="game_clock">game_clock (MHz)</label>
                    <input type="number" id="game_clock" name="game_clock" required>
                </div>

                <input type="submit" class="btn signup-btn-submit" value="ADD" name="signup" />
            </form>
        </div>
    </div>

    <div id="signupModal" class="modal">
        <div class="modal-content">
            <h2>ADD a RAM</h2>
            <form action="ram_insert.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="ram_sku">RAM SKU</label>
                    <input type="text" id="ram_sku" name="ram_sku" required>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" id="brand" name="brand" required>
                </div>
                <div class="form-group">
                    <label for="price">Price (tk)</label>
                    <input type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="memory_type">Memory Type</label>
                    <input type="text" id="memory_type" name="memory_type" required>
                </div>
                <div class="form-group">
                    <label for="frequency">Frequency (MHz)</label>
                    <input type="number" id="frequency" name="frequency" required>
                </div>
                <div class="form-group">
                    <label for="latency">Latency</label>
                    <input type="text" id="latency" name="latency" required>
                </div>
                <div class="form-group">
                    <label for="capacity">Capcity (GB)</label>
                    <input type="number" id="capacity" name="capacity" required> 
                </div>
                <input type="submit" class="btn signup-btn-submit" value="ADD" name="signup" />
            </form>
        </div>
    </div>

    <div id="signupModal" class="modal">
        <div class="modal-content">
            <h2>ADD a Motherboard</h2>
            <form action="mobo_insert.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="mobo_sku">Motherboard SKU</label>
                    <input type="text" id="mobo_sku" name="mobo_sku" required>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" id="brand" name="brand" required>
                </div>
                <div class="form-group">
                    <label for="price">Price (tk)</label>
                    <input type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="core">Chipset</label>
                    <input type="text" id="chipset" name="chipset" required>
                </div>
                <div class="form-group">
                    <label for="ram_type">RAM Type</label>
                    <input type="text" id="ram_type" name="ram_type" required>
                </div>
                <div class="form-group">
                    <label for="form_factor">Form Factor</label>
                    <input type="text" id="form_factor" name="form_factor" required>
                </div>
                <div class="form-group">
                    <label for="cpu_brand">CPU Brand</label>
                    <input type="text" id="cpu_brand" name="cpu_brand" required step="0.01"> 
                </div>
                <input type="submit" class="btn signup-btn-submit" value="ADD" name="signup" />
            </form>
        </div>
    </div>


    <div id="signupModal" class="modal">
        <div class="modal-content">
            <h2>Add a Storage</h2>
            <form action="storage_insert.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="s_sku">Storage SKU</label>
                    <input type="text" id="s_sku" name="s_sku" required>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" id="brand" name="brand" required>
                </div>
                <div class="form-group">
                    <label for="price">Price (tk)</label>
                    <input type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" id="type" name="type" required>
                </div>
                <div class="form-group">
                    <label for="write_speed">Write Speed (MB/s)</label>
                    <input type="number" id="write_speed" name="write_speed" required>
                </div>
                <div class="form-group">
                    <label for="read_speed">Read Speed (MB/s)</label>
                    <input type="number" id="read_speed" name="read_speed" required>
                </div>
                <div class="form-group">
                    <label for="capacity">Capacity (GB)</label>
                    <input type="number" id="capacity" name="capacity" required> 
                </div>
                <input type="submit" class="btn signup-btn-submit" value="ADD" name="signup" />
            </form>
        </div>
    </div>


    <div id="signupModal" class="modal">
        <div class="modal-content">
            <h2>ADD a PSU</h2>
            <form action="psu_insert.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="pwr_sku">PSU SKU</label>
                    <input type="text" id="pwr_sku" name="pwr_sku" required>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" id="brand" name="brand" required>
                </div>
                <div class="form-group">
                    <label for="price">Price (tk)</label>
                    <input type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="capacity">Capacity (W)</label>
                    <input type="number" id="capacity" name="capacity" required>
                </div>
                <div class="form-group">
                    <label for="modular_type">Modular Type</label>
                    <input type="text" id="modular_type" name="modular_type" required>
                </div>
                <div class="form-group">
                    <label for="efficiency">Efficiency</label>
                    <input type="text" id="efficiency" name="efficiency" required>
                </div>
                <input type="submit" class="btn signup-btn-submit" value="ADD" name="signup" />
            </form>
        </div>
    </div>

</body>

</html