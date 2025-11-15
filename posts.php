<?php
    $link = mysqli_connect('db', 'root', 'msitop', 'first');
    $id = $_GET['id'];
    settype($id, 'integer');
    $sql = "SELECT * FROM posts WHERE id=$id";
    $res = mysqli_query($link, $sql);
    $rows = mysqli_fetch_array($res);
    $title = $rows['title'];
    $main_text = $rows['main_text'];
?>

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
                <?php
                echo "<h1>$title</h1>";
                echo "<p>$main_text</p>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>