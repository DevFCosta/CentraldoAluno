<?php
session_start();
if (isset($_SESSION['valida_sessao'])) {
    ?>

    <!DOCTYPE HTML>
    <html lang="pt-br">
        <head>

            <meta charset="UTF-8">
            <meta name="google-signin-scope" content="profile email">
            <meta name="google-signin-client_id" content="SEU_ID_DO_CLIENTE">
            <script src="https://apis.google.com/js/platform.js" async defer></script>
            <link rel="stylesheet" href="stylehome.css">

            <title>Arquivos</title>

            <!-- Bootstrap core CSS -->
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom fonts for this template -->
            <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
            <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

            <!-- Custom styles for this template -->
            <link href="css/agency.min.css" rel="stylesheet">


        </head>

        <body>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #212529">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="#page-top">Central do Aluno</a>
                    <a href="index.php"> 
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            Página Inicial<i class="fa fa-2x"></i>
                        </button>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav text-uppercase ml-auto">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="index.php">Página Inicial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="logout.php">Sair</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 

            <!--side-bar da home do aluno-->
            <div class="wrapper">
                <!-- Sidebar Holder -->
                <nav id="sidebar">
                    <ul class="list-unstyled components">
                        <li>
                            <a href="#homeSubmenu">Home</a>
                            <!--<ul class="collapse list-unstyled" id="homeSubmenu">
                                <li><a href="#">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                                <li><a href="#">Home 3</a></li>
                            </ul>-->
                        </li>
                        <li>
                            <a href="boletim.php">Meu boletim</a>
                            <!--<ul class="collapse list-unstyled" id="pageSubmenu">
                                <li><a href="#">Page 1</a></li>
                                <li><a href="#">Page 2</a></li>
                                <li><a href="#">Page 3</a></li>
                            </ul>-->
                        </li>
                        <li>
                            <a href="calendario.php">Meu calendário</a>
                        </li>
                        <li>
                            <a href="mapa.php">Pitstop do aluno</a>
                        </li>
                    </ul>                    
                </nav>

                <!-- Page Content Holder -->
                <div id="content">


                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-success navbar-btn">
                                <i class="btn btn-success"> Menu </i>
                                
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        </div>
                    </div>


                    <h2>POST</h2>
                    <p></p>
                    

                    <!--<div class="line"></div>

                    <h2>Lorem Ipsum Dolor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <div class="line"></div>

                    <h2>Lorem Ipsum Dolor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <div class="line"></div>

                    <h3>Lorem Ipsum Dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>-->
                </div>

            </div>

                <div class="overlay"></div>


                <!-- jQuery CDN -->
                <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
                <!-- Bootstrap Js CDN -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <!-- jQuery Custom Scroller CDN -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

                <!-- efeito fader do side-bar -->

                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#sidebar").mCustomScrollbar({
                            theme: "minimal"
                        });

                        $('#dismiss, .overlay').on('click', function () {
                            $('#sidebar').removeClass('active');
                            $('.overlay').fadeOut();
                        });

                        $('#sidebarCollapse').on('click', function () {
                            $('#sidebar').addClass('active');
                            $('.overlay').fadeIn();
                            $('.collapse.in').toggleClass('in');
                            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                        });
                    });
                </script>
                <!--fim efeito side-bar-->

            </center>
    </body>
    </html>


    <?php
} else {
    ?>
    Área restrita. Por favor, <a href="login.php"><strong>efetue login</strong></a>.
    <?php
}
?>

