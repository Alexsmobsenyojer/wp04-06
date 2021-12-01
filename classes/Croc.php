<?php 
use Animals;
class Croc extends Animals
{
public int $tooth;
public function __construct(string $name, bool $legs, int $tooth)
    {$this->name = $name;$this->legs = $legs;$this->tooth = $tooth;}
public function getTooth()
    {return $this->tooth;}
   
}



?>