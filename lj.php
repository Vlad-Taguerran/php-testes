<?php 
include_once("conexao.php");
$result_produtos = "SELECT * FROM produtos";
$resultado_produtos = mysqli_query($conn, $result_produtos);
?>

<!DOCTYPE html>
<html lang="utf-8">
<head>
    <meta charset="utf-8">
    <title>loja kiokutana</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-reboot.css" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-grid.css" />
    <link rel="stylesheet" type="text/css" href="./css/paginas.css">
</head>
<body>
        <header class="menu-principal">

                <div class="tarja">
                   <main>
                      <input type="checkbox" id="check">
                      <label id="icone-check" for="check"><img src="./img/barras-menu.jpg" alt="menu" id="barra-menu"></label>
                      <div id="conteiner">
                         <nav>
                            <ul>
                               <li><a href="index.html">Home</a></li>
                               <li><a href="historia_ninjutsu.html">Historia do ninjutsu</a></li>
                               <li><a href="cursos.html">Sobre</a></li>
                               <li><a href="loja.php">Loja</a></li>
                               <li><a href="#">Contato</a></li>
                            </ul>
                         </nav>
                      </div>
                      <div id="tel">
       
                            <img id="wpp" src="./img/icones/wpp-icon.png" alt="WhatApp">
                            <section id="numero">(11) 9 5818-1658</section>
          
          
                         </div>
                         <h1 id="nome">Loja kiokutana</h1>
                   </main>
                </div>
             </header>
             <!--vitrine-->
         
                   <div class="container theme-showcase" role="main">
                      <div class="page-header">
                         <h1>Armas</h1>
                      </div>
                      <div class="row">
                         
                            <div class="col-sm-6 col-md-4">
                               <div class="thumbnail">
                                  <img src="./img/armas/garras.jpg"alt="garras" >
                                  <div class="caption text-center">
                                     <a href="detalhes.php?produto_id=<?php echo $rows_produtos['produto_id']; ?>"><h3><?php echo $rows_produtos['produto_nome']; ?></h3></a>
                                     <p><a href="#" class="btn btn-primary" role="button">Comprar</a> </p>
                                  </div>
                               </div>
                            </div>
                         
                      </div>
                   </div>
                   
                   
                   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                   <!-- Include all compiled plugins (below), or include individual files as needed -->
                   <script src="js/bootstrap.min.js"></script>
</body>

</html>