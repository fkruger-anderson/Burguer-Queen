<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
      /* Estilos CSS */
      .nav-wrapper {
            background-color: #D86822;
        }

      .nav-content {
            background-color: #444D5D;
        }

      .logo {
        background-image: url('../imagens/Logo.svg');
        background-repeat: no-repeat;
        background-position: center left;
        margin-left: 10px;
        padding-left: 80px;
      }

      </style>

      
</head>

<body>
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><i class="logo">Burguer Queen</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">shopping_cart</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">login</i></a></li>
      </ul>
    </div>
  </nav>


  <nav>
  <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">INICIAL</a></li>
        <li class="tab"><a class="active" href="#test2">BURGUER</a></li>
        <li class="tab disabled"><a href="#test3">ACOMPANHAMENTOS</a></li>
        <li class="tab"><a href="#test4">BEBIDAS</a></li>
      </ul>
    </div>
  </nav>

@yield('conteudo')

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>