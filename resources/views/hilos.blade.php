<!DOCTYPE html>
<html>
<head>
  <title>Caja de texto con estilos sorprendentes</title>
  <style>
    /* Estilos para la caja de texto */
    .caja-texto {
      border: 1px solid #ccc;
      
      padding: 20px;
      margin: 100px;
      box-shadow: 20px 20px 10px rgba(0, 0, 0, 0.2);
      font-size: 16px;
      line-height: 1.5;
      background-color: #fff;
      
    }

    /* Estilos para el título */
    .titulo {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #333;
      text-align: center;
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
      

    }
    .nombre{
        position: relative;
        left: 400px;
        padding: 10px;
        margin: 20px;
        text-align: center;

    }
    /* Estilos para el botón */
    .nombre2{
        position: relative;
        left: 10px;
        padding: 10px;
        margin: 20px;
        text-align: center;
    }

    .boton {
      display: block;
      width: 150px;
      height: 50px;
      margin: 20px auto;
      border-radius: 25px;
      background-color: #ff8800;
      color: #fff;
      text-align: center;
      line-height: 50px;
      text-decoration: none;
      font-size: 18px;
      font-weight: bold;
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease-in-out;
    }

    /* Estilos para el botón cuando se le pasa el mouse encima */
    .boton:hover {
      background-color: #ffbb33;
      box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4);
    }

    .boton2{
      display: block;
      width: 150px;
      height: 50px;
      margin: 20px auto;
      border-radius: 25px;
      background-color: #ff8800;
      color: #fff;
      text-align: center;
      line-height: 50px;
      text-decoration: none;
      font-size: 18px;
      font-weight: bold;
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease-in-out;
    }
    nav {
  background-color: #333;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
  </style>
</head>
<body>
<nav>
  <ul>

    <li><a href="#">Menu principal</a></li>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Crear hilo</a></li>
    <li><a href="/">Logout</a></li>
  </ul>
</nav>
<form>
                <div class="caja-texto">
                
                <input type="text" name="nombre" class="nombre" placeholder="Titulo del hilo"/>
                

                <div class="titulo">
                <input type="text" name="nombre2" class="nombre2" placeholder="Contenido del hilo"/>
                </div>

                <div>
                <p class="boton2">
                    <a href="">Crear hilo</a>
                 </p>
                </div>

                <p class="boton">
                    <a href="/">Volver</a>
                 </p>
                 </div>

                </form>
  
</body>
</html>
