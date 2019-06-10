<?php
include 'header.php';
include 'menubar.php';
include 'conectar.php';


if (isset($_POST['login'])) {


    $sql = mysqli_query("SELECT option_value FROM wp_10_options WHERE option_name='homepage' LIMIT 1");
      if ($res = mysqli_fetch_assoc($link, $sql)) {
          echo $res['option_value'];
          echo "1 record added";
    }
      else{
          echo "ERROR: Could not able to execute $sql. "
              . mysqli_error($link);
      }



    include 'desconectar.php';
}

?>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <h2 id="empresa"> Empresa de Transportes santa maria S.A</h2>
            <br>
            <h1 id="empresa">RUTA N! 15 </h1>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <img src="assets/img/ref/ref1.jpg" alt="" height="720px" width="1280px">
                                <div class="carousel-caption">
                                    <h3>Servicio Urbano</h3>
                                </div>
                            </div>
                            <div class="item carousel-item">
                                <img src="assets/img/ref/ref2.jpg" alt=" height=" 720px" width="1280px">
                                <div class="carousel-caption">
                                    <h3>Servicio Urbano</h3>

                                </div>
                            </div>
                            <div class="item carousel-item">
                                <img src="assets/img/ref/ref3.jpg" alt="" height="720px" width="1280px">
                                <div class="carousel-caption">
                                    <h3>Servicio Urbano</h3>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-2 sidenav">
            <div class="well">
                <div class="d-flex justify-content-center h-100">
                    <div class="searchbar">
                        <input class="search_input" type="text" name="" placeholder="Buscar . . .">
                        <a href="#" class="search_icon"><i class="icon-search"></i></a>
                    </div>
                </div>
                <br>
                <img id="buses" src="assets/img/Autos/bus1.jpg" alt="" width="300px" height="300px">
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>