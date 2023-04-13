<!doctype html>
<html lang="en">

<head>
  <title>Spark Mountain</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="javascript" href="js/script.js">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
  <header class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <section class="container"><a class="navbar-brand" href="#">
            <strong class="h6 mb-0 font-weight-bold text-uppercase ">Spark mountain energy <a href="#.html"> </strong>
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
            <form method="post" action="index.php">
              <input type="submit" value="Login">
          </form>
        </section>
    </nav>
  </header>
<section>
  <div class="login-box">
        <h2>Login Here</h2>
        <form action="login.php" method="post">
            <div class="user-box">
                <input type="text" name="username" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <input type="submit" name="" value="Submit">
        </form>
    </div>
</section>