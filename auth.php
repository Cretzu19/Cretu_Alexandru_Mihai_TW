<?php
include 'db_connect.php';

if ($_GET['action'] == 'signup') {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Criptăm parola!

    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "Cont creat cu succes! <a href='login.php'>Loghează-te aici</a>";
    } else {
        echo "Eroare: " . $conn->error;
    }
}
?>