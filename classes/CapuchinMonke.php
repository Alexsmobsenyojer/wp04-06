<?php 
use Animals;
class CapuchinMonke extends Animals
{
public bool $bloonkiller;
public function __construct(string $name, bool $legs, int $bloonkiller)
    {$this->name = $name; $this->legs = $legs; $this->bloonkiller = $bloonkiller;}
public function getBloonkilla()
    {return $this->bloonkiller;}
}

?>