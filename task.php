<?php

//edit this array

/*
$contacts [] = [
  'name' => 'Alena Holligan',
  'email' => 'alena.holligan@teamtreehouse.com',
 ];
$contacts [] = [
  'name' =>'Dave McFarland',
  'email' => 'dave.mcfarland@teamtreehouse.com',
 ];
$contacts [] = [
  'name' =>'Treasure Porth',
  'email' => 'treasure.porth@teamtreehouse.com',
 ];
 $contacts [] = [
  'name' => 'Andrew Chalkley',
   'email' => 'andrew.chalkley@teamtreehouse.com',
  ];


echo "<ul>\n";
//$contacts[0] will return 'Alena Holligan' in our simple array of names.
echo "<li>" . $contacts[0]['name'] . ': ' . $contacts [0]['email'] . "</li>\n";
echo "<li>" . $contacts[1]['name'] . ': ' . $contacts [1]['email'] . "</li>\n";
echo "<li>" . $contacts[2]['name'] . ': ' . $contacts [2]['email'] . "</li>\n";
echo "<li>" . $contacts[3]['name'] . ': ' . $contacts [3]['email'] . "</li>\n";
echo "</ul>\n";
*/

// EXERCISES
//https://www.w3resource.com/php-exercises/php-array-exercises.php#editorr

/*
$color = array('white', 'green', 'red');


echo "<ul>\n";
echo "<li>" . $color[1] . "</li>\n";
echo "<li>" . $color[2] . "</li>\n";
echo "<li>" . $color[0] . "</li>\n";
echo "</ul>\n";
*/

// LIST OF COUNTRIES AND CAPITALS ALPHABETICALLY ACCORDING TO THE CAPITALS

/*
$ceu [] = [
  'city'=>"Rome",
  'country'=> "Italy",
];
$ceu [] = [
  'city'=>"Luxembourg",
  'country'=> "Luxembourg",
];
$ceu [] = [
  'city'=>"Berlin",
  'country'=> "Germany",
];
$ceu [] = [
  'city'=>"Athens",
  'country'=> "Greece",
];
$ceu [] = [
  'city'=>"Dublin",
  'country'=> "Ireland",
];
$ceu [] = [
  'city'=>"Amsterdam",
  'country'=> "Netherlands",
];
$ceu [] = [
  'city'=>"Lisbon",
  'country'=> "Portugal",
];

sort($ceu);
var_dump($ceu);

echo "<li>"."The capital of " . $ceu[0]['country'] . " is " . $ceu[0]['city'] . "." . "</li>\n";
echo "<li>"."The capital of " . $ceu[1]['country'] . " is " . $ceu[1]['city'] . "." . "</li>\n";
echo "<li>"."The capital of " . $ceu[2]['country'] . " is " . $ceu[2]['city'] . "." . "</li>\n";
echo "<li>"."The capital of " . $ceu[3]['country'] . " is " . $ceu[3]['city'] . "." . "</li>\n";
echo "<li>"."The capital of " . $ceu[4]['country'] . " is " . $ceu[4]['city'] . "." . "</li>\n";
echo "<li>"."The capital of " . $ceu[5]['country'] . " is " . $ceu[5]['city'] . "." . "</li>\n";
echo "<li>"."The capital of " . $ceu[6]['country'] . " is " . $ceu[6]['city'] . "." . "</li>\n";
*/


$ceu = array(
  "Italy"=>"Rome",
  "Luxembourg"=>"Luxembourg",
  "Belgium"=> "Brussels",
  "Denmark"=>"Copenhagen",
  "Finland"=>"Helsinki",
  "France" => "Paris",
  "Slovakia"=>"Bratislava",
  "Slovenia"=>"Ljubljana",
  "Germany" => "Berlin",
  "Greece" => "Athens",
  "Ireland"=>"Dublin",
  "Netherlands"=>"Amsterdam",
  "Portugal"=>"Lisbon",
  "Spain"=>"Madrid",
  "Sweden"=>"Stockholm",
  "United Kingdom"=>"London",
  "Cyprus"=>"Nicosia",
  "Lithuania"=>"Vilnius",
  "Czech Republic"=>"Prague",
  "Estonia"=>"Tallin",
  "Hungary"=>"Budapest",
  "Latvia"=>"Riga",
  "Malta"=>"Valetta",
  "Austria" => "Vienna",
  "Poland"=>"Warsaw") ;

// echo '<h1>List sorted by capital: </h1>' . '<br />';
// echo '<br />';
// asort ($ceu);
// foreach ($ceu as $country => $capital) {
//   echo "<li>"."The capital of $country is $capital" . "</li>\n";
//   }
//
// echo '<br />';
//
// echo '<h1>List sorted by country: </h1>' . '<br />';
// echo '<br />';
// ksort ($ceu);
// foreach ($ceu as $country => $capital) {
//   echo "<li>"."The capital of $country is $capital" . "</li>\n";
//   }
//
//   echo '<br />';
//
//   echo '<h1>List sorted by country and 6-character names replaced: </h1>' . '<br />';
//   echo '<br />';
//   ksort ($ceu);
//   foreach ($ceu as $country => $capital) {
//     if (strlen($country) == 6) {
//       echo '<li>'.'The capital of "this country that has 6 characters" is ' . $capital . '</li>'."\n";
//     } else {
//     echo "<li>"."The capital of $country is $capital" . "</li>\n";
//     }
//   }
// echo '<h1>List sorted by country and 6-character names replaced: </h1>' . '<br />';
//   echo '<br />';
//   ksort ($ceu);
  // foreach ($ceu as $country => $capital) {
  //   if (strlen($country) == 6) {
  //     echo '<li>'.'The capital of '. strrev($country) . ' is ' . $capital . '</li>'."\n";
  //   } else {
  //   echo "<li>"."The capital of $country is $capital" . "</li>\n";
  //   }
  // }

  // supr, ted udelej funkci u ktery bude vstupem retezec (string) a vystupem taky string . bude delat to, ze pokud vstupni string bude mit 6 pismen tak tento string otoci. tzn.
  //
  // vstup ahojda  bude vystup : adjoha


//   function bara_funkce ($value) {
//         if (strlen($value) == 6) {
//           return strrev($value);
//         } else {
//           return $value;
//         }
//     }
//
// function bara_funkce ($value){
//         $reverse = '';
//         $i = 0;
//         while (!empty($value[$i])){
//         $reverse = $value[$i].$reverse;
//         $i++;
//         } if (strlen($value) == 6) {
//               return $reverse;
//               } else {
//                 return $value;
//         }
//   }


//pozpátku hl.města s šesti písmeny za použití foreach

// $value = 'Paris';
// $reverse = str_split($value);
// krsort ($reverse);
// foreach ($reverse as $letter){
//   echo "$letter";
// }

  // function bara_funkce ($value){
  //           if (strlen($value) == 6) {
  //             $split_arr = str_split($value);
  //             krsort ($split_arr);
  //             foreach ($split_arr as $key =>$letter){
  //               $stock[]=$letter;
  //               }
  //               $reverse = implode("",$stock);
  //               return $reverse;
  //             } else {
  //                 return $value;
  //         }
  //      }


//pozpátku hl.města s šesti písmeny za použití for

// function bara_funkce ($value) {
//   if (strlen($value) == 6){
//     for($i = 6; $i > -1; --$i) {
//         $word .= $value[$i];
//         }
//      return $word;
//    } else {
//      return $value;
//     }
//   }

// $value = "Berlin";
// $arr = str_split($value);
// foreach (array_keys($arr, "b") as $key) {
//     unset($arr[$key]);
// }
//var_dump ($arr);

//pozpátku hl.města s šesti písmeny a vynechat písmeno L
 function bara_funkce ($value) {
   if (strlen($value) == 6) {
     $arr = str_split($value);
     foreach (array_keys($arr, "L", "l") as $key) {
         unset($arr[$key]);
     } $word = implode ("",$arr);
       $reverse = strrev ($word);
     return $reverse;
   } else {
     return $value;
   }
 }



foreach ($ceu as $country => $capital){
  echo "<li>"."The capital of $country is " . bara_funkce($capital) . "</li>\n";
}

// $string = "ZEESHAN";
//
// $i = -1;
// while(($string[$i])!=null){
//     echo $string[$i];
//     $i--;
//   }


// $i = -1;
// do {
// echo "$string[$i]";
// $i--;
// } while ($i >= -6);











// $x = array(1, 2, 3, 4, 5);
// unset($x[3]);
// $x = array_values($x);
// var_dump ($x);


// $color = array(
//   4 => 'white',
//   6 => 'green',
//   11=> 'red');
//
// echo $color[4];
//
// $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// echo current($color)."\n";
//
//
// $array = array('step one', 'step two', 'step three', 'step four');
//
// // by default, the pointer is on the first element
// echo current($array) . "<br />\n"; // "step one"
//
// // skip two steps
// next($array);
// next($array);
// echo current($array) . "<br />\n"; // "step three"
//
// // reset pointer, start again on step one
// reset($array);
// echo current($array) . "<br />\n"; // "step one"


//Write a PHP script that inserts a new item in an array in any position. Go to the editor
// Expected Output :
// Original array :
// 1 2 3 4 5
// After inserting '$' the array is :
// 1 2 3 $ 4 5

// $numbers = array (1,2,3,4,5);
//
// echo 'Original array:' . "<br />\n";
// echo implode ($numbers);
//
// array_splice ($numbers,2,2, array ('$', '$'));
// echo "<br /> After inserting '$' the array is:" ."<br />\n";
// echo implode ($numbers);

//Write a PHP script to sort the following associative array :

// $people = array ("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// // a) ascending order sort by value
// // b) ascending order sort by Key
// // c) descending order sorting by Value
// // d) descending order sorting by Key
//
// asort ($people);
// foreach ($people as $name => $age) {
//   echo $name . ' is ' . $age . ' years old.' . '<br />';
// }
//
// echo '<br />';
//
// ksort ($people);
// foreach ($people as $name => $age) {
//   echo $name . ' is ' . $age . ' years old.' . '<br />';
// }
//
// echo '<br />';
//
// arsort ($people);
// foreach ($people as $name => $age) {
//   echo $name . ' is ' . $age . ' years old.' . '<br />';
// }
//
// echo '<br />';
//
// krsort ($people);
// foreach ($people as $name => $age) {
//   echo $name . ' is ' . $age . ' years old.' . '<br />';
// }

// Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.

// $recordedTemp = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);
//
// // Expected Output :
// // Average Temperature is : 70.6
// // List of seven lowest temperatures : 60, 62, 63, 63, 64,
// // List of seven highest temperatures : 76, 78, 79, 81, 85,
// $recordedTemp_length = count($recordedTemp);
// $averageTemp = array_sum($recordedTemp)/ ($recordedTemp_length);
//
// echo "Average Temperature is : " . "$averageTemp" . "<br />";
//
// sort($recordedTemp);
// echo " List of seven lowest temperatures : ";
// for ($i=0; $i<7; $i++)
// {
// echo $recordedTemp[$i].", ";
// }
// echo "<br />"."List of seven highest temperatures : ";
// for ($i=($recordedTemp_length-7); $i<($recordedTemp_length); $i++)
// {
// echo $recordedTemp[$i].", ";
// }

// Within the FOR loop, after displaying the number, add a conditional that uses the function isset to test if the incremented value equals one of the keys in the $facts array. If there is a key that matches, display the value AFTER the number.
// all numbers between 1 and 100 should still be displayed

$facts = array(
    57 => ' on Heinz ketchup bottles represents the number of varieties of pickles the company once had.',
    2 => ' is the approximate hours a day Giraffes sleeps',
    18 => ' is the average hours a Python sleeps per day',
    10 => ' per cent of the world is left-handed.',
    11 => ' Empire State Buildings, stacked one on top of the other, would be required to measure the Gulf of Mexico at its deepest point.',
    98 => '% of the atoms in your body are replaced every year',
    69 => ' is the largest number of recorded children born to one woman',
);
//add your loop below this line
// for ($i = 1; $i <= 100; $i++ ){
//    echo $i . "<br \>";
//    if (isset($facts[$i]) == true) {
//      echo "$facts[$i];
//    }
//  }
//
// list($key, $val) = each($facts);
// if (isset($facts)) {
//    echo $key . $val . "<br />";
//  }
//
// var_dump (isset($facts[57]));
// var_dump (isset($facts[2]));
//
//
//
// for ($i = 1; $i <= 100; $i++ ){
//   echo $i;
//   if (isset($facts)) {
//   echo " " . $facts[$i] . "<br \>";
// }
// }


?>
