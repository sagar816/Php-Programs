<?php

/*
Triangle pyramid

If n is number of rows. Then 2n-1 will be the number of columns
*/

$n=15;

for($i=1; $i <= $n; $i++){
    for($j=1; $j <= (2 * $n)-1 ; $j++){ 
        if ($j >= $n-($i-1) && ($j <= $n+($i-1))){
            echo "*";
        }
        else { 
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

?>