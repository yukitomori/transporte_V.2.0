<?php
include 'headeradmin.php';
include 'menubaradmin.php';
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Inicio</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <?php
                    include '../conectar.php';

                    $sql = "select U.idUsuario, U.Email ,P.idPerfil, P.Descripcion as Perfil 
                        FROM usuario U
                        INNER JOIN perfil P ON
                        P.idPerfil = U.idPerfil;";
                    if ($res = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($res) > 0) {
                            echo "<table class='table'>";
                            echo "<tr>";
                            echo "<th>id</th>";
                            echo "<th>Email</th>";
                            echo "<th>Perfil</th>";
                            echo "<th>Acción</th>";
                            echo "</tr>";
                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>" . $row['idUsuario'] . "</td>";
                                echo "<td>" . $row['Email'] . "</td>";
                                echo "<td>" . $row['Perfil'] . "</td>";
                                echo "<td> <a href='#' id='editar_".$row['idUsuario']."' class='btn btn-sm btn-danger mr-2'>Editar</a><a href='#' id='eliminar_".$row['idUsuario']."' class='btn btn-sm btn-danger'>Eliminar</a></td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "No matching records are found.";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. "
                            . mysqli_error($link);
                    }
                    include '../desconectar.php';
                    ?>


                </div>
            </div>
        </div>


    </main>

<?php
include 'footeradmin.php';

?>