<?php
//  $a = "programm.iz";
  echo $a;

   $c = 23431234;
   echo $c;

   const PI = 3.14;
   echo defined("PI");


   defined("PIC", 2.14);
    // echo defined("PIC");*

 //  //Arifmetik ammallar +, -, *, /, %, ., ++, --, =, += -=, *=, /=, %=, .=



   $a = 5;
   $b = 10;
   echo $a + $b;

   echo $b % $a;

   echo $b * $a;

   $a .= $b;
   echo $a;



   //streln //strcmp //strpos

   echo strlen("progrmmm.uz");

   echo strcmp("welcome to", "welcome");

   echo strpos("welcom=to", "=");


  // strtolower //strtoupper

   echo strtolower("PROGGRAM");

   echo strtoupper("poijhgfdsd");



   // trim //explode  //implode


   $a = "B1234567";
   echo trim($a, "B");


   $key = "hello my favoriti country";
   print_r(explode(",", $key));


   $var = array("Hello", "Apple", "Microsoft");
   print_r($var);

   echo implode(" ", $var);


   ///bool

   // 
   
   //shart operatori if



   // // takrorlash operatori lopp

   for ($a=0; $a < 10 ; $a++) { 
         echo $a . "<br/>";
   }

   //  // takrorlash operatori while

    $i = 0;
    while ($i <= 10) {
       echo $i . "<br/>";
       $i++;
    }


   // //  // takrorlash operatori do while
   $a = 0;
   do {
      echo $a . "<br/>";
      $a++;
   } while ($a >= 10);


      // //MATMEMATIK FUNKSIYALAR
         echo abs(-5);
        //  echo ceil(1.3);
        //  echo floor(2.8);
        //  echo pow(2, 7);
        //  echo sqrt(81);
        //  echo min(2, 5, 7),
        // //  echo rand(0, 100);
        //  echo round(3.14);
        //  echo sin(90);
        //  echo cos(90);
        //  echo tan(90);
        //  echo log(3, 20);
      

      // matematik uzgarmaslar, M_PI, M_E, M_LN2


      // //ARRAY
      $car = array(2, "nexia", 4, "malibu");
      print_r($car);

      pop, push, shift, unshift

      $letter = array('r', 'b', 'g', 'y');

      print_r($letter);
      array_pop($letter);
      print_r($letter);



      $color = array('r' => "red", 'b' => "blue", 'g' => "green", 'y' => yellow);

      if(in_array("black", $color)){
           echo "found";
        }
        else{
           echo "not found";
        }

        echo array_search(yellow, $color);

        sort($color);
        print_r($color);
        
        shuffle($color);

        print_r($color);



      //array_fill, array_merge, array_intersect, array_diff, array_slice,range


      $nummer = array_fill(5, 50, "y");

      // print_r($nummer)
      $color1 = ["red", " green", "yellow"];

      $color1 = ["white", " blue", "pink"];

      $colors = array_merge($color1, $colors);

      print_r($colors);


      //array_sum, array_product, array_unique


      $nummer = [1, 2, 3, 4];
      echo array_sum($nummer);
      echo array_product($nummer);



      $color = ["red", "green", "yellow", "blue"];

      print_r($color);
      foreach ($color as $key => $value) {
         echo $color . "<br/>";
      }





      // FUNCTION



      function test(){
         echo "Hello world";
      }
      test()



      // switch case tanlash operatori


      $key = "apple";
      switch ($key) {
         case "apple":
            echo "Stive Jobs";
            break;
         case "Microsoft":
            echo "Bill Gates";
            break;
         case "Faccebock":
            echo "Mark Z";
            break;
         default:
            "no name";
            break;
      }



      // scandir
      // print_r(scandir(__DIR__s))






      //glob
      $list = glob("f*")



      echo $_SERVER['SERVER_ADDR'];
      

      
    






      

?>










