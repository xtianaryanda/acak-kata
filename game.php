<?php
session_start();
// Set tingkat kesulitan permainan
$diff = $_SESSION['difficulty'];
?>
<html>
    <head>
        <title>Akac Taka!</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="status-bar">
            <?php
            if (isset($_SESSION['lives'])) {
                $lives = $_SESSION['lives'];
                echo "Lives: $lives <br>";
            }
            if (isset($_SESSION['score'])) {
                $score = $_SESSION['score'];
                echo "Score: $score";
            }
            ?>
        </div>
        <div id="shuffle-container">
            <p id="shuffledword">
            <?php
            // Cek apakah jawaban sudah dijawab dengan benar atau belum
            if (isset($_SESSION['selectedword']) && isset($_SESSION['shuffledword'])) {
                // Apabila masih salah, kata yang harus ditebak masih sama dengan yang sebelumnya
                echo $_SESSION['shuffledword'];
            } else {
                // Apabila sudah benar, kata lain ditampilkan secara random
                // Ambil data dari database
                $connection = mysql_connect("localhost", "root", "");
                // Sesuaikan parameter dengan database anda
                $db = mysql_select_db("test", $connection);
                $words = mysql_query("select word from listkata where difficulty = $diff", $connection);
                // Memasukkan kata-kata yang telah diambil ke sebuah array
                $array = array();
                while($row = mysql_fetch_assoc($words)) {
                    $array[] = $row;
                }
                // Generate sebuah angka acak
                $num = rand(0,mysql_num_rows($words) - 1);
                // Ambil kata secara acak
                $selectedword = $array[$num]['word'];
                // Simpan kata yang terpilih dan kata yang telah diacak di session
                $_SESSION['selectedword'] = $selectedword;
                $shuffledword = str_shuffle($selectedword);
                $_SESSION['shuffledword'] = $shuffledword;
                // Tampilkan kata terpilih yang sudah diacak
                echo $_SESSION['shuffledword'];
            }
            ?>
            </p>
        </div>
        <!-- Form untuk membaca input user -->
        <div id="form-container">
            <form action="acakkata.php" method="post">
                <input type="text" name="answer" placeholder="Jawaban Anda" autofocus><br><br>
                <input type="submit" name="submit" value="Tebak">
            </form>
        </div>
        <!-- Fungsi yang digunakan untuk menampilkan informasi jawaban benar atau salah -->
        <div id="message-container">
            <?php
            if (isset($_SESSION['Error'])) {
                echo $_SESSION['Error'];
                unset($_SESSION['Error']);
            }
            ?>
        </div>
    </body>
</html>