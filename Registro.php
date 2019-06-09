<?php
include 'header.php';
include 'menubar.php';
?>

<div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
        <h2>Registro</h2>
        <p class="hint-text">Crea tu cuenta. Es gratis y solo toma un minuto.</p>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="Nombres"
                        required="required"></div>
                <div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Apellidos"
                        required="required"></div>
            </div>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirmar Contraseña"
                required="required">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-danger btn-lg btn-block"><i class="icon-login"></i>Registrar</button>
        </div>
    </form>

</div>


<?php
include 'footer.php';
?>