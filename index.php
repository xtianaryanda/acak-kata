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
        <p id="title">AKAC TAKA!</p>
        <p id="subtitle">Permainan acak kata yang akan membuat kamu pusing</p>
        <!-- Anda bisa memilih tingkat kesulitan game. Semakin tinggi tingkat kesulitan, semakin banyak jumlah huruf pada kata -->
        <div id="container1">
            <form action="mode.php" method="post">
                <p> Choose your difficulty:</p>
                <select name="difficulty">
                    <option value="1">Easy</option>
                    <option value="2">Medium</option>
                    <option value="3">Expert</option>
                </select><br><br>
                <input type="submit" value="Let's Play!" name="submit">
            </form>
        </div>
    </body>
</html>