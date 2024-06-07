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
    echo "La resta de $numero1resta y $numero2resta es: $resta\n";

?>
