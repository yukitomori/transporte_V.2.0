<?php

include 'conectar.php';


if (isset($_POST['login'])) {

    $sql = "select Email from transporte.usuario where Email = '$_POST[email]' and `Passw`='" . sha1($_POST["password"]) . "'";

    if ($res = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);

            session_start();
            $_SESSION["Email"]=$row['Email'];
            echo $_SESSION["Email"];

            header('Location: index.php');

        } else {
            echo "Usuario incorrecto";
        }
    } else {
        echo "ERROR: Could not able to execute $sql. "
            . mysqli_error($link);
    }


    include 'desconectar.php';
}