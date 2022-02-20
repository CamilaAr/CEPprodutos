
   <!DOCTYPE html>
<?php
error_reporting(0);
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">

         <link rel="stylesheet" href="css/style.css">
        
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.10.1/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.10.1/dist/js/uikit.min.js"></script>
    
    <!-- Adicionando Javascript -->
    <script>
    
    </script>
    </head>

    <body>
        <div class="uk-container">



            <h1 class="titulo">Lista de Produtos</h1>


            <div class="uk-child-width-1-2" style="text-align: center;" uk-grid>

            


    <div>
        <img style="border-radius: 10px; border-width: 2px; border: solid; padding: 5px; border-color: lightgray;" data-src="img/coleira.jpg" width="50%" height="" alt="" uk-img>
        <h2>Coleira </h2>
        <a class="btnComp" href='formulario.php?produto=1' class="uk-button uk-button-default">Comprar</a> 
     </div> 

     <div>
         <img data-src="img/brinquedo.png" width="50%" height="" alt="" uk-img>
        <h2>Brinquedo </h2>
        <a class="btnComp" href='formulario.php?produto=2' class="uk-button uk-button-default" >Comprar</a> 
     </div> 

     <div>
        <img data-src="img/racao.jpg" width="50%" height="" alt="" uk-img>
        <h2>Ração </h2>
        <a class="btnComp" href='formulario.php?produto=3' class="uk-button uk-button-default" style="border-radius: 10px;">Comprar</a> 
     </div> 

    <div>
        <img data-src="img/pote.jpg" width="50%" height="" alt="" uk-img>
        <h2>Pote </h2>
        <a class="btnComp" href='formulario.php?produto=4' class="uk-button uk-button-default" style="border-radius: 10px;">Comprar</a> 
     </div> 

</div>
 </div>
 <br><br>
    </body>

    </html>