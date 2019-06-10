<?php
include 'header.php';
include 'menubar.php';
include 'conectar.php';


if (isset($_POST['save'])) {


    $sql = "INSERT INTO usuario (Passw,Email, Nombres, ApellidoPaterno, ApellidoMaterno,idPerfil)
VALUES (SHA1('$_POST[password]'),'$_POST[email]','$_POST[nombres]','$_POST[apellidoPaterno]','$_POST[apellidoMaterno]',2)";
    if (!mysqli_query($link, $sql)) {
        echo "ERROR: Could not able to execute $sql. "
            . mysqli_error($link);

    }

    echo "1 record added";

    include 'desconectar.php';
}

?>

    <div class="signup-form">
        <form action="Registro.php" method="post">
            <h2>Registro</h2>
            <p class="hint-text">Crea tu cuenta. Es gratis y solo toma un minuto.</p>
            <div class="form-group">

                <input type="text" class="form-control" name="nombres" placeholder="Nombres"
                       required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="apellidoPaterno" placeholder="Apellido Paterno"
                       required="required">

            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="apellidoMaterno" placeholder="Apellido Materno"
                       required="required">

            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Contraseña"
                       required="required">
            </div>


            <div class="form-group">
                <button type="submit" name="save" class="btn btn-danger btn-lg btn-block"><i class="icon-login"></i>Registrar
                </button>
            </div>
        </form>

    </div>

<?php
include 'footer.php';
?>