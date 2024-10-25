<?php
/* Number pattern 
   1
  2 3
 4 5 6
7 8 9 10
*/

$rows = 4;
$n = 1;
for ($i=1; $i <= $rows; $i++){ 
    for($k = $rows; $k > $i; $k--){
        echo "&nbsp;&nbsp;";
    }
    for($j = 1; $j <= $i; $j++){ 
        echo $n, "&nbsp;&nbsp;";
        $n++;
    }
    echo "<br>";
}



//http://localhost/phpprograms/number_pattern_02.php > run in incognito mode
?>