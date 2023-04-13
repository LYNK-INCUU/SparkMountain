<!DOCTYPE html>
<html lang="en">
<head>
    

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS v5.3.0 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="javascript" href="js/script.js">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Document</title>
</head>


<header class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <section class="container"><a class="navbar-brand" href="#">
            <strong class="h6 mb-0 font-weight-bold text-uppercase ">Spark mountain energy <a href="index2.html"> </strong>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <section class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Home <span class="sr-only"></span></a></li>
                    <li class="nav-item"><a class="nav-link" href="evenementen.php">Evenementen</a></li>
                    <li class="nav-item"><a class="nav-link" href="advertise.php">Ads</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link disabled" href="#">W.I.P</a></li>
                </ul>
            </section>
            <section><button type="button" class="btn btn-warning">Login</button></section>
        </section>
    </nav>
  </header>
<body>
    

<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

// Check if user is an administrator
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header("location: index.php");
    exit;
}

// Connect to the database
$host = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

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
*/ <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    <h3>Add a product:</h3>
    <form method="post">
        <input type="hidden" name="action" value="add">
        <label>Name:</label>
        <input type="text" name="name">
        <br>
        <label>Price:</label>
        <input type="number" name="price" step="0.01">
        <br>
        <input type="submit" value="Add">
    </form>
    <br>
    <h3>Remove a product:</h3>
    <form method="post">
        <input type="hidden" name="action" value="remove">
        <label>ID:</label>
        <input type="number" name="id">
        <br>
        <input type="submit" value="Remove">
    </form>
    <br>
    <h3>Product List:</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <form method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>
<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

// Check if user is an administrator
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header("location: index.php");
    exit;
}

// Connect to the database
$host = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

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

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    <h3>Add a product:</h3>
    <form method="post">
        <input type="hidden" name="action" value="add">
        <label>Name:</label>
        <input type="text" name="name">
        <br>
        <label>Price:</label>
        <input type="number" name="price" step="0.01">
        <br>
        <input type="submit" value="Add">
    </form>
    <br>
    <h3>Remove a product:</h3>
    <form method="post">
        <input type="hidden" name="action" value="remove">
        <label>ID:</label>
        <input type="number" name="id">
        <br>
        <input type="submit" value="Remove">
    </form>
    <br>
    <h3>Product List:</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <form method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

