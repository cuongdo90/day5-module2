<?php 

class Point2D
{
    public float $x;
    public float $y;

    public function __contructor(float $x, float $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setX (float $x): void
    {
        $this->x = $x;
    }

    public function setY (float $y): void
    {
        $this->y = $y;
    }

    public function setXY (float $x, float $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }   

    public function getY()
    {
        return $this->y;
    }

    public function getXY(): 
    {
        
    }
}
?>