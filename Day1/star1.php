<?php

class Star
{
    function elves(){

        $data = file("data.txt", FILE_IGNORE_NEW_LINES);
        $i = 0;
        $e = 0;

        foreach($data as $d){
            while($i < sizeof($data)){
                while($e < sizeof($data)){
                    if($d + $data[$i] + $data[$e] == 2020){
                        return ($d * $data[$i] * $data[$e]);
                    }
                    $e++;
                }
                $e = 0;
                $i++;
            }
            $i = 0;
        }
    }
}

    $me = new Star();
    echo $me->elves();
    
?>