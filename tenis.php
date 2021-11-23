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
                <img src="https://static.riachuelo.com.br/RCHLO/14371723004/portrait/0468675f90c3bdee218d09f3c43a24e450675b41.jpg?imwidth=400" alt="imagem roupa" class="rounded" width="160">
                <h5 class="cordotexto">Tênis casual slip</h5>
                <!-- card info -->
                <div class=" mt-3 info">
                    <span class="text1 d-block cordotexto"> É um tênis rosa! </span>
                    <span class="text1 cordotexto"> seja bonito com esse tênis </span>
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
                <img src="https://static.riachuelo.com.br/RCHLO/14356449003/portrait/7bccee7faa7c5ce8b880d8a12539a3de695c7702.jpg?imwidth=400" alt="imagem roupa" class="rounded" width="160">
                <h5 class="cordotexto"> Tênis casual branco</h5>
                <!-- card info -->
                <div class="mt-3 info">
                    <span class="text1 d-block cordotexto"> advantage </span>
                    <span class="text1 cordotexto"> seja bonito com esse tênis </span>
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
                <img src="https://static.riachuelo.com.br/RCHLO/14298287003/portrait/16a0d2ca6088c389dcfe72a9c9c57df9f5bc838a.jpg?imwidth=400" alt="imagem roupa" class="rounded" width="160">
                <h5 class="cordotexto">Tênis de bailarina</h5>
                <!-- card info -->
                <div class="mt-3 info">
                    <span class="text1 d-block cordotexto"> Faça ballet com esse tênis!</span>
                    <span class="text1 cordotexto"> seja bonito com esse tênis </span>
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
                <img src="https://static.riachuelo.com.br/RCHLO/14371723004/portrait/0468675f90c3bdee218d09f3c43a24e450675b41.jpg?imwidth=400" alt="imagem roupa" class="rounded" width="160">
                <h5 class="cordotexto">Tênis casual slip</h5>
                <!-- card info -->
                <div class=" mt-3 info">
                    <span class="text1 d-block cordotexto"> É um tênis rosa! </span>
                    <span class="text1 cordotexto"> seja bonito com esse tênis </span>
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
                <img src="https://static.riachuelo.com.br/RCHLO/14356449003/portrait/7bccee7faa7c5ce8b880d8a12539a3de695c7702.jpg?imwidth=400" alt="imagem roupa" class="rounded" width="160">
                <h5 class="cordotexto"> Tênis casual branco</h5>
                <!-- card info -->
                <div class="mt-3 info">
                    <span class="text1 d-block cordotexto"> advantage </span>
                    <span class="text1 cordotexto"> seja bonito com esse tênis </span>
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
                <img src="https://static.riachuelo.com.br/RCHLO/14298287003/portrait/16a0d2ca6088c389dcfe72a9c9c57df9f5bc838a.jpg?imwidth=400" alt="imagem roupa" class="rounded" width="160">
                <h5 class="cordotexto">Tênis de bailarina</h5>
                <!-- card info -->
                <div class="mt-3 info">
                    <span class="text1 d-block cordotexto"> Faça ballet com esse tênis!</span>
                    <span class="text1 cordotexto"> seja bonito com esse tênis </span>
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
    
    
    </div>
    
</div>
</center>


</body>
</html>