<?php

class Star
{

    public $data;
    public $i ;
    public $e;

    public function __construct()
    {
        $this->data = file("data.txt", FILE_IGNORE_NEW_LINES);
        $this->i = 0;
        $this->e = 0;
    }

    function elves1(){
        
        foreach($this->data as $d){
            while($this->i < sizeof($this->data)){
                if($d + $this->data[$this->i] == 2020){
                    return $d * $this->data[$this->i];
                }
            $this->i++;
            }
            $this->i = 0;
        }
    }

    function elves2(){
        
        foreach($this->data as $d){
            while($this->i < sizeof($this->data)){
                while($this->e < sizeof($this->data)){
                    if($d + $this->data[$this->i] + $this->data[$this->e] == 2020){
                        return ($d * $this->data[$this->i] * $this->data[$this->e]);
                    }
                    $this->e++;
                }
                $this->e = 0;
                $this->i++;
            }
            $this->i = 0;
        }
    }
}

    $me = new Star();
    echo ("STAR 1: " . $me->elves1());
    echo ("<br><br>STAR 2: " . $me->elves2());
    
?>