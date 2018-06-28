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

            <title>Calendário</title>

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

            <Style>
            </style>

        </head>

        <body>
            <!-- Navegation -->
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
                                <a class="nav-link js-scroll-trigger" href="home.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="logout.php">Sair</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <br><br><br><br><br><br>

            <h2 align="center"> Calendário do aluno </h2>

        <center>
            <div style="padding-top:20px; padding-left:0px" >
            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;hl=pt_BR&amp;bgcolor=%23FFFFFF&amp;src=en.brazilian%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FSao_Paulo" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                            </div>
        </center>
        </body>
     
       
        
       <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Central do Aluno 2018</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/centraldoaluno.ifrjcac/?modal=admin_todo_tour">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/channel/UC5IeF9M9cuN4O2H33bwYBOA">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="politica.html">Política de Privacidade</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                        <li>
                            Contato: centraldoaluno.ifrjcac@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </html>


    <?php
} else {
    ?>
    Área restrita. Por favor, <a href="login.php"><strong>efetue login</strong></a>.
    <?php
}
?>

