<?php
class KIA
{
    //properties
    public $version;
    public $color;
    public $speed;
    public $name;
    // private $lock;
    // Methods
    public function sayhello($n){
        $this->name=$n;
        echo 'welcome to '.$n;
    }
    public function changes($v, $c, $s)
    {
        $this->version = $v;
        $this->color = $c;
        $this->speed = $s;
    }
}
class Honda extends KIA {
  //properties

     public $lights='white';
    // private $lock;
  // Methods

     /*
public function changelock($lo){
    $this->lock=$lo;
}*/
    /*public function features(){
      echo 'car color is '. $this->color;
      echo '<br>';
      echo 'car version is '. $this->version;
      echo '<br>';
      echo 'car speed is '. $this->speed;
      echo '<br>';
  }*/
   //const OWNAME = 4;
  /*  public function owner($name){
      if (strlen($this->$name)<self::OWNAME){
          echo 'invalid name, please enter your real name  <br>';
      }else{
          echo 'welcome '.$name;
      }


  }*/

}
$KIA2020=new KIA();
echo '<br>';
//$KIA2020->changes('blue');
//$KIA2020->speed='200km/hr';
$KIA2020->changes('2GB','blue','300 km/hr');
$KIA2020->sayhello('Kia Bicanto');
//$KIA2020->changelock('123#');
//$KIA2020->features();
//$KIA2020->owner('fatma');

echo '<br>';
$honda2020=new HONDA();
$honda2020->changes('2GB','blue','300 km/hr','pure white');
//$honda2020->color='white';
//$honda2020->speed='400km/hr';
//$honda2020->version='2019';
//$honda2020->changelock('123@');
//$honda2020->lock='123@';
//echo $honda2020->lock;
//$honda2020->features();
//$honda2020->owner('ma');*/
echo '<pre>';
print_r($KIA2020);
echo '<br>';
print_r($honda2020);
//echo '</pre>';
