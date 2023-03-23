<?php

/*has methods without body/code
to make an interface we use the syntax:interface name{}
to use an interface we use the keyword implements
*/
interface Mobile{
    public function presshome();
}

class Iphone implements Mobile {
    public $name;
    public function presshome(){
        echo 'welcome ya basha';
    }
}
class Sony implements Mobile {
    public $name;
    public function presshome(){
       echo 'welcome ya m3fen';
    }
}


$Iphone=new Iphone();
$Iphone->presshome();
echo "<pre>";
print_r($Iphone);
echo "</pre>";

$Sony=new Sony();
$Sony->presshome();
echo '<pre>';
print_r($Sony);
echo '<pre>';
