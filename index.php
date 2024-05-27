<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <!-- Link to Bootstrap CSS for styling -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to CSS for styling -->
    <link href="index.css" rel="stylesheet">
</head>
<body>
<!-- Main container for content -->
<div class="container">
    <!-- Header for the information section using bootstrap -->
    <h2 class="mt-5">Information</h2>
    <!-- Bootstrap table with borders -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <!-- Table header for image -->
                <th>Bild</th>
                <!-- Table header for name -->
                <th>Namn</th>
                <!-- Table header for account number -->
                <th>Bankkonto</th>
                <!-- Table header for balance -->
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // MYSQLi connection
        $conn = new mysqli('localhost', 'root', '', 'user_bank');
        // Connection check
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to select image, name, account, and balance
        $sql = "SELECT image_path, namn, konto, saldo FROM user_info";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Loop through the rows of the result
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                // Display image
                echo "<td><img src='" . $row["image_path"] . "' alt='User Image'></td>";
                // Display name
                echo "<td>" . $row["namn"] . "</td>";
                // Display account number
                echo "<td>" . $row["konto"] . "</td>";
                // Display balance
                echo "<td>" . $row["saldo"] . "</td>";
                echo "</tr>";
            }
        } else {
            // If there are no rows, display error message
            echo "<tr><td colspan='4'>No data available</td></tr>";
        }

        // Close the MySQLi connection
        $conn->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
