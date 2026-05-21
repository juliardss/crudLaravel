<html>
<head>

    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>@yield('titulo')</title>

    <style>

        body{
            background: #f5f6fa;
        }

        nav{
            background: linear-gradient(90deg, #ff6b81, #ff4757) !important;
            padding: 0 25px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        }

        .brand-logo-custom{
            font-size: 2rem;
            font-weight: bold;
            color: white;
        }

        .menu-link{
            font-size: 16px;
            font-weight: 500;
            transition: 0.3s;
        }

        .menu-link:hover{
            background: rgba(255,255,255,0.15);
        }

        .container-custom{
            margin-top: 40px;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        h2{
            color: #444;
            font-weight: bold;
            margin-bottom: 30px;
        }

        table{
            margin-top: 20px;
            background: white;
        }

        table thead{
            background: #ff6b81;
            color: white;
        }

        table thead tr th{
            padding: 15px;
        }

        table tbody tr:hover{
            background: #fceff1;
        }

        table img{
            width: 60px;
            border-radius: 8px;
        }

        .btn-custom{
            border-radius: 8px !important;
            text-transform: uppercase;
            font-weight: bold;
            margin-right: 5px;
        }

        .btn-add{
            background: #2196F3 !important;
        }

        .btn-edit{
            background: #ff6b81 !important;
        }

        .btn-delete{
            background: #1abc9c !important;
        }

        input[type=text],
        input[type=number],
        textarea,
        select{
            border: 1px solid #dcdde1 !important;
            border-radius: 8px !important;
            padding-left: 10px !important;
            box-sizing: border-box !important;
        }

        label{
            color: #555 !important;
            font-weight: 500;
        }

    </style>

</head>

<body>

    <nav>

        <div class="nav-wrapper">

            <span class="brand-logo-custom">
                Projeto Cursos
            </span>

            <ul id="nav-mobile"
            class="right hide-on-med-and-down">

                <li>
                    <a class="menu-link"
                    href="{{ url('/') }}">
                        Home
                    </a>
                </li>

                <li>
                    <a class="menu-link"
                    href="{{ url('/admin/cursos') }}">
                        Cursos
                    </a>
                </li>

                <li>
                    <a class="menu-link"
                    href="{{ url('/admin/alunos') }}">
                        Alunos
                    </a>
                </li>

            </ul>

        </div>

    </nav>

    <div class="container container-custom">
