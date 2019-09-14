<?php

//computer is my class and in the funtion of computer i have properties of computer ";
echo "\n";
// "after the bracets the the object is written which has the same properties as of computer but an additional ssd ";
class computer{
    public $Ram = "8GB";
    public $ssd = "128gb";
    public $color = "black";

    public function hello(){
        echo "hi this is te defining method";
        echo "\n\n";
    }

}
//this is the calling method
$hello = new computer();
$hello->hello();

$laptop = new computer();
$laptop->Ram;
$laptop->ssd ="256gb";

$hp = new computer();
$hp->ssd = "128gb";

var_dump($laptop);

var_dump($hp);

print_r($hp);

print_r($laptop);

?>