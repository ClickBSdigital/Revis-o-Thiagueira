 <?php 
//$x = 1;
//while($x <= 100){
  //  echo $x . "<br>";
    //$x = $x +1;
//}
// for ($x=0; $x <= 100; $x++){
//     echo $x . "";
// }

// $lista = ["Mamao", "Banana", "Melao", "Pera", "uva", "Maça"];

// $x = 0;
// while($x < sizeof($lista)){
//     echo $lista[$x] . "<br>";
//     $x = $x + 1;
// }



// for($i = 0; $i < count($lista); $i++){
//     echo $lista[$i] . "<br>";
// }


// foreach($lista as $item){
//     echo $item . "<br>";
// }
//

// ;;;;;;;;;;;;;;;;;;;;;;;;

$data = [
    [
        "foo" => "bar",
        "bar" => "MS",
    ],
    [
        "foo" => "bar2",
        "bar" => "SP",
    ],
    [
        "foo" => "bar3",
        "bar" => "RJ",
    ],
];

print_r($data[2]['local']);
?>