<?php
  #FUNCTION - Block of code that can repeatedly called
  /*
    - Camel Case - myFunction()
    - Lower Case - my_function()
    - Pascal Case - MyFunction()
  */

  // Create Simple Function
  function simpleFunction() {
    echo 'Hello World';
  }

  // Run Simple Function
  simpleFunction();
  echo '<br />';

  // Function With Param
  function sayHello($name = 'World') {
    echo 'Hello ' . $name . '<br />';
  }

  sayHello('Joe');
  sayHello('Bob');
  sayHello();

  // Return Value
  function addNumbers($num1, $num2) {
    return $num1 + $num2;
  }

  echo addNumbers(2, 3);
  echo '<br />';

  // By Reference
  $myNum = 10;

  function addFive($num) {
    $num = $num + 5;
  }

  function addTen(&$num) {
    $num = $num + 10;
  }

  addFive($myNum);
  echo 'Value: ' . $myNum . '<br />';
  addTen($myNum);
  echo 'Value ' . $myNum . '<br />';
?>
