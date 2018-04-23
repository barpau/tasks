# tasks
moje úkoly

<?php

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

?>
