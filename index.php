<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h3>Ejercicio 1: Mostrar sólo los índices (usando el while) del ejer anterior.</h3>
        <?php
        $arr = array("Mamifero" => "Ballena", "Insecto" => "Hormiga");
        reset($arr);
        while ($indice = each($arr)) {
            echo $indice["key"];
            echo "<br/>";
        }

        echo "<h3>Ejercicio 2</h3>";
        echo "Con while";
        echo "<br/>";
        $array = array("Mamifero" => "Ballena", "Insecto" => "Hormiga");
        reset($array);
        while (list($clave, $valor) = each($array)) {
            echo "Índice: $clave Valor: $valor<br />";
        }
        echo "<br/>";
        echo "Con foreach";
        echo "<br/>";
        foreach ($array as $clave => $valor) {
            echo "Índice: $clave Valor: $valor<br />";
        }

        echo "<h3>Ejercicio 3.</h3>";
        echo "Array mediante variables";
        $productos = array("1" => "MESA", "2" => "SILLA", "3" => "FLEXO", "4" => "ESTANTERIA");
       
        echo "<br />";
        echo $productos[1] . "<br />";
        echo $productos[2] . "<br />";
        echo $productos[3] . "<br />";
        echo $productos[4] . "<br />";
        echo "<br />";
        echo "Array mediante bucle while";
        echo "<br />";
        echo "<br />";
        
        reset($productos);
        while (list($indice, $valor) = each($productos))
            echo "Indice: $indice; <br/> Valor: $valor<br/>";
        echo "Array mediante bucle foreach";
        echo "<br />";
        echo "<br />";
       
        foreach ($productos as $indice => $valor)
            echo "Indice: $indice; <br/> Valor: $valor<br/>";
        echo "<br />";
        echo "<br />";
        
        echo "<h3>Ejercicio 4</h3>";
        $nombreYedad = array("Jose Antonio" => 55, "Josefa Maria" => 51, "Ana" => 27, "Jose Mari" => 23, "Antonio" => 20);
        print_r(array_keys($nombreYedad)); //Extrae los índices de las arrays
        echo "<br/>";
        echo "<br/>";
        print_r(array_values($nombreYedad)); //Extrae los valores de las arrays
        echo "<br/>";
        echo "<br/>";
        if (in_array(55, $nombreYedad)) {//busca en la array el valor que le has pasado
            echo "Valor de la array encontrado";
        } else {
            echo "Valor no encontrado";
        }
        echo "<br/>";
        echo "<br/>";
        //Crea una array con el rango que tu le especifiques
        $rango = range(0, 10);
        print_r($rango);
        echo "<br/>";
        echo "<br/>";
        //array_reverse: invierte la array
        print_r(array_reverse($nombreYedad));
        
        echo "<br/>";
        echo "<br/>";
        //shuffle: Extrae la array de manera aleatoria
        shuffle($nombreYedad);
        print_r($nombreYedad);
        echo "<br/>";
        echo "<br/>";
        
        //array_merge: mezcla dos arrays en una
        $mezclaUno = array("Valencia", "Barcelona", "Madrid", "Sevilla");
        $mezclaDos = array("Coruña", "Cadiz", "Mallorca", "Pamplona");
        print_r(array_merge($mezclaUno, $mezclaDos));
        echo "<br/>";
        echo "<br/>";
        
        echo "<h3>Ejercicio 5</h3>";
        //array_pop: elimina el último elemento de una array
        array_pop($nombreYedad);
        print_r($nombreYedad);
        echo "<br/>";
        echo "<br/>";
        
        //Inserta más elementos al final de la array.
        array_push($mezclaUno, "Toledo", "Albacete");
        print_r($mezclaUno);
        echo "<br/>";
        echo "<br/>";
        
         echo "<h3>Ejercicio 6</h3>";
        //array_shift: elimina el primer elemento de la array
        echo $mezclaDos;
        array_shift($mezclaDos);
        print_r($mezclaDos);
        
        echo "<br/>";
        echo "<br/>";
        //array_unshift: añade un elemento al principio de la array
        echo $mezclaDos;
        array_unshift($mezclaDos, "Mississipi");
        print_r($mezclaDos);
        ?>
    </body>
</html>
