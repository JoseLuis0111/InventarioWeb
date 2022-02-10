<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header('Location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Inventario</title>
        <link rel="shortcut icon" href="img/Logo.png">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/Estilos.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/menu.css">
    </head>

    <body>
            <header>
                    <div class="logo"><a href="index.php"><img src="img/Logo.png" width="40px" height="40px"></a></div>
                    <div class="header"> 
                        <nav class="Titulo">
                            <ul>Inventario tienda</ul>
                        </nav>

                        <nav class="menu-btn">
                          <label id="icono-menu" class="fas fa-bars"></label>
                        </nav>

                        <nav>
                          <ul id="menu" class="menu ocultar-menu">
                            <li><a href="home.php">Inicio</a></li>
                            <li><a href="logout.php">Cerrar sesión</a></li>
                          </ul>
                        </nav>
                
                    </div>
            </header>         

            <div id="contenido" class="contenido">

                    <br><br><br>
                    <h1>Venta</h1>
                    <br><br>

                    <div class="div-venta">
                    
                      <div class="lista-pts">
                        <h2>Productos:</h2>
                        
                        <div class="Div-datos-lista">
                          <span>Nombre</span>
                          <span>Cantidad</span>
                          <span>Precio</span>
                        </div>

                        <!------------------------------------------------------------------------->
                        
                        <div id="divProductsList" class="divProductsList">

                          <div class="Div-productos-lista">
                            <span>Manzanas</span>
                            <span>1</span>
                            <span>$40</span>
                            <span><a href="#" onclick = "hola()">Quitar</a></span>
                          </div>

                          <div class="Div-productos-lista">
                            <span>Kilo azúcar</span>
                            <span>1</span>
                            <span>$29</span>
                            <span><a href="#" onclick = "hola()">Quitar</a></span>
                          </div>

                        </div>

                        <!------------------------------------------------------------------------->
                        
                      </div>

                      <div class="venta-opts">

                        <form action="" method="post">
                          <label for="search-in">Buscar producto:</label><br>					  
                          <input type="search" name="search-in" id="productName" placeholder="Nombre del producto..." autofocus class="venta-in" required list="listElementsSearch">
                          <datalist id="listElementsSearch"></datalist>
						              <button type="button" name="search-btn" id="search-btn" onclick = "searchProduct()" class="search-btn">Buscar</button>	

                          <script>
                          
                              function searchProduct() {

                                  var productNameSrch = document.getElementById("productName").value;

                                  if(productNameSrch == ""){
                              	    alert("Ingrese el nombre del producto a buscar");
                                    return;
                                  }

                                  const xhttp = new XMLHttpRequest();

                                  xhttp.onload = function() {
                                    document.getElementById("listElementsSearch").innerHTML = this.responseText;
                                    document.getElementById("searchResults").innerHTML = this.responseText;
                                    //console.log(this.responseText);
                                  }

                                  xhttp.open("GET", "searchElements.php?productName="+productNameSrch);
                                  xhttp.send();
                              }
                            
                          </script>

                        </form>

                        <div id="searchResultsDiv" class="searchResultsHide">
                          
                            <div class="searchResultDivClose">
                              <button type="button" name="closeResultsBtn" class="close-results-btn" id="closeResultsBtn">x</button>
                            </div>

                            <div id="searchResults"></div>
                        
                        </div>

                        <!--------------------------------------------------------------------------------------------->

                        <script>
                          
                              function showProduct(id) {

                                  const xhttp2 = new XMLHttpRequest();

                                  xhttp2.onload = function() {
                                    document.getElementById("divProductHint").innerHTML = this.responseText;
                                  }

                                  xhttp2.open("GET", "showProduct.php?idProd="+id);
                                  xhttp2.send();
                              }
                            
                        </script>

					          
					              <div id="divProductHint" class="producto-venta" >
                            
                          <h4>Producto:</h4>					  
                          <img src="/InventarioWeb/ImagenesProductos/default.png" alt="Imagen producto" class="img-product">
                          <form action="#" method="post">
                            <label for="units">Unidades:</label>
                            <input type="number" name="units" id="units" min="1" required class="unidades"><br>
                            <input type="button" name="search-btn" value="Agregar" class="search-btn">
                          </form>
                        </div>

                        <!--------------------------------------------------------------------------------------------->

                        <script>
                        
                          //var listObjts = new Array(Product);
                          var list = new Array();
                          var listObjts = new Array();
                          var total = 0;

                          function addProductToList(id,nombre,precio){

                           var unitsToAdd = document.getElementById('units').value;

                           total += precio*unitsToAdd;

                           //alert("ID: "+ id + "\nNombre: " + nombre + "\nUnidades: " + unitsToAdd + "\nTotal: " + total);

                           listObjts.push( new Product(id, nombre, unitsToAdd, total) );

                           console.log(listObjts);

                           var venta = nombre +" "+ unitsToAdd +" $"+ total;

                           list.push(venta);

                           //list.push(nombre);

                           /*

                           list = [
                              {nombre = "manzanas", cantidad = 5, total = 70}, 
                              {nombre = "aguacates", cantidad = 2, total = 80},
                              {nombre = "papas", cantidad = 1, total = 50}
                           ];*/

                           document.getElementById("divProductsList").innerHTML = list;
                           document.getElementById("total-venta").innerHTML = '$' + total;

                  
                           const xhttp3 = new XMLHttpRequest();

                                   xhttp3.onload = function() {
                                     document.getElementById("divProductsList").innerHTML = this.responseText;
                                   }

                                   //xhttp3.open("GET", "addProductToList.php?idProd="+id&name=nombre&units=unitsToAdd&Total=total);
                                   //xhttp3.send();
                          }

                          function confirm(){
                            lst = JSON.stringify(listObjts);
                            window.location.href="confirmSale.php?list="+lst;
                          }

                        </script>

                        <!--------------------------------------------------------------------------------------------->
              
                        <form action="#" method="post">
                          <label for="total">Total:</label><br>
                          <span id="total-venta" class="total-venta">$...</span> 
                          <input type="button" name="confirm-btn" value="Confirmar venta" class="confirmVenta-btn" onclick="confirm()" >
                        </form>

                        <!--------------------------------------------------------------------------------------------->

              

                      </div>


                    </div>

             
                    <br><br>
                    <br><br><br><br> 
                    
            </div>

            <footer class="footer">Abarrotes Polito</footer>
            <script src="js/scripts.js"></script>
            <script src="js/Venta.js"></script>
    </body>
</html>