<?php
class car{
//properties
  public $version;
  public $color;
  public $speed;

  public function features(){
      echo 'car color is '. $this->color;
      echo '<br>';
      echo 'car version is '. $this->version;
      echo '<br>';
      echo 'car speed is '. $this->speed;
      echo '<br>';
  }
  const OWNAME = 4;
  public function owner($name){
      if (strlen($this->$name)<self::OWNAME){
          echo 'invalid name, please enter your real name  <br>';
      }else{
          echo 'welcome '.$name;
      }


  }

}
$KIA=new car();
echo '<br>';
$KIA->color='red';
$KIA->speed='200km/hr';
$KIA->version='2018';
$KIA->features();
$KIA->owner('fatma');
echo '<br>';
$honda=new car();
$honda->color='white';
$honda->speed='400km/hr';
$honda->version='2019';
$honda->features();
$honda->owner('ma');
echo '<pre>';
var_dump($KIA);
echo '<br>';
var_dump($honda);

echo '</pre>';
