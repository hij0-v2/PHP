<?php

/*
 * php pagrindai
 */


//---- Stringai ----//
//$eilute = " labas rytas, Lietuva! ";
//
//$ilgis = strlen($eilute);
//$eilute_be_tarpu = trim($eilute);
//$didziosios_raides = strtoupper($eilute);
//$mazosios_raides = strtolower($eilute);
//$pavadinimas = ucfirst($eilute);
//$tekstas = str_replace("Lietuva", "Latvija", $eilute);
//$zodis = substr($eilute, 1, 5);
//$text = "\t\tPHP yra puiki programavimo kalba :) ... ";
//$trimmed = trim($text);

//echo $ilgis;
//echo $eilute_be_tarpu;
//echo $didziosios_raides;
//echo $mazosios_raides;
//echo $pavadinimas;
//echo $tekstas;
//echo $zodis;
//echo $trimmed;

//---- Input ----//
//$name = "Deividas";
//$pavadinimas = "Terminatorius";
//$data = "2021.03.12";
//$info = $pavadinimas;
//$info .= $data;
//
//echo 'Mano vardas '.$name;
//echo "Mano vardas: {$name}";
//echo "Filmo pavadinimas: \"Terminatorius\" ir ji rodys $data";

//---- Some Math ----//
//const kaina = 45;
//$kaina = 12;
//$kiekis = 5;
//$suma = kaina * $kiekis;
//$suma *=1.21;

//echo rand(2,5);
//echo round(34.675, 2);
//echo is_int($kiekis);
//echo $kiekis++; //output: post increment
//echo ++$kiekis; // output pre increment

//---- Arrays ----//
//$items = ["Preke", 12, true, 67,42]; // normal

//$items = [ // indexed array
//    12 => ["Kompiuteris Lenovo",
//        "MacBook"
//        ],
//    456 => "Telefonas",
//    67 => "Piestukas"
//];
//echo $items[12][1];

//$items = [ // associated array
//    'Kompiuteriai' => [
//        123 => "Lenovo",
//        678 => "Apple Macbook"
//    ],
//    'Telefonai' => [
//        6789 => "iPhone"
//    ]
//];
//
//echo $items["Kompiuteriai"][123];

//$studentai = [
//    "1c" => [
//        "1pogrupis" => [
//            1 => "Petras",
//            2 => "Jonas",
//            3 => "Ieva"
//        ]
//    ],
//    "2c" => [
//      "2pogrupis" => [
//          1 => "Karolis",
//          2 => "Tomas",
//          3 => "Simas"
//      ]
//  ]
//];
//
//foreach ($studentai as $class => $class1){
//    echo "$class<br>";
//    foreach ($class1 as $group => $group1){
//        echo "$group<br>";
//        foreach ($group1 as $name){
//            echo "$name<br>";
//        }
//    }
//}



//$items = [
//    123 => "Lenovo",
//    678 => "Apple",
//    6789 => "iPhone"
//];
//$items = implode(':', $items); //masyva konvertuojam i eilute
//$items = explode(':',$items); // eilute konvertuojam i masyva
//
//var_dump($items);

//---- Loops ----//
//$data = [
//    'komp1' => 'item1',
//    'komp2' => 'item2',
//    'komp3' => 'item3',
//    'komp4' => 'item4',
//    'komp5' => 'item5'
//];

//echo count($data);

//for($i=0;$i<count($data);$i++){
//    if($data[$i]=="item2"){
//        echo "Elementas surastas";
//        break;
//        continue;
//    }
//    echo "$data[$i]<br>";
//}
//
//$i=0;
//
//while($i<count($data)){
//    echo "$data[$i]<br>";
//    $i++;
//}
//
//$i=0;
//
//do{
//    echo "$data[$i]<br>";
//    $i++;
//}while($i<count($data))
//
//foreach ($data as $key => $item){
//    echo "$key : $item<br>";
//}

?>

