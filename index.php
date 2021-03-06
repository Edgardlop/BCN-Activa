<!DOCTYPE html>
<html>
    <head>
        <title>
            TASCA 2
        </title>

         <!-- Script para  normalizar todos los navegadores-->
         <link rel="stylesheet" href="cssnormalize.css">

         <!-- Script para conectarse  con las fuente de Fontawesome.com -->
         <script src="https://kit.fontawesome.com/a36398b19e.js" crossorigin="anonymous"></script>
         
         <!-- link para hoja de estilos -->
         <link rel="stylesheet"  href="css/styles.css">

    </head>
    <body>


    
        <!-- El header cuenta con una imagen con el logo, 3 iconos con link de redes sociales
        y 1 imagen de fondo -->
        <header class="cabecera">
        
              <?php include 'php/header.php';?>


              <div class="contenido-cabecera">

                        <img src="img/logoed.svg" width= 80px aling="left">         
                        <!-- enlaces a redes-->
                            <align="right">
                            <i class="fab fa-facebook-square"></i>
                            <i class="fab fa-twitter-square"></i>
                            <i class="fas fa-envelope-square"></i>
                            </align>
                    </div>

        </header>

        <br>

<div class="nav-bg">
        <nav class="navegador contenedor">
            <!--  el nav cuenta con 5 link a distintas partes de la pagina o a otras paginas del mismo sitio -->
             <a href="#">Enlace 1</a>
             <a href="#">Enlace 2</a>
             <a href="#">Enlace 3</a>
             <a href="#">Enlace 4</a>
             <a href="#">Enlace 5</a>
        </nav>
    
</div>
       
       
<main class="service">
        <!-- Aqui estaran los articulos principales -->
        <div class="servicios">
                <section>
                    <h2>Part 1</h2> 
                    Per què el fem servir?
                    És un fet establert de forma evident que un lector es distraurà amb el contingut
                    llegible d'una pàgina quan miri a la seva composició. El fet de fer servir Lorem 
                    Ipsum és perquè conté una distribució més o menys normal de lletres, de forma oposada
                    a quan es fa servir "Contingut aquí, contingut aquí", aconseguint així que sembli
                    català llegible. Molts paquets d'autoedició fan servir Lorem Ipsum com el seu model de text, 
                    i una cerca per "Lorem Ipsum" descobrirà molts llocs web encara a les baceroles.
                        Diverses versions han anat evolucionant al llarg dels anys,
                    a vegades per acident, a vegades a propòsit (inserint humor i coses per l'estil).

                </section>
                <section>
                    <h2> Parte 2 </h2>
                    Per què el fem servir?
                    És un fet establert de forma evident que un lector es distraurà amb el contingut
                    llegible d'una pàgina quan miri a la seva composició. El fet de fer servir Lorem 
                    Ipsum és perquè conté una distribució més o menys normal de lletres, de forma oposada
                     a quan es fa servir "Contingut aquí, contingut aquí", aconseguint així que sembli
                      català llegible. Molts paquets d'autoedició fan servir Lorem Ipsum com el seu model de text, 
                      i una cerca per "Lorem Ipsum" descobrirà molts llocs web encara a les baceroles.
                       Diverses versions han anat evolucionant al llarg dels anys,
                    a vegades per acident, a vegades a propòsit (inserint humor i coses per l'estil).
                </section>

                <section>
                    <h2> Parte 3 </h2>
                    És un fet establert de forma evident que un lector es distraurà amb el contingut
                    llegible d'una pàgina quan miri a la seva composició. El fet de fer servir Lorem 
                    Ipsum és perquè conté una distribució més o menys normal de lletres, de forma oposada
                    a quan es fa servir "Contingut aquí, contingut aquí", aconseguint així que sembli
                    català llegible. Molts paquets d'autoedició fan servir Lorem Ipsum com el seu model de text, 
                    i una cerca per "Lorem Ipsum" descobrirà molts llocs web encara a les baceroles.
                        Diverses versions han anat evolucionant al llarg dels anys,
                    a vegades per acident, a vegades a propòsit (inserint humor i coses per l'estil).
                </section>

            </div>

        <div class="multimedia">
            <section>
               <center><h2>    Multimedia</h2>
                        <!--Aqui estara la multimmedia -->
                    <img src="img/fondo-head.jpg" alt="Terrassa">
                </center> 

            </section>
        </div>

    </main>

        <footer>
            <!--Aqui estaran los datos de la empresa y los derechos de copyright--> 

                <?php include 'php/footer.php';?>
                    
        </footer>
    </body>
</html>