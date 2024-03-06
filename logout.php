<?php
// Start sessionen
session_start();

// Slett alle sessionvariabler
session_unset();

// Ødelegg sessionen
session_destroy();

// Omdiriger tilbake til innloggingssiden
header("Location: index.html");
exit;
?>
