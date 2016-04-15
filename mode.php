<?php
session_start();
if (isset($_POST['difficulty'])) {
    // Simpan difficulty yang tadi di pilih di session
    unset ($_SESSION['selectedword']);
    unset ($_SESSION['shuffledword']);
    $_SESSION['difficulty'] = $_POST['difficulty'];
    $_SESSION['lives'] = 3;
    $_SESSION['score'] = 0;
    $_SESSION['gameover'] = false;
    header("location:game.php");
}
?>