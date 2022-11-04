<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,500;1,400&display=swap" rel="stylesheet"> 

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"  crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header class="header">

        <div class="contenedor">

                <div class="barra">
                    
                    <a class="logo" href="index.html">  <h1 class=""> Consultorio   <span>Garcia    </span>  </h1>  </a> 

                    <nav class="navegacion">
                   
                        <a class="navegacion__enlace" href="contactos.html">Productos</a>
                        <a class="navegacion__enlace" href="iniciarSesion.html">Pacientes</a>
                        <a class="navegacion__enlace" href="productos.html">Medicos</a>
                        <a class="navegacion__enlace" href="logout.php">Cerrar Sesion</a>
                    </nav>
                </div>
        </div>
    </header>




<div class="contenedor wow animate__animated animate__fadeInLeft">
<main>
    <h2  class="titulo--contactos  centrar-texto  ">Bievenido</h2>
   


<br>
<br><br><br><br><br><br><br>
<br><br>






</main>
</div>



<footer class="footer">
   
     
    <div class="footer__contacto">
        <h3> Contacto</h3>
        <p> 
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="30" height="auto" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            </svg> 
        919-1111-99 </p>
        
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="30" height="36" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
              </svg>
        consultorioGarcia</p>
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="36" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="3" y="5" width="18" height="14" rx="2" />
                <polyline points="3 7 12 13 21 7" />
              </svg>
        consultorioGarcia@gmail.com</p>
    </div>
    <div class="footer__direccion">
        <h3>Direccion</h3>
        <p>Rayon, Chiapas</p>
        <p>C. Doctor Manuel Gamio</p>
        <p>CP: 29740</p>
    </div>
    <div class="footer__servicios">
        <h3>Servicios</h3>
        <p>Consultas</p>
        <p>Asesorias</p>
        <p>Venta de farmacias</p>
    </div>
    <div class="footer__parrafo">
        <p>  ®Todos los derechos reservados   </p>
    </div>         

</div>



</footer>





<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>

</body>
</html>