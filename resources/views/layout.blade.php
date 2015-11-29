<html>
<head>
    <link href="/css/materialize.css" rel="stylesheet">
    <link href="/css/css.css" rel="stylesheet">

    <title>Inagito</title>
</head>
<body>

<div class="teal">

        <nav>
            <div class="nav-wrapper">
                <div class="container">
                <a href="#" class="brand-logo"><img style="height: 60px" src="/img/InAgito_logo-04.png"></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/evento">Home</a></li>
                    <li><a href="/evento/create">Cadastrar Evento</a></li>


                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    @yield('conteudo')
</div>

<br>
<br>
<br>
<div id="bottom" class="rodape">
    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">

                    <p class="grey-text text-lighten-4">Com o InAgito, seu evento pode ir mais longe, cadastre aqui seu evento e seja divulgado no estado inteiro</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Menu</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="/evento">Home</a></li>
                        <li><a class="grey-text text-lighten-3" href="/evento/create">Cadastar Evento</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2015 Copyright Infinity Studio
                <a class="grey-text text-lighten-4 right" href="#!"><img style="height: 50px" src="/img/Infinity_logo-03.png"></a>
            </div>
        </div>
    </footer>
</div>


<script src="{{asset('/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
</body>
</html>