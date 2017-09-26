<?php

  $obj = new main();
  $in_array_1 = array("a" => "green", "red", "b" => "green", "blue", "red");
  $in_array_2 = array(
    array(
        'id' => hh292,
        'fst_nm' => 'Himanshu',
        'last_name' => 'Hunge',
    ),
    array(
        'id' => vkr9,
        'fst_nm' => 'Vedant',
        'lst_nm' => 'Rahane',
    ),
    array(
        'id' => Ak209,
        'fst_nm' => 'Ashok',
        'lst_nm' => 'Kulkarni',
    ),
  );
  $in_array_3 = array(6, "A", 6, "A", "C", "D", "D");
  $in_array_4 = array(2, 4, 6, 8);
  $in_array_5 = array("Name" => "Himanshu", "Height" => "181 cm", "UCID" => "hh292");
  $obj->print_1($in_array_1);
  $obj->print_2($in_array_2);
  $obj->print_3($in_array_3);
  $obj->print_4($in_array_4);
  $obj->print_5($in_array_5);
  

  class main {

    public function __construct() {


      echo '<h1>********PHP Inbuilt Array Functions********** </h1>';

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
      
      // function 2 : array_column ...hh292
   
    public function print_2($in_array_2)
    {
      echo'<hr>'; 
      echo '<h2> Function Name : array_column </h2>'."\r";
      echo 'Description: Return the values from a single column in the input array </br>'."\r";
      echo 'Input ---> ';
      print_r($in_array_2); 
      
     
      $domain = array_column($in_array_2, id);
      echo '</br>';
      echo 'Output ---> ';      
      print_r($domain);
      
    }
    
    // function 3 : array_count_values  ...hh292

    public function print_3($in_array_3)
    {
     echo'<hr>';
     echo '<h2> Function Name : array_count_values </h2>'."\r";
     echo 'Description: Counts all the values of an array </br>';
     echo 'Input --->';
     print_r($in_array_3);

     $domain = array_count_values($in_array_3);
     echo '</br>Output --->';
     print_r($domain);
    }
    
    // function 4 : array_sum ...hh292

    public function print_4($in_array_4)
    {
        echo '<hr>';
        echo '<h2> Function Name : array_sum </h2></br>'; 
        echo 'Description: Calculate the sum of values in an array </br>';    
        echo 'Input ---->'; 
        print_r($in_array_4);

      $domain = array_sum($in_array_4);
      echo "</br>Output --->";
      print_r($domain);
    } 
    
    // function 5 : array_values  ...hh292

    public function print_5($in_array_5)
    {
        echo'<hr>';
        echo'<h2> Function Name : array_values </h2></br>'; 
        echo'Description: Return all the values of an array </br>'; 
        echo 'Input ---->';
        print_r($in_array_5);
        $domain = array_values($in_array_5);
        echo '</br>Output --->';
        print_r($domain); 
    }

   
     public function __destruct() {

     echo '</br> <h3>Finally I\'m Done with string functions. </h3> </br>';
     echo '</br> ***********************Copyright Assignment @Himanshu Hunge (hh292)***************************';
  
   } 
}
