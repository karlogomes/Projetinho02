<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@500&family=Roboto:ital,wght@1,100;1,300&display=swap');
        body{
            background-color:  #201b2c ;
            margin: 0;
            font-family: 'Outfit', sans-serif;
        }
        .parallax{
            background-image: url("festinha.svg");
            height: max-content ;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover ;
        }
        .page-title{
            background:rgba(0,0,0,0.5);
            text-align: center;
            color: white;
            padding: 50px;
            font-variant: small-caps;
            font-size: 150px;
            letter-spacing: 20px;
            font-family: 'Outfit', sans-serif;
        }
        #sticky{
            
            width: 100%;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-color: 	#2F4F4F ;
        }
        .menu {
          text-decoration: none ;
          color: #00ff88 ;
        }
        a{
            text-decoration: none ;
          color: #00ff88 ;
          font-size: 20px;
        }
        corcard{
            background-color: #201b2c;
        }


    </style>
</head>
<body>
<body>
<div class="parallax">
        <div class="page-title">Veste Bem</div>
 
       <div class="menu fixed-top" id="sticky">
       <nav class="navbar cor-fundo justify-content-between">
  <a href="menu.php">Inicio</a>
  <a href="blusa.php">Blusas</a>
<a href="camisa.php">Camisas</a>
<a href="calca.php">Calças</a>
<a href="tenis.php">Tenis</a>
  <form class="form-inline">
  <input class="form-control mr-sm-2" type="search" placeholder="Ex: Camisa Florida" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
  </form>
      </nav>
       </div>
    </div>

    <br> <br>
    <!-- container para os produtos -->
<center>
<div class="container mb-5 mt-5">
    <div class="row">
    <!-- card 1  -->
    <div class="col-md-4">
        <div class="card card-mt-3">
            <div class="product-1 align-items-center p-2 text-center">
                <img src="https://static.riachuelo.com.br/RCHLO/14333082004/portrait/3b7dce8b92a3e6464260c43c2ec50c5e18de69cd.jpg?imwidth=400" alt="imagem roupa" class="rounded" width="160">
                <h5 class="cordotexto">Calça Restart</h5>
                <!-- card info -->
                <div class=" mt-3 info">
                    <span class="text1 d-block cordotexto"> É uma calça azul estilo 2010! </span>
                    <span class="text1 cordotexto"> seja bonito com essa camisa </span>
                </div>
                <div class="cost mt-3 cordotexto">
                   <span>199.90R$</span>
                </div>
            </div>
            <div class="p-3 blusao text-center cordotexto mt-3 cursor">
            <span class="text-uppercase"> Adicionar ao carrinho</span>
        </div>
        </div>
        <!-- botão do card -->
       
    </div>
   <!-- fim do card 1  -->

    <!-- card 2 -->
    <div class="col-md-4">
        <div class="card card-mt-3">
            <div class="product-1 align-items-center p-2 text-center">
                <img src="https://static.riachuelo.com.br/RCHLO/14032996001/portrait/aadd37ad34406375c9c1c2ea39a783bdf11ef5f1.jpg?imwidth=400" alt="imagem roupa" class="rounded" width="160">
                <h5 class="cordotexto">Calça preta</h5>
                <!-- card info -->
                <div class="mt-3 info">
                    <span class="text1 d-block cordotexto"> Cambina com qualquer roupa </span>
                    <span class="text1 cordotexto"> seja bonito com essa camisa </span>
                </div>
                <div class="cost mt-3 cordotexto">
                   <span>199.90R$</span>
                </div>
            </div>
            <div class="p-3 blusao text-center cordotexto mt-3 cursor">
            <span class="text-uppercase"> Adicionar ao carrinho</span>
        </div>
        </div>
        <!-- botão do card -->
    </div>
   <!-- fim do card 2  -->
  
    <!-- card 3 -->
    <div class="col-md-4">
        <div class="card card-mt-3">
            <div class="product-1 align-items-center p-2 text-center">
                <img src="https://static.riachuelo.com.br/RCHLO/14112612004/portrait/f70fc0ca6149e34865d389a3aa7fd8fd1e8a8d0e.jpg?imwidth=400" alt="imagem roupa" class="rounded" width="160">
                <h5 class="cordotexto">Calça branca</h5>
                <!-- card info -->
                <div class="mt-3 info">
                    <span class="text1 d-block cordotexto"> Não deixe sujar! </span>
                    <span class="text1 cordotexto"> seja bonito com essa camisa </span>
                </div>
                <div class="cost mt-3 cordotexto">
                   <span class="cordotexto">199.90R$</span>
                </div>
            </div>
            <div class="p-3 blusao text-center cordotexto mt-3 cursor">
            <span class="text-uppercase"> Adicionar ao carrinho</span>
        </div>
        </div>
        <!-- botão do card -->
    </div>
   <!-- fim do card 3 -->
    
    
    </div>
    
</div>
<!-- fim dos produtos   -->

 <!-- container para os produtos -->

 <div class="container mb-5 mt-5">
    <div class="row">
    <!-- card 1  -->
    <div class="col-md-4">
        <div class="card card-mt-3">
            <div class="product-1 align-items-center p-2 text-center">
                <img src="https://static.riachuelo.com.br/RCHLO/14333082004/portrait/3b7dce8b92a3e6464260c43c2ec50c5e18de69cd.jpg?imwidth=400" alt="imagem roupa" class="rounded" width="160">
                <h5 class="cordotexto">Calça Restart</h5>
                <!-- card info -->
                <div class=" mt-3 info">
                    <span class="text1 d-block cordotexto"> É uma calça azul estilo 2010! </span>
                    <span class="text1 cordotexto"> seja bonito com essa camisa </span>
                </div>
                <div class="cost mt-3 cordotexto">
                   <span>199.90R$</span>
                </div>
            </div>
            <div class="p-3 blusao text-center cordotexto mt-3 cursor">
            <span class="text-uppercase"> Adicionar ao carrinho</span>
        </div>
        </div>
        <!-- botão do card -->
       
    </div>
   <!-- fim do card 1  -->

    <!-- card 2 -->
    <div class="col-md-4">
        <div class="card card-mt-3">
            <div class="product-1 align-items-center p-2 text-center">
                <img src="https://static.riachuelo.com.br/RCHLO/14032996001/portrait/aadd37ad34406375c9c1c2ea39a783bdf11ef5f1.jpg?imwidth=400" alt="imagem roupa" class="rounded" width="160">
                <h5 class="cordotexto">Calça preta</h5>
                <!-- card info -->
                <div class="mt-3 info">
                    <span class="text1 d-block cordotexto"> Cambina com qualquer roupa </span>
                    <span class="text1 cordotexto"> seja bonito com essa camisa </span>
                </div>
                <div class="cost mt-3 cordotexto">
                   <span>199.90R$</span>
                </div>
            </div>
            <div class="p-3 blusao text-center cordotexto mt-3 cursor">
            <span class="text-uppercase"> Adicionar ao carrinho</span>
        </div>
        </div>
        <!-- botão do card -->
    </div>
   <!-- fim do card 2  -->
  
    <!-- card 3 -->
    <div class="col-md-4">
        <div class="card card-mt-3">
            <div class="product-1 align-items-center p-2 text-center">
                <img src="https://static.riachuelo.com.br/RCHLO/14112612004/portrait/f70fc0ca6149e34865d389a3aa7fd8fd1e8a8d0e.jpg?imwidth=400" alt="imagem roupa" class="rounded" width="160">
                <h5 class="cordotexto">Calça branca</h5>
                <!-- card info -->
                <div class="mt-3 info">
                    <span class="text1 d-block cordotexto"> Não deixe sujar! </span>
                    <span class="text1 cordotexto"> seja bonito com essa camisa </span>
                </div>
                <div class="cost mt-3 cordotexto">
                   <span class="cordotexto">199.90R$</span>
                </div>
            </div>
            <div class="p-3 blusao text-center cordotexto mt-3 cursor">
            <span class="text-uppercase"> Adicionar ao carrinho</span>
        </div>
        </div>
        <!-- botão do card -->
    </div>
   <!-- fim do card 3 -->
    
    
    </div>
    
</div>
</center>
</body>
</html>