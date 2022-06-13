<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Trabajo: Desarrollo web avanzado</title>
  <link rel="stylesheet" type="text/css" href="signupform.css" />
  <?php require 'tasks.php';?>
</head>

<body>

<div class="header">   
          <h1>UNIR</h1>
          <h2>Programación en el servidor web</h2>
          <h3>Trabajo: Desarrollo web avanzado</h3>                    
</div>

<div class="rt-container">
  <div class="signup">

    <div class="signup-connect">
      <h1>Elige la funcionalidad</h1>
      <form method="post">
        <input type="submit" class="btn btn-social btn-facebook" value="Estructuras de control" name="control">    
        <input type="submit" class="btn btn-social btn-twitter" value="Funciones" name="functions">
        <input type="submit" class="btn btn-social btn-google" value="Arrays" name="arrays"> 
        <input type="submit" class="btn btn-social btn-behance" value="Funciones para Strings" name="strings">        
      </form>   
    </div>   

    <div class="signup-classic" style=<?php echo $controlVisibility; ?>>
      <h2> Estructuras de control </h2>      
      <p>Las estructuras de control permiten al programador controlar el flujo de ejecución del programa.
        Se pueden distinguir básicamente 2 tipos de estructuras de control: selectivas e iterativas.
        Las estructuras selectivas incluyen las sentencias if y switch mientras que las estructuras iterativas 
        incluyen las sentencias for, while/do while y foreach.
      </p>
      <h4>Ingresa un número entero: </h4>
      <form class="form" method="post">
        <fieldset>
          <input type="number" placeholder="Escribe un número" name="input_control"> 
        </fieldset>       
        <input type="submit" class="btn" value="Ejecutar">        
      </form>
      <?php echo $messageControl; ?>      
  </div>

  <div class="signup-classic" style=<?php echo $functionsVisibility;?>>
    <h2> Funciones </h2>
    <p> Una función es un conjunto de instrucciones que se agrupan bajo un nombre, de 
      tal forma que dicho conjunto de instrucciones puede reutilizarse en distintos puntos
      del código sin necesidad de reescribirlo.
    </p>
        <h4>Ingresa un número entero positivo: </h4>
        <form class="form" method="post">
          <fieldset>
            <input type="number" placeholder="Escribe un número entero positivo menor a 10" name="input_function"> 
          </fieldset>       
          <input type="submit" class="btn" value="Ejecutar">        
        </form>
        <?php echo $messageFunction; ?>   
  </div>

  <div class="signup-classic" style=<?php echo $arraysVisibility; ?>>
    <h2> Arrays </h2>
      <p> Los arrays dentro de PHP son extremadamente versátiles pues tiene la particularidad de aceptar índices del tipo String,
        esto permite que se comporten de cierta forma como "diccionarios".
      </p>
      <h4>Ingresa un número entero positivo: </h4>
      <form class="form" method="post">
        <fieldset>
          <input type="number" placeholder="Escribe un número entero positivo menor a 10" name="input_arrays"> 
        </fieldset>       
        <input type="submit" class="btn" value="Ejecutar">        
      </form>
        <?php echo $messageArrays; ?>   
  </div>

  <div class="signup-classic" style=<?php echo $stringsVisibility; ?>>
    <h2> Strings </h2>
      <p> Un String o cadena de caracteres en un conjunto ordenado de caracteres, siendo cada uno de estos un byte en memoria.
        Esto significa que PHP solo admite un conjunto de 256 caracteres y por lo tanto no puede ofrecer soporte nativo para Unicode.
        Una String se puede declarar con comillas simples, dobles, heredoc y recientemente con nowdoc.
      </p>
      <h4>Ingresa una palabra o frase corta: </h4>
      <form class="form" method="post">
        <fieldset>
          <input type="text" placeholder="Escribe una palabra o frase corta" name="input_strings"> 
        </fieldset>       
        <input type="submit" class="btn" value="Ejecutar">        
      </form>
        <?php echo $messageStrings; ?>   
  </div>
      
  </div>
 

</div>


	</body>

</html>