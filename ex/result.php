<?php
session_start();

if (isset($_SESSION['newPass'])) {
    $newPass = $_SESSION['newPass'];
    
} else {
    $newPass = "Nessuna password generata";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <nav>
        <a href="./index.php">Torna alla home</a>
    </nav>
    <h1>La tua password di <?php echo strlen($newPass) ?> caratteri è: <?php echo $newPass; ?></h1>

    <pre>
       <?php echo $newPass;?>
    </pre>
</body>
</html>