<?php
session_start();
if (isset($_POST['difficulty'])) {
    // Simpan difficulty yang tadi di pilih di session
    unset ($_SESSION['selectedword']);
    unset ($_SESSION['shuffledword']);
    $_SESSION['difficulty'] = $_POST['difficulty'];
    header("location:game.php");
}
?>