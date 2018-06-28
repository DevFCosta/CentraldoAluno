<!DOCTYPE HTML>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="SEU_ID_DO_CLIENTE">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    >

    <title>Inscreva-se</title>

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
    <script>
        $(document).ready(function() {

            //verificar se os campos de usu�rio e senha foram devidamente preenchidos
            $('#btn_login').click(function() {

                var campo_vazio = false;

                if ($('#campo_usuario').val() == '') {
                    $('#campo_usuario').css({
                        'border-color': '#A94442'
                    });
                    campo_vazio = true;
                } else {
                    $('#campo_usuario').css({
                        'border-color': '#CCC'
                    });
                }

                if ($('#campo_senha').val() == '') {
                    $('#campo_senha').css({
                        'border-color': '#A94442'
                    });
                    campo_vazio = true;
                } else {
                    $('#campo_senha').css({
                        'border-color': '#CCC'
                    });
                }

                if (campo_vazio)
                    return false;
            });
        });
    </script>

    <!-- Static navbar -->
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
                </ul>
            </div>
        </div>
    </nav>

    <center>
        <div class="container">

            <br><br><br><br><br>

            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h2> Entrar </h2>
                <br />
                <form method="post" action="valida.php">

                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">

                    </div>
                    <div class="form-group coll-md-4">

                        <div class="form-group">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
                        </div>
                        <button type="submit" name="submit" value="submit" class="btn btn-success form-control">Entrar</button>

                </form>

                </div>

            </div>
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html