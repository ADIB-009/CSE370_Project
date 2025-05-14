<!-- filepath: d:\XAMPP\htdocs\test\adminpanel.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
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
        .btn {
            width: 50%;
            padding: 12px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        
        .add-btn {
            background-color: #45a049;
        }
        
        .add-btn:hover {
            background-color:  #4CAF50;
        }
        .delete-btn {
            background-color: #B22222;
        }
        
        .delete-btn:hover {
            background-color: #FF2400;
        }
        .update-btn {
            background-color: #0000FF;
        }
        
        .update-btn:hover {
            background-color: #87CEEB;
        }
        </style>
</head>

<body>
    <table class = "Cpucomparison">
        <thead>
            <tr>
                <th><button class="btn add-btn" onclick="openadd()">Add Component</button></th>
            </tr>
            <tr>
                <th><button class="btn update-btn" onclick="openupdate()">Update Components</button></th>
            </tr>
            <tr>
            <th><button class="btn delete-btn" onclick="opendelete()">Delete Component</button></th>
    </tr>
        </thead>
</body>
<script>

    function openadd() {
        window.location.href = "admin_add.php"; // Redirect to add.php
    }
    function openupdate() {
        window.location.href = "admin_update.php"; // Redirect to update.php
    }   
    function opendelete() {
        window.location.href = "admin_delete.php"; // Redirect to delete.php
    }
    </script>
</html>