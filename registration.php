<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пожидаев Дмитрий Александрович</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-4">Registration</h1>
                <form action="/registration.php" method="POST" class="d-flex flex-column gap-3">
                    <input type="text" name="login" class="form-control hacker-input" placeholder="login">
                    <input type="email" name="email" class="form-control hacker-input" placeholder="email">
                    <input type="password" name="password" class="form-control hacker-input" placeholder="password">
                    <button class="btn btn-primary" type="submit" name="submit">Register</button>
                    <p class="mt-3">Alredy have an account? <a href="/login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('db.php');

if (isset($_COOKIE['User'])) {
    header("Location: /profile.php");
    exit();
}

if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if (!$login || !$email || !$pass) die("input all parameters");

    $sql = "INSERT INTO users (username, email, pass) VALUES ('$login', '$email', '$pass')";

    if (!mysqli_query($link, $sql)) {
        echo "Erroe insert table users";
    } else {
        header("Location: /login.php");
        exit();
    }
}
?>