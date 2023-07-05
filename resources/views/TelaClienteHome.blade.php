<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>"Menu"</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Estilos CSS */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        #sidebar {
            width: 15%;
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
            margin-left: 20%;
            padding: 20px;
        }
    </style>
</head>
<body>
    <form id="frmTelaInicial" action="javascript:void(0)">
    
    	<input type="hidden" id="dsAba">
    	
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
            <!-- Conteúdo da página -->
        </div>
    </form>
</body>
</html>