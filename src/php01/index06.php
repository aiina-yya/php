<?php
$count = 0;

while($count <= 100){
    if ($count === 20){
        break;
    }
    if($count %3 == 0){
        $count++;
        continue;
    }
    echo  $count . '<br />';
    ++$count;
}

$num = 0;

do{
    echo 'num = '. $num . '<br />';
    $num++;
} while ($num < 3);

$fizz = "Fizz";
$buzz = "Buzz";
$fizzbuzz ="FizzBuzz";

for ($game = 1; $game <= 50; $game++) {
    if($game %15== 0){
        echo $fizzbuzz;
    }
    else if($game %3 == 0){
        echo $fizz;
    }
    else if($game %5 == 0){
        echo $buzz;
    }
    else {
        echo $game;
    }
}

for($i = 1; $i < 6; $i++){
    for($j= 1;$j < 6; $j++){
        echo "●";
    }
    echo "<br />";
}