<?php
function setNewPass($lunghezza_pass)
{

    $uppercase = range('A', 'Z');
    $lowercase = range('a', 'z');
    $digits = range('0', '9');
    $allChars = array_merge($uppercase, $lowercase, $digits);
    $allChars = array_unique($allChars);

    $randomKey = array_rand($allChars);

    $newPass = "";
    for ($i = 0; $i < $lunghezza_pass; $i++) {
        $randomKey = array_rand($allChars);
        $newPass .= $allChars[$randomKey];
    }
    return $newPass;
}
?>