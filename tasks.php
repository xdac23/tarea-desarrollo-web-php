<?php 

$controlVisibility = "";
$functionsVisibility = "display:none;";
$arraysVisibility = "display:none;";
$stringsVisibility = "display:none;";

if(isset($_POST['functions'])){
    $controlVisibility = "display:none;";
    $functionsVisibility = "";
    $arraysVisibility = "display:none;";
    $stringsVisibility = "display:none;";   
}
else if (isset($_POST['arrays'])){
    $controlVisibility = "display:none;";
    $functionsVisibility = "display:none;";
    $arraysVisibility = "";
    $stringsVisibility = "display:none;";   
}
else if (isset($_POST['strings'])){
    $controlVisibility = "display:none;";
    $functionsVisibility = "display:none;";
    $arraysVisibility = "display:none;";
    $stringsVisibility = "";   
}

$messageControl = "";
$messageFunction = "";
$messageArrays = "";
$messageStrings = "";

if (isset($_POST["input_control"])){
    $input_control = $_POST["input_control"];
    // Implementando if
    if ($input_control > 10){
        $messageControl = 'Por favor inserta un numero menor que 10';
    }
    else if ($input_control < 0)
        $messageControl = 'Por favor inserta un numero positivo';  
    else {    

        $switchResponse = "";
        $forResponse = 0;
        $inputMod = $input_control % 2;

        // Implementando la sentencia switch
        switch ($inputMod){
            case 0:
                $switchResponse = "es un numero par";
                break;
            default:
                $switchResponse = "es un numero impar";
        }

        // Implementando la sentencia for
        for ($i = 1; $i <= $input_control; $i++) {
            $forResponse += $i;
        }

        //Implementando la sentencia while    
        $upperCounter = 10;
        $tenSum = 0;
        while(true){
            if($upperCounter - $input_control == 0){
                break;
            }
        else {
                $tenSum += ($upperCounter - $input_control);
                $upperCounter--;
        }

        }

        // Implementando la sentencia do/while   
        $counter = -1;
        $upperCounter = 10;
        do {
            $tenDiff = $upperCounter - $input_control;
            $counter++;
            $upperCounter--;
        } while ($tenDiff > 0);
        
        $messageControl = <<<EOT
        <h3> Ingresaste el n??mero {$input_control} </h3>
        <h4>If, else if, else </h4>
        <p> La estructura IF est?? implementada al validar el n??mero ingresado.
        Trata de ingresar un numero mayor a 10 o menor que 0.
        <h4>Switch</h4>
        <p> Se implementa una sentencia switch para validar si el n??mero que ingresaste
        es par o impar, en este caso, {$switchResponse} </p>
        <h4> For </h4>
        <p> El ciclo for se implementa sumando los enteros del 1 hasta el n??mero ingresado.
        En este caso la suma es {$forResponse}. </p>
        <h4> While </h4>
        <p> Se emplea un while para sumar los n??meros desde el n??mero ingresado hasta el 10.
        En este caso la suma es {$tenSum}</p>
        <h4> Do/ While </h4>
        <p> Se emplea un do while para contar el numero de enteros desde n??mero ingresado hasta
        el n??mero 10, en este caso hay {$counter}</p>
        <h4> foreach </h4>
        <p> V??ase el apartado Array</p>
        EOT;
    };  
}


if (isset($_POST["input_function"])){

    $controlVisibility = "display:none;";
    $functionsVisibility = "";
    $arraysVisibility = "display:none;";
    $stringsVisibility = "display:none;";


    $inputFunction = $_POST["input_function"];    

    if ($inputFunction > 10 || $inputFunction < 0) {
        $inputFunction = 10;
    }

    $calculatedFactorial = factorial($inputFunction);

    $messageFunction = <<<EOT
        <h3> Ingresaste el n??mero {$inputFunction} </h3>
        <h4>Ejemplo de funci??n</h4>
        <p>PHP permite recursividad dentro de su declaraci??n de funciones,
        por lo que aqu?? se implementa una de las funciones recursivas m??s simples: la funci??n factorial.
        De esta manera, el factorial del n??mero ingresado es: {$calculatedFactorial}</p>
        Nota: Si se introdujo un n??mero mayor que 10 o negativo, se asignar?? autom??ticamente el n??mero 10.    
        EOT;
}

if (isset($_POST["input_arrays"])){

    $controlVisibility = "display:none;";
    $functionsVisibility = "display:none;";
    $arraysVisibility = "";
    $stringsVisibility = "display:none;";

    $inputArrays = $_POST["input_arrays"];  
    
    if ($inputArrays > 10 || $inputArrays < 0) {
        $inputArrays = 10;
    }
    
    // Crea el array
    $myArray = array();
    for ($i = 0; $i < $inputArrays; $i++){
        $myArray[$i] = "El valor es {$i}";
    }

    // Itera sobre el array y sus valores
    $stringValues = "";
    foreach ($myArray as $k => $v) {
        $stringValues .=  "\$myArray[$k] => $v"."<br>";
    }


    $messageArrays = <<<EOT
        <h3> Ingresaste el n??mero {$inputArrays} </h3>
        <h4>Ejemplo de arreglo</h4>
        <p>Este fragmento de c??digo crea un arreglo del tama??o del n??mero ingresado, los ??ndices comienzan desde 0 hasta el n??mero ingresado y las llaves consisten
        en una cadena de caracteres concatenada a su propio ??ndice. Se emplea tambien un ciclo foreach para imprimir cada valor con su respectiva llave: <br> {$stringValues}</p>
        Nota: Si se introdujo un n??mero mayor que 10 o negativo, se asignar?? autom??ticamente el n??mero 10.    
        EOT;
}

if (isset($_POST["input_strings"])){

    $controlVisibility = "display:none;";
    $functionsVisibility = "display:none;";
    $arraysVisibility = "display:none;";
    $stringsVisibility = "";

    $inputStrings = $_POST["input_strings"];  

    $substring = substr_count($inputStrings, "a");

    $replaceString = str_replace("e", "PHP", $inputStrings);

    $lenString = strlen($inputStrings);
    
    // $stringRepeat = $str_repeat("hola", 3);   

    $messageStrings = <<<EOT
        <h3> Ingresaste la cadena "{$inputStrings}" </h3>
        <h4>Utilizaci??n de funciones de cadenas</h4>
        <p>PHP cuenta con una gran cantidad de funciones integradas que permiten manipular las cadenas de caracteres. 
        A continuaci??n se muestran los resultados de la aplicaci??n de algunas de estas funciones: <br><br>

        1. Empleando la funci??n substr_repeat() para encontrar cuantas veces contiene la letra "a" la cadena ingresada: <br>
        substr_repeat("myString", "a") = {$substring} <br><br>

        2. Empleando la funcion str_replace() para reemplazar las letras "e" por la palabra "PHP": <br>
        str_replace("e","PHP","myString") = {$replaceString} <br><br>

        3. Empleando la funcion lenString() para obtener la cantidad de caracteres de la cadena: <br>
        strlen("myString") = {$lenString} <br><br>

        </p>
        EOT;
}

  //Se implementa una funcion recursiva
  function factorial($number) {
    // Caso base
    if ( $number == 0 ) {            
        return 1;
    }
    // Recursion        
    $result = ( $number * factorial( $number-1 ) );    
    return $result;
    }

?>