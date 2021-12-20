<!-- Vista común a la mayoría (sino todas) las vistas de la aplicación
     Suele contener la imagen corporativa de la apliación Web
     Concretamente esta página contiene el nombre de la empresa
     "Cadena Tiendas Media" y una barra de hiperenlaces con un enalace a la
     página home, llamado "inicio"
     El nombre del archivo es indiferente: layout, comun, etc.
-->
<!DOCTYPE html>
<html>
  <head>
    <title>PizzaNet</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
      h1 {
        font-family: Arial, Helvetica, sans-serif;
      }
    
    
      body{width: 80%; margin: 0 auto; background-color:navajowhite;}
      details, h1, h2 {text-align: center;}
      .error {color: red;}
      .desplegable { position: relative; display: inline-block;}
      .contenido-desplegable {
        display: none; 
        position: absolute;
        background-color: #f1f1f1;
        min-width: 115px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      .contenido-desplegable a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      .contenido-desplegable a:hover {background-color: #ddd;}
      .desplegable:hover .contenido-desplegable {display: block;}
      nav a { text-decoration: none; color: black;}


    </style>
  </head>
  <body>
    <header>
      <h1>PizzaNet</h1>
    </header>
    <nav>
      <hr>
      <!-- Observa cómo el enlace agrega el valor de la variable GET 'ctl'
           que será analizado en la página index.php, en este caso le da el
           valor 'inicio' para que la vista cambie a la página home de la
           aplicación
       -->
      <a href="index.php?ctl=inicio">Inicio</a> |
      <!-- En general, la mayoría de los enlaces serán a la página index.php
           y una asignación a la variable 'ctl'. El valor de la variable deberá
           ser analizada en la página index.php de cara a encontrar la ruta del
           controlador (y método) que debe procesar la petición
      -->
      <?php if(isset($_SESSION['ses']) && $_SESSION['rol'] === 'admin') : ?>
        <a href="#">Gestión Empleados</a> |
        <div class="desplegable">
          <a>Gestión Pizzas &#8711</a>
          <div class="contenido-desplegable">
            <a href="index.php?ctl=pizzas">Añadir pizza</a>
            <a href="#">Editar pizza</a>
            <a href="#">Borrar pizza</a>
          </div>
        </div> |
      <?php endif; ?>
      <?php if(!isset($_SESSION['ses'])) : ?>
        <a href="index.php?ctl=iniSesion">Iniciar sesión</a>
      <?php else : ?>
        <a href="index.php?ctl=salSesion" style="float: right;">Cerrar sesión</a>
      <?php endif; ?>
      <hr>
    </nav>
    <main id="contenido">
      <!-- el id css facilita (si se define) la definición del aspecto visual
           de su contenido
           La variable $contenido hará que se muestre la plantilla concreta, el
           contenido concreto, según la solicitud realizada por el usuario
      -->
      <?= $contenido ?>
    </main>
    <footer>
      <hr>
      <p>- Gracias por su visita -</p>
    </footer>
  </body>
</html>
