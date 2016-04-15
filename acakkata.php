<?php
session_start();
if (isset($_POST['answer'])) {
    $answer = $_POST['answer'];
    // Cek apakah kata yang diinput user sesuai dengan kata yang belum diacak
    if ($answer == $_SESSION['selectedword']){
        // Apabila jawaban benar, unset variabel di session karena akan ditampilkan kata lain
        unset($_SESSION['selectedword']);
        unset($_SESSION['shuffledword']);
        $_SESSION['score'] += 50;
        $_SESSION['Error'] = '<p style="color: green;">Jawaban anda benar!';
        header("location:game.php");
    } else {
        // Apabila jawaban salah, kata yang sebelumnya akan ditampilkan lagi
        $_SESSION['lives'] -= 1;
        if ($_SESSION['lives'] == 0) {
            $_SESSION['gameover'] = true;
            header("location:gameover.php");
        } else {
            $_SESSION['Error'] = '<p style="color: red;">Jawaban anda salah, silahkan coba lagi</p>';
            header("location:game.php");
        }
    }
}
?>