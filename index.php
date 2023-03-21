<?php
class car{
//properties
  public $version;
  public $color;
  public $speed;
  private $lock;
public function changes($v,$c,$s){
    $this->version=$v;
    $this->color=$c;
    $this->speed=$s;
}
public function changelock($lo){
    $this->lock=$lo;
}
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
$KIA=new car();
echo '<br>';
//$KIA->changes('blue');
//$KIA->speed='200km/hr';
$KIA->changes('2GB','blue','300km/hr');
$KIA->changelock('123#');
//$KIA->features();
//$KIA->owner('fatma');
echo '<br>';
$honda=new car();
$honda->color='white';
$honda->speed='400km/hr';
$honda->version='2019';
$honda->changelock('123@');
//$honda->lock='123@';
//echo $honda->lock;
//$honda->features();
//$honda->owner('ma');
echo '<pre>';
var_dump($KIA);
echo '<br>';
var_dump($honda);

echo '</pre>';
