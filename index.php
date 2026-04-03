<?php
session_start();
include_once 'functions.php';

?>

<?php
    $newPass = "";
    if (isset($_POST['submit'])) {
        $newPass = setNewPass($_POST['lunghezza_pass']);
        $_SESSION['password'] = $newPass;
        header('Location: ./result.php');

        exit;
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
    <h1>Password</h1>

    <form action="" method="POST">

        <div class="mb-3">
            <label for="password" class="form-label">Quanti caratteri per la tua Password?</label>
            <input type="number" name="lunghezza_pass" class="form-control" id="password">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    



</body>

</html>