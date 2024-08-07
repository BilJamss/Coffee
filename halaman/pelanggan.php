<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 25px auto;
            font-size: 18px;
            text-align: left;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #D2691E;
            color: black;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .container {
            padding: 20px;
            text-align: center;
        }
        .no-results, .error {
            margin: 20px 0;
            font-size: 20px;
            color: #ff0000;
        }
        .error {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="d-flex flex-wrap justify-content-between">

    
        <?php
        $sql = "SELECT * FROM pelanggan"; 
        $result = $koneksi->query($sql); 

        if ($result) { 
            if ($result->num_rows > 0) { 
                echo "<table>";
                echo "<tr><th>ID</th><th>Nama</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row["id_pelanggan"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["nama_pelanggan"]) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='no-results'>0 hasil</p>"; 
            }
            $result->free(); 
        } else {
            echo "<p class='error'>Error: " . htmlspecialchars($koneksi->error) . "</p>"; 
        }

        $koneksi->close(); 
        ?>
    </div>
</body>
</html>
