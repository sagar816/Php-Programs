<?php

/*

       1
     1   1
    1  2  1
   1  3  3  1
  1  4  6  4  1

*/

$rows = 5;

for ($i = 0; $i < $rows; $i++){
    $num = 1;

    for ($k = $rows; $k > $i; $k--){
        print "&nbsp;&nbsp;";
    }

    for ($j = 0; $j <= $i; $j++){ 
        print $num;

        if ($j < $i){ 
            print "&nbsp;&nbsp;";
        }

        $num = $num * ($i - $j) / ($j + 1);
    }

    print "<br>";

}