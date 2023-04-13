
    

<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: ingelogd.php");
    exit;
}

// Check if user is an administrator
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header("location: ingelogd.php");
    exit;
}

// Connect to the database
$host = "localhost";
$username = "username";
$password = "password";
$dbname = "Energy";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle product actions
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'add':
            $name = $_POST['name'];
            $price = $_POST['price'];
            $sql = "INSERT INTO products (name, price) VALUES ('$name', $price)";
            mysqli_query($conn, $sql);
            break;
        case 'remove':
            $id = $_POST['id'];
            $sql = "DELETE FROM products WHERE id = $id";
            mysqli_query($conn, $sql);
            break;
    }
}

// Get all products
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

// Logout button functionality
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit;
}
?>

</body>
</html>
