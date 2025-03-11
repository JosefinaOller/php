<?php
    echo "Hola, PHP \t";

    //Variables

    $my_string = "Esto es una cadena";
    echo $my_string. "\n";
    echo gettype($my_string);

    const MY_CONSTANT = "Valor de la constante";

    $my_int = 10;
    $my_double =6.5;
    $my_bool = true;


    $my_array = [$my_string, $my_int, $my_double];

    //Diccionario 

    $my_dict = array("string" => $my_string, "int" => $my_int, "bool" => $my_bool);

    print_r($my_dict);

    array_push($my_array, "Brais");
    array_push($my_array, "Brais");

    print_r($my_array);
    print_r(array_unique($my_array));

   /*for( $i = 0; $i <= 10 ; $i++ ) {
    echo $i . "\n";
   }*/
   echo "\n Lista recorrida por forEach \n";
   foreach( $my_array as $my_item ) {
    echo $my_item . "\n";
   }
   echo "\n Lista recorrida por while \n";
   $index = 0;
   while($index < sizeof($my_array)) {
    echo $my_array[$index] . "\n";
    $index++;
   }

   //Funciones

   function print_number (int $my_number){
    echo $my_number . "\n";
   }

   print_number(5);
   print_number(10.2);
   print_number(50);
   print_number(100);

   class MyClass {
    public $name;
    public $age;

    function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    
         }

    }

    $my_class = new MyClass("Brais", 27);
    print_r($my_class);
    echo $my_class->name;
    $my_class->name = "Chabi";
    print_r($my_class);