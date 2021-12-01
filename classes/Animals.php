<?php 

abstract class Animals //nevytvari object, má děddící třídy
{
public string $name;
public bool $legs;
public function getLegs()
{return $this->legs;}

public function getName()
{return $this->name;}
    
}



?>