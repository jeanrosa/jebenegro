<!DOCTYPE html>
<html class='no-js' lang='es'>
	<!--<![endif]-->
<head>
    <!-- estilos fuentes CSS-->
        <?php include('config/head.php'); ?>
    <!-- end estilos fuentes CSS-->
</head>
<body>

    <header>
        <!--Menu-->
        <?php include ("config/menu.php")?>
        <!--end menu-->
    </header>

        <!--  Video Intro-->
        <div id="video-intro">
            <video id="v1-intro" src="videos/v1_intro.mp4"  autoplay></video>
            <div id="quitar-video" > <span class="fa fa-close fa-3x"></span></div>
        </div>
        <!--  end Video Intro  -->

        <!--slide fotos-->
        <div class="slide-fixed">
            <div id="slides">
                <div>
                    <img src="images/logoJBwhiteExplandor.png" class="img-logo-slide" alt="logoJBwhite">
                </div>
                <ul class="slides-container">
                    <li><img src="images/bg1.jpg" alt="JebeNegro"></li>
                    <li><img src="images/bg3.jpg" alt="JebeNegro"></li>
                    <li><img src="images/bg4.jpg" alt="JebeNegro"></li>
                    <li><img src="images/bg8.jpg" alt="JebeNegro"></li>
                    <li><img src="images/bg9.jpg" alt="JebeNegro"></li>
                    <li><img src="images/bg10.jpg" alt="JebeNegro"></li>
                    <li><img src="images/bg11.jpg" alt="JebeNegro"></li>
                </ul>
            </div>
        </div>
        <!--end slide fotos-->

    <!--Contenido-->
    <?php include ('config/contenido_menu.php');?>


            <!-- end Contenido-->

        <!-- Div redes sociales -->
            <div id="redes-sociales" class="row">
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <a href="#">
                        <span class="fa fa-facebook-official"></span>

                    </a>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <a href="#">
                        <span class="fa fa-instagram"></span>

                    </a>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <a href="#">
                        <span class="fa fa-youtube"></span>

                    </a>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <a href="#">
                        <span class="fa fa-twitter-square"></span>

                    </a>
                </div>
            </div>
        <!-- end Div redes sociales -->
    <!--Footer-->
    <footer class="footer">
        <?php include ('config/footer.php');?>
    </footer>

    <!--stick footer-->
    <?php include ('config/stick_footer.php');?>
    <!--end stick footer-->
<!--end footer-->

    <!--script intanciados y propios-->
        <?php include ("config/js_script_propios.php");?>
    <!--script intanciados y propios-->

</body>
</html>