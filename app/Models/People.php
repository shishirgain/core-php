<?php
namespace App\Models;
class People
{
    private $name;
    private $number;
    public function __construct($name, $number = null)
    {
        $this->name = $name;
        $this->number = $number;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getNumber()
    {
        return $this->number;
    }
}