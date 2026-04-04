<?php
require_once './functions.php';

if($newPass != ""){
    session_start();

    $_SESSION["newPass"] = $newPass;
    header("Location: ./result.php");
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
    <h1>Generatore Password</h1>

    <hr>

    <form action="">

        <div class="mb-3">
            <label for="password" class="form-label">Quanti caratteri per la tua Password?</label>
            <input type="number" id="length" name="length" min="5" max="20" class="form-control"><label
                for="length">Lunghezza password</label>
        </div>
        <br>
        <div class="mb-3">
            <label for="chars" class="form-label">Consenti ripetizioni</label>
            <input type="checkbox" name="chars" class="form-control" id="chars">
        </div>
        <br>
        <div>
            <input type="checkbox" id="uppercase" name="uppercase"><label for="uppercase">Lettere Maiuscole</label>
            <input type="checkbox" id="lowercase" name="lowercase"><label for="lowercase">Lettere Minuscole</label>
            <input type="checkbox" id="digits" name="digits"><label for="digits">Numeri</label>
        </div>
        <br>
        <button>Genera Password</button>
    </form>

    <?php
    echo $newPass
        ?>



</body>

</html>