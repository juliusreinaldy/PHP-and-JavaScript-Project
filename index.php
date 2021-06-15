<?php


$arr = array (1, -1, 3, -4, 5, -2, 7, 4, 2);

$y = count($arr);

//echo $y;

//function printData ($arr, $y) {

    $dataInput = [];

    for($i=0; $i<$y; $i++){
    
        for($j=$i+1;$j<$y;$j++){

            if(abs($arr[$i]) == abs($arr[$j])){
            
                array_push($dataInput, abs($arr[$i]));
            }
        }
    }

    if(count($dataInput) == 0){
        return;
    }

    sort($dataInput);

    for($x=0; $x< count($dataInput); $x++){

        echo $dataInput[$x]," ";
    }
//}



//echo $data[1];


?>