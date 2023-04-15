<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $number = 7;
     echo 'My number is: $number <br>';
     echo "My number is: $number <br>";
     echo 'My number is: ' . $number . '<br>'; // varianta corecta
     echo defined("Pi" . "<br>"); // cautarea in cod a unei constante
     define("Pi", 3.14); // definirea unei constante
     echo Pi . '<br>';
     echo defined("Pi" . "<br>");  // cautarea in cod a unei constante
     $x = 9;
     $y = 5;
     $bool = True;
     if ($x > $y) {
        echo $x . ' is bigger than ' . $y;
     }

     if ($x > $y && $bool = False) {
        echo $x . ' is bigger than ' . $y . '<br>'; // se executa doar in cazul cand amandoua expresii sunt corecte  && = inseamna "și"
     }
     if ($x > $y || $bool = False) {
        echo $x . ' is bigger than ' . $y . '<br>'; // se executa cand una din ele este corecta. || = sau
     }
     if ($x < $y) {
        echo $x . ' is bigger than ' . $y . '<br>'; // se executa cand una din ele este corecta. || = sau
     }
     else if ($x == $y) {
        echo 'The numbers are egal';
     }
     
     else {
        echo 'X is smaller than Y<br>';
     }

     switch($x) { // aceasta functie cauta o variabila de mai multe sensuri
        case 6:
            echo 'This number = 6';
        case 5:
            echo 'This number 5';
        case 9:
            echo 'This number = 9 <br>'; 
            break;
     }












     $arr_1 = array($x, 2, 3 ,4 ,5 ,6, "some");
     $arr = [5, 7];
     $arr_1[0] = 5;
     echo $arr_1[0];
     echo '<br>';
     $arr_3 = array(array(327, 5, 5), array(325, 9, 7));
     $arr_3[1][2] = 6;
     echo $arr_3[1][2];

     $arr_data = array("name" => "Alexandru", "surname" => "Filip");
     echo $arr_data['name' . 'surname'];
     echo '<br>';
    
     foreach($arr_data as $key  => $value) {
        echo 'Key: ' . $key . ', valoarea ' . $value . '<br>';
     }
     echo '<br>';


     for($i = 0; $i < 10; $i++) {
        echo $i . '<br>';
     echo '<br>';
     }
     
    $i = 2; 
    while($i < 10) {
        echo $i . '<br>';
        $i++;

     }

    $i = 2; 
    while($i < 10) {
        echo $i . '<br>';
        $i++;

    }
    echo '<br>';
    
    $i = 101;
    do {
        echo '120';       
    } while ($i == 101); // scrie 120 atat timp cat $i = 101
     ?>

    <?php
      echo '<br>';

      function generator() {
         for($i = 1; $i <= 5; $i++) {
            yield $i;
         }
      }

      $gen = generator();
      echo $gen->current()."<br>";
      $gen->next();
      echo $gen->current() . "<br>";
    ?>

</body>
</html>