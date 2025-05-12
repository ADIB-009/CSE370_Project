<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Component</title>


</head>


<body>
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <h2>Delete a CPU</h2>
            <form action="cpu_delete.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="cpu_sku">CPU SKU</label>
                    <input type="text" id="cpu_sku" name="cpu_sku" required>
                </div>
                <input type="submit" class="btn signup-btn-submit" value="DELETE" name="signup" />
            </form>
        </div>
    </div>

    <div id="signupModal" class="modal">
        <div class="modal-content">
            <h2>Delete a GPU</h2>
            <form action="gpu_delete.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="gpu_sku">GPU SKU</label>
                    <input type="text" id="gpu_sku" name="gpu_sku" required>
                </div>

                <input type="submit" class="btn signup-btn-submit" value="DELETE" name="signup" />
            </form>
        </div>
    </div>

    <div id="signupModal" class="modal">
        <div class="modal-content">
            <h2>Delete a RAM</h2>
            <form action="ram_delete.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="ram_sku">RAM SKU</label>
                    <input type="text" id="ram_sku" name="ram_sku" required>
                </div>
                <input type="submit" class="btn signup-btn-submit" value="DELETE" name="signup" />
            </form>
        </div>
    </div>

    <div id="signupModal" class="modal">
        <div class="modal-content">
            <h2>Delete a Motherboard</h2>
            <form action="mobo_delete.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="mobo_sku">Motherboard SKU</label>
                    <input type="text" id="mobo_sku" name="mobo_sku" required>
                </div>
                <input type="submit" class="btn signup-btn-submit" value="DELETE" name="signup" />
            </form>
        </div>
    </div>


    <div id="signupModal" class="modal">
        <div class="modal-content">
            <h2>Delete a Storage</h2>
            <form action="storage_delete.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="s_sku">Storage SKU</label>
                    <input type="text" id="s_sku" name="s_sku" required>
                </div>
                <input type="submit" class="btn signup-btn-submit" value="DELETE" name="signup" />
            </form>
        </div>
    </div>


    <div id="signupModal" class="modal">
        <div class="modal-content">
            <h2>Delete a PSU</h2>
            <form action="psu_delete.php" method="post" id="signupForm">
                <div class="form-group">
                    <label for="pwr_sku">PSU SKU</label>
                    <input type="text" id="pwr_sku" name="pwr_sku" required>
                </div>
                <input type="submit" class="btn signup-btn-submit" value="DELETE" name="signup" />
            </form>
        </div>
    </div>

</body>

</html