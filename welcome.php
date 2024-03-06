<?php
session_start();

// Sjekk om brukeren er logget inn
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Omdiriger brukeren til innloggingssiden hvis de ikke er logget inn
    exit();
}

// Hent brukernavn fra økten
$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velkommen til Mr. Robot!</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <header>
        <h1>Velkommen, <?php echo $username; ?>!</h1>
    </header>
    <main>
        <section class="content"> 
            <p>Er du klar for det neste steget? </p>
            <p>serverpåloggingsinformasjon: .... <p>
            <p><a href="logout.php">Logg ut når du er klar</a></p>
        </section>
        <section class="images">
            <img src="https://th.bing.com/th/id/R.4ad9f30f95ea7aee2259f77aa3c45d21?rik=YzLr8YhD5%2butNg&riu=http%3a%2f%2fhdqwalls.com%2fwallpapers%2f4k-mr-robot-kj.jpg&ehk=dfK%2baB1QKICjGC%2bqa4I6lG2CaOhi9uRiU9lnQQrFHmw%3d&risl=1&pid=ImgRaw&r=0" alt="Bilde av Mr.Robot">
            <img src="https://th.bing.com/th/id/OIP.QFD8roVRwsqT1sFgyOoyGQHaEK?rs=1&pid=ImgDetMain" alt="Bilde av Mr.Robot">
            <img src="https://th.bing.com/th/id/OIP.2isUUTK_cGztd9EbPbnxBwHaLH?rs=1&pid=ImgDetMain" alt="Bilde av Mr.Robot">
        </section>
    </main>
</body>
</html>
