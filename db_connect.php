<?php
$servername = "localhost";
$username = "root";
$password = ""; // Implicit în XAMPP este gol
$dbname = "event_horizon";

// Crearea conexiunii
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificarea conexiunii
if ($conn->connect_error) {
  die("Conexiune eșuată: " . $conn->connect_error);
}
// Setăm setul de caractere la utf8 pentru a suporta diacritice
$conn->set_charset("utf8");
?>