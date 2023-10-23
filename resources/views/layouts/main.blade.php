<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonte do Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Icones do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>

    <title>@yield('title')</title>
</head>
<body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div id="icon-container">
                <a href="/" class="navbar-brand">
                <img src="/img/easy_gestao_logo.png" alt="EasyGestão" width="80" >
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/plans/list">Planos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users/list">Usuários</a>
                </li>
                </ul>
                <ul class="navbar-nav ms-auto search-field">
                <li class="nav-item">
                    <form class="form-inline search ml-auto">
                        <input class="form-control mr-sm-2 search-field" type="search" placeholder="Procurar..." aria-label="Search">
                    </form>
                </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
</body>
    <footer class="bg-light text-light text-center py-3">
        <div class="footer-container">
            <div class="row">
                <div class="col-md-6 easygestao">
                    <li class="easy">EasyGestão &copy; 2023</li>
                    <li class="slogan">Seu software de Gestão</li>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><a href="#">Termos de serviço</a></li>
                        <li><a href="#">Política de privacidade</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</html>