<?php
session_start();

if (isset($_SESSION['password'])) {
    $newPass = $_SESSION['password'];
    unset($_SESSION['password']); // rimuove la password dopo averla mostrata
} else {
    $newPass = "Nessuna password generata";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La tua password è: <?php echo $newPass; ?></h1>
</body>
</html>