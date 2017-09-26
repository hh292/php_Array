<?php

  $obj = new main();
  $in_array_1 = array("a" => "green", "red", "b" => "green", "blue", "red");

  $obj->print_1($in_array_1);
  

  class main {

    public function __construct() {


      echo '<h1>********PHP Inbuilt Array Functions ******** </h1>';

    }
   
    //function 1 : array_unique ...hh292
    
    public function print_1($in_array_1) {
      
      
      echo '</br><h2> Function Name : array_unique </h2>'."\r";
      echo 'Description: Removes duplicate values from an array</br>'."\r"; 
      print_r('Input ----> '); 
      print_r($in_array_1);
      echo '</br>';
      $domain = array_unique($in_array_1);
      print_r('Output ----> ');
      print_r($domain);
      
      }
   
    public function __destruct() {

     echo '</br> <h3>Finally I\'m Done with string functions. </h3> </br>';
     echo '</br> ********************Copyright Assignment @Himanshu Hunge (hh292)***************************';
  
   } 
}
