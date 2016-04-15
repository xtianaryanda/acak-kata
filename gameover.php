<?php
session_start();
?>
<html>
    <head>
        <title>Akac Taka!</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <p id="title">GAME OVER!</p><br>
        <p id="title">Your Score: <?php echo $_SESSION['score']; ?></p><br>
        <a href="index.php" id="subtitle">Back to front</a>
    </body>
</html>