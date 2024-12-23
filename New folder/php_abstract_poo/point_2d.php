<?php
require_once 'forme.php';
class point2D
{
    protected $x;
    protected $y;
    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    function __get_x()
    {
        return $this->x;
    }
    function __get_y()
    {
        return $this->y;
    }
    function __toString()
    {
        return "Point(x = $this->x , y = $this->y";
    }
    function bouger($dx ,$dy)
    {
        $this->x += $dx;
        $this->y += $dy;
    }
}
