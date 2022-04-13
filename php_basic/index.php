<?php

// Statements

// echo 'Hello World!!!';

// print('Hello World!!!');


// Variables

/* $name = "Mahbubur Rahman";
$my_address = "Mirpur-11";
echo $name . '<br>';
echo $my_address;
 */


// Data Types

/* $name = "Mahbubur Rahman"; // String
$age = 35;  // Tnteger
$height = 5.8; // Float
$check = true; // Boolean
$null_data = null; // Null
 */



/* echo "$name <br> ";
echo "$age <br> ";
echo "$height <br> ";
echo "$check <br> ";
echo "$null_data <br> ";
 */
/* var_dump ($name);
var_dump ($age);
var_dump ($height);
var_dump ($check);
var_dump ($null_data);
 */



// if , else, elseif

/* $x = 51;
if ($x < 50) {
    echo "It's true";
}  elseif($x > 50) {

    echo "It's true inside elseif";

} else { 
    echo "It's true";

}
 */



 /* if ($x < 40) : 
    elseif():
    echo "It's true inside elseif";
    else:
        echo "It's true";
    endif;
 */



    // Functions

    function my_function () {

      echo "This is my php function";
    }

      // my_function();

     function my_function_return() {

     return "This is my php function in return";
    }

      // echo my_function_return();



    /* @param $param1 Name
       @param $param1 Age
    */

     function function_with_params($param1, $param2 = null) {

     echo $param1 . ' ' . $param2; // . ' ' . for space

   }

    // function_with_params('Mahbubur Rahman', 45); // call the function with 2 Args



  // Arrays 2 types
  // 1. Index array
  $info = array('Mahbubur Rahman', 35, 'Bangladesh');
  /*echo "<pre>";
  print_r($info);
  echo "</pre>";

  echo $info[1]. '<br>';
  echo $info[2]; */
  //var_dump ($info);


  // 2.Associative Array

    $car = array (
      'name' => 'Corolla',
      'color'=> 'Silver',
      'price'=> 10000,
  );

  /* var_dump( $car);
  echo  $car['name'] . '<br>';
  echo  $car['color'] . '<br>';
  echo  $car['price'] . '<br>'; 

 */

  // Loops

   /* foreach( $info as $item ) {
      echo $item . '<br>';
  } */
 

   /* foreach($car as $key => $item) {
    echo $key . ': ' . $item . '<br>';
  } 
 */
    $x = 0;
    while( $x < count ($info)) {

    echo $info[$x] . '<br>';
    $x++;
}
  















