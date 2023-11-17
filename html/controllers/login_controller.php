<?php
require 'connection.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    echo '<br>';
    echo $password;
    echo '<br>';
    $sql = "SELECT * FROM usuarios WHERE usuario = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        header("Location: ../profile.php?id=" . $row['id']);

    } else {
        echo "Usuario o contraseña incorrectos";
    }

    mysqli_free_result($result);
    mysqli_close($conn);
}
?>