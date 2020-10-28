<!DOCTYPE html>
<html lang="es">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">    
    <script src="consulta.js" type="text/javascript"></script>
    <title>Sistema de Busqueda</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo-find-container">                
                <div class="profile">                    
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <section>
            <div class="container">
                <div class="flex-box">
                    <div class="flex-half-column distance">
                        <article>
                            <h2>INFORMACION GENERAL DEL SISTEMA</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates consectetur omnis, nam suscipit vero, nostrum asperiores velit cum veniam soluta repellat necessitatibus a atque et rerum expedita error ipsam eligendi quod culpa, dolores vel. Accusantium at minima itaque id et maxime necessitatibus vero iure ipsum unde a corporis, dolor nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam suscipit fugit illum culpa quae reiciendis numquam iste animi optio velit non tempore modi, labore doloribus ipsa. Neque suscipit alias est? Adipisci beatae architecto fugiat esse recusandae ipsum, aliquam quod nesciunt quis cupiditate accusamus est minus in, consequatur, qui asperiores quia.</p>
                            <div class="flex-button">
                                <button class="btn button">CONTACTANOS</button>
                                <button class="btn button">ASOCIADOS</button>
                            </div>
                        </article>
                    </div>
                    <div class="flex-half-column distance">
                        
                    </div>
                    <aside></aside>
                    <aside></aside>
                </div>
            </div>            
        </section>
        <section>
            <h3>Busqueda por Fabricante</h3>
                <form id="Formulario01" onsubmit="return buscarPorFabricante()" style="display: inline;">
                    <input type="text" id="fabricante" name="fabricante" value="">
                    <button type="submit" id="buscar" name="buscar" value="buscar" >Buscar</button>                    
                </form>
                <button id="anterior" name="anterior" onClick="anterior()"><</button>
                <button id="posterior" name="posterior" onClick="posterior()">></button>                
            <div id="informacion"><b>Datos de la Busqueda</b></div>            
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="flex-box">
                <div class="flex-3-column contact">
                    <i class="fab fa-facebook-square icon-footer"></i>
                    <i class="fab fa-instagram icon-footer"></i><br>                    
                    <span>Jorge Martin Bojorque <br> &#8226; U.P.S.</span><br>
                    &#8226; <a href="mailto:jbojorque@est.ups.edu.ec">fcordovaa@est.ups.edu.ec</a><br>
                    &#8226; <a href="tel:0123456798">0123456798</a><br>
                    &copy; <span> Todos los derechos reservados </span>
                </div>
                <div class="flex-3-column">
                    <h4>LINK BLOCK</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                    </ul>
                </div>
                <div class="flex-3-column">
                    <h4>LINK BLOCK</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit.</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>