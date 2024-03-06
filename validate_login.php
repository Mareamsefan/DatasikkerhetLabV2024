<?php
// Definer gyldige brukernavn og passord
$gyldige_brukernavn = array("elliot", "fsociety", "mrrobot");
$gyldige_passord = array("123456", "password", "qwerty");

// Hent brukernavn og passord fra skjemaet
$innsendt_brukernavn = $_POST['username'];
$innsendt_passord = $_POST['password'];

// Sjekk om innsendt brukernavn og passord er gyldige
if (in_array($innsendt_brukernavn, $gyldige_brukernavn) && in_array($innsendt_passord, $gyldige_passord)) {
    // Brukernavn og passord er gyldige, logg inn brukeren
    session_start();
    $_SESSION['username'] = $innsendt_brukernavn;
    header("Location: welcome.php"); // Send brukeren til velkomstsiden etter innlogging
    exit();
} else {
    // Brukernavn eller passord er feil, omdiriger tilbake til innloggingssiden
    header("Location: login.html?login_failed=true");
    exit();
}
?>
