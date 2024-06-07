<?php
    echo "Hola, mundo \n ";

    function solicitarNumero($mensaje) {
        echo $mensaje;
        $handle = fopen("php://stdin", "r");
        $numero = trim(fgets($handle));
        if (!is_numeric($numero)) {
            echo "Por favor, introduce un número válido.\n";
            return solicitarNumero($mensaje);
        }
        return $numero;
    }

    // Solicitar el primer número
    $numero1 = solicitarNumero("Introduce el primer número: ");

    // Solicitar el segundo número
    $numero2 = solicitarNumero("Introduce el segundo número: ");

    // Realizar la suma
    $suma = $numero1 + $numero2;

    // Mostrar el resultado
    echo "La suma de $numero1 y $numero2 es: $suma\n";

    echo "Ahora la resta\n";

    // Solicitar el primer número
    $numero1resta = solicitarNumero("Introduce el primer número: ");

    // Solicitar el segundo número
    $numero2resta = solicitarNumero("Introduce el segundo número: ");

     // Realizar la resta
   $resta = $numero1resta - $numero2resta;

    // Mostrar el resultado
    echo "La resta de $numero1resta y $numero2resta es: $resta\n";

    echo "Ahora la multiplicacion\n";

    // Solicitar el primer número
    $numero1multi = solicitarNumero("Introduce el primer número: ");

    // Solicitar el segundo número
    $numero2multi = solicitarNumero("Introduce el segundo número: ");

    // Realizar la multiplicacion
    $multi = $numero1multi * $numero2multi;

    // Mostrar el resultado
    echo "La multiplicacion de $numero1multi y $numero2multi es: $multi\n";
    
    echo "La division es:\n";

     // Solicitar el primer número
     $numero1devi = solicitarNumero("Introduce el primer número: ");

     // Solicitar el segundo número
     $numero2devi = solicitarNumero("Introduce el segundo número: ");
 
     // Realizar la division 
     $division = $numero1devi / $numero2devi;
 
     // Mostrar el resultado
     echo "La division de $numero1devi y $numero2devi es: $division\n";
?>
