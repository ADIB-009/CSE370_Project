<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prebuild</title>
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
        .Prebuild {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .Prebuild th {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
        }
        
        .Prebuild td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }
        
        .Prebuild tr:last-child td {
            border-bottom: none;
        }
        
        .Prebuild tr:nth-child(even) {
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
    <h1 align = "center"> Prebuild PCs </h1>
    <table table border="1" style="width:100%" class = "Prebuild">
        <tr>
            <th> Build no </th>
            <th> CPU </th>
            <th> GPU </th>
            <th> RAM </th>
            <th> Motherboard </th>
            <th> Storage </th>
            <th> Power Supply </th>
        </tr>
        <?php
        // first of all, we need to connect to the database
        require_once('dbconnect.php');

        // write the query to check if this username and password exists in our database
        $s = "SELECT * FROM pc_specification";
        $result = mysqli_query($conn, $s);

        // check if this insertion is happening in the database
        if (mysqli_affected_rows($conn)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['pc_id'] . "</td>";
                echo "<td>" . $row['cpu_sku'] . "</td>";
                echo "<td>" . $row['gpu_sku'] . "</td>";
                echo "<td>" . $row['ram_sku'] . "</td>";
                echo "<td>" . $row['mobo_sku'] . "</td>";
                echo "<td>" . $row['s_sku'] . "</td>";
                echo "<td>" . $row['pwr_sku'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No records found";
        }
        ?>
    </table>

</body>
</html>