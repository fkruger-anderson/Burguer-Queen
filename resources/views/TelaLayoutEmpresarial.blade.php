<!DOCTYPE html>

<html lang="pt-br">
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
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: grid;
            grid-template-columns: 15%, 85%;
        }

    
        #sidebar {
            height: 100vh;
            background-color: gray;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
        }

        #sidebar ul {
            list-style-type: none;
            padding: 0;
            text-align: center;

        }

        #sidebar ul li {
            margin-top: 10px;
            background-color: transparent;
            padding: 5px;
            cursor: pointer;
        }

        #sidebar ul li:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        #content {
            padding: 20px;
            min-height: 100%;
            background-color: rgb(238, 238, 238);
            color: black;
        }
    </style>
</head>
<body>
    	
        <div id="sidebar" "center">
            <ul>
                <li><span id="btUsuario">Usuários</span></li>
                <li><span id="btCliente">Clientes</span></li>
                <li><span id="btProduto">Produtos</span></li>
                <li><span id="btPedido">Pedidos</span></li>
                <li><span id="btCategoria">Categorias</span></li>
                <li><span id="btFormaPagamento">Formas de Pagamento</span></li>
                <li><span id="btFreteEntregadores">Frete/Entregadores</span></li>
                <li><span id="btIngrediente">Ingredientes</span></li>
                <li><span id="btPromocao">Promoções</span></li>
                <li><span id="btPrivilegio">Privilégios</span></li>
            </ul>
        </div>
    
        <div id="content">
            
            
            <style>
            .container {
                max-width: 100%;
                margin: 0 auto;
                padding: 20px;
              }
          
              .search-form {
                margin-bottom: 20px;
              }
          
              .search-input {
                width: 200px;
                padding: 5px;
                margin-right: 10px;
              }

              .search-input:focus {
                 border-bottom: #ff6600;
              }

              .btn {
                padding: 5px 10px;
                background-color: #f07400;
                color: white;
                border: none;
                cursor: pointer;
              }
          
              .table {
                width: 100%;
                font-size: 12px;
                border-collapse: collapse;
              }
          
              .table th, .table td {
                padding: 8px;
                border-bottom: 1px solid #ddd;
              }
          
              .table tr:hover {
                background-color: #ffc18e;
              }
          
              .btn-edit, .btn-delete {
                padding: 5px 10px;
                background-color: #ff6600;
                color: white;
                border: none;
                cursor: pointer;
              }

              .btn:hover {    
                background-color: #666666; 
              }

              .btn-edit:hover {    
                background-color: #666666; 
              }

              .btn-delete:hover {    
                background-color: #666666; 
              }


            </style>
          </head>
          <body>
            <div class="container">
                @yield('lista')
          
              <form class="search-form">
                <input type="text" class="search-input" placeholder="Pesquisar...">
                <button class="btn" type="submit">Buscar</button>
                <button class="btn">Adicionar</button>
              </form>
          
              @yield('conteudo')

            </div>


        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            // Função para carregar o conteúdo da nova view
            function carregarView(view) {
                $("#content").load(view + ".php");
            }
    

            function habilitaBotoes() {
                 // Evento de clique do botão Usuários
            $("#btUsuario").click(function() {
                carregarView("TelaEmpresarialUsuario");
            });
    
            // Evento de clique do botão Clientes
            $("#btCliente").click(function() {
                carregarView("TelaEmpresarialCliente");
            });

            // Evento de clique do botão Produtos
            $("#btProduto").click(function() {
                carregarView("TelaEmpresarialProduto");
            });

            // Evento de clique do botão Pedidos
            $("#btPedido").click(function() {
                carregarView("pedidos");
            });

            // Evento de clique do botão Categorias
            $("#btCategoria").click(function() {
                carregarView("categorias");
            });

            // Evento de clique do botão Formas de Pagamento
            $("#btFormaPagamento").click(function() {
                carregarView("formasPagamento");
            });

            // Evento de clique do botão Frete/Entregadores
            $("#btFreteEntregadores").click(function() {
                carregarView("freteEntregadores");
            });

            // Evento de clique do botão Ingredientes
            $("#btIngrediente").click(function() {
                carregarView("ingredientes");
            });

            // Evento de clique do botão Promoções
            $("#btPromocao").click(function() {
                carregarView("promocoes");
            });

            // Evento de clique do botão Privilégios
            $("#btPrivilegio").click(function() {
                carregarView("privilegios");
            });
            }

            $(document).ready(function() {
                habilitaBotoes();
            });
        </script>  
</body>
</html>