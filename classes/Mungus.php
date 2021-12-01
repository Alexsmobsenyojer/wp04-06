<?php 
use Animals;
class Mungus extends Animals
{
public bool $drip;
public function __construct(string $name, bool $legs, bool $drip)
    {$this->name = $name;$this->legs = $legs;$this->drip = $drip;}
public function getDrip()
    {return $this->drip;}

}



?>