<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Gestão | @yield('titulo')</title>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
  
            body { display: flex; min-height: 100vh; flex-direction: column; }
            main { flex: 1 0 auto; }
        </style>
    </head>

    <body>
        <header>
            <nav class="indigo darken-4">
                <div class="nav-wrapper container">
                    <a href="/" class="brand-logo">Dashmanager</a>
                    <a href="#" data-target="menu-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/"><i class="material-icons left">home</i>Início</a></li>
                        <li><a href="{{ route('admin.cursos') }}"><i class="material-icons left">class</i>Cursos</a></li>
                    </ul>
                </div>
            </nav>

            <ul class="sidenav" id="menu-mobile">
                <li><div class="user-view">
                    <div class="background indigo darken-2"></div>
                    <span class="white-text name">Menu de Navegação</span>
                </div></li>
                <li><a href="/"><i class="material-icons">home</i>Home</a></li>
                <li><a href="{{ route('admin.cursos') }}"><i class="material-icons">class</i>Cursos</a></li>
            </ul>
        </header>

        <main>
            <div class="container" style="margin-top: 20px;">
                @yield('conteudo')
            </div>
        </main>

        <footer class="page-footer indigo darken-4">
            <div class="footer-copyright">
                <div class="container">
                    © {{ date('Y') }} Sistema de Cursos Laravel
                    <a class="grey-text text-lighten-4 right" href="#!">v1.0</a>
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
                M.updateTextFields();
                $('.tooltipped').tooltip();
            });
        </script>
    </body>
</html>