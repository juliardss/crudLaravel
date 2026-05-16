<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <title>@yield('titulo')</title>

    <style>
        /* Customização para tons de rosa e layout igual ao da foto */
        nav {
            background-color: #ff6b81 !important; /* Rosa do cabeçalho */
            box-shadow: none !important;
            padding: 0 20px;
        }
        .brand-logo-custom {
            font-size: 2.1rem;
            color: #fff;
            display: inline-block;
            margin-top: 10px;
        }
        /* Estilização da tabela para ficar limpa como a da foto */
        table {
            margin-top: 30px;
            border-bottom: 1px solid #e0e0e0;
        }
        table thead tr td {
            color: #666;
            font-weight: 500;
        }
        /* Forçar os botões a não arredondarem tanto e terem cores customizadas */
        .btn-custom {
            border-radius: 2px !important;
            text-transform: uppercase;
            font-weight: 500;
            box-shadow: 0 2px 5px rgba(0,0,0,0.16) !important;
        }
        .btn-rosa-claro {
            background-color: #ff4757 !important; /* Rosa/Vermelho vivo para Alterar */
        }
        .btn-turquesa {
            background-color: #1abc9c !important; /* Verde turquesa para Excluir */
        }
        .btn-azul {
            background-color: #2196F3 !important; /* Azul para Adicionar */
        }
        /* Limitar tamanho da imagem na tabela para não quebrar o layout */
        table img {
            max-width: 40px;
            height: auto;
        }
    </style>
</head>
<body>

    <nav>
        <div class="nav-wrapper">
            <span class="brand-logo-custom">Projeto Cursos</span>
            
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Home</a></li>
                <li><a href="#">Cursos</a></li>
            </ul>
        </div>
    </nav>

