<?php
  function firstLastDelete($data){
	array_shift($data); //array_shift() function removes the first element from an array, and returns the value of the removed element.
    array_pop($data); //array_pop() function deletes the last element of an array.
    return $data; // return result after delete first and last one
  }
  $numbers=array(4,6,2,22,10,15,17,19);
  echo '<pre>';
  print_r(firstLastDelete($numbers));
  echo '</pre>'
?>
