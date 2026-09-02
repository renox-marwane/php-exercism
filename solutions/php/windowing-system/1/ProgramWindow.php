<?php

class ProgramWindow
{
    public $x;
    public $y;
    public $height;
    public $width;

    public function __construct($x=0,$y=0,$height=600,$width=800){
        $this->y = $y;
        $this->x = $x;
        $this->height = $height;
        $this->width = $width;
        
    }
    public function resize($size)
    {
    $this->height = $size->height;
    $this->width = $size->width;
    }
    public function move($position){
        $this->x = $position->x;
        $this->y = $position->y;
    }
}
