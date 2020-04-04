<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="./">Convocatorias a Auxiliares</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="./">Inicio</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./convocatorias">Convocatorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contacto">Contacto</a>
                </li>
                
            </ul>
            <ul class="navbar-nav ml-auto mt-2-mt-lg-0">
                <li class="nav-item"><a href="./login" class="nav-link">Iniciar Sesión</a></li>
                <li class="nav-item"><a href="./register" class="nav-link">Registrarse</a></li>
            </ul>
        </div>
    </nav>
    <!-- menu -->
    <!-- Sección para el contenido de cada página -->
    @yield('content')
    <!-- Sección para el contenido de cada página -->
    <!-- pie de página -->
    <footer class="page-footer font-small blue pt-4 bg-dark text-light">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Convocatorias a auxiliares</h5>
                    <p>información de la página a convocatorias a auxiliares</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-center">Otros sitios de interés</h5>

                    <ul class="list-unstyled text-center">
                    <li>
                        <a href="http://www.umss.edu.bo/" target="_blank">UMSS</a>
                    </li>
                    <li>
                        <a href="http://websis.umss.edu.bo/" target="_blank">Websis</a>
                    </li>
                    <li>
                        <a href="http://www.fcyt.umss.edu.bo/" target="_blank">FCyT</a>
                    </li>
                    <li>
                        <a href="http://www.scesi.umss.edu.bo/" target="_blank">SCESI</a>
                    </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-center">Información de Contacto</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p><b>Correo:</b> <a href="mailto:dpto.inf.sis@cs.umss.edu.bo">dpto.inf.sis@cs.umss.edu.bo</a> ,<a href="mailto:webmaster@cs.umss.edu.bo">webmaster@cs.umss.edu.bo</a>  </p>
                        </li>
                        <li>
                            <p><b>Teléfono:</b> (591)-(4)233719</p>
                        </li>
                        <li>
                            <p><b>Interno:</b> 36530(Lab. Desarrollo) - 36348(Secretaria)</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2020 Copyright</div>
    </footer>
    <!-- pie de página -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>