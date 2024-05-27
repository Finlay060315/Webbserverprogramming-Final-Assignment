<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <!-- Link to Bootstrap CSS for styling -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to CSS for styling -->
    <link href="userdata.css" rel="stylesheet">
</head>
<body>
    <main>
        <!-- Form for collecting user data which is submitted to userdata.php using the post method -->
        <form action="include/userdata.php" method="post">
            <!-- Form group for name input -->
            <div class="form-group">
                <!-- Label for name input -->
                <label for="Namn">Namn</label>
                <!-- Text input for name with Bootstrap -->
                <input id="Namn" type="text" class="form-control" name="Namn" placeholder="Namn...">
            </div>
            <!-- Form group for balance input -->
            <div class="form-group">
                <!-- Label for the amount input -->
                <label for="Saldo">Saldo</label>
                <!-- Text input for amount with Bootstrap -->
                <input id="Saldo" type="text" class="form-control" name="Saldo" placeholder="Saldo...">
            </div>
            <!-- Form group for for bank account number input -->
            <div class="form-group">
                <!-- Label for the bank account number input -->
                <label for="Bankkonto Nummer">Bankkontonummer</label>
                <!-- Text input for bank account number with Bootstrap -->
                <input id="Bankkonto Nummer" type="text" class="form-control" name="Bankkonto Nummer" placeholder="Bankkonto...">
            </div>
            <!-- Submit button to send form data -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
</body>
</html>
