<?php

class Lasagna
   
{
    private $temp=40;
    
    public function expectedCookTime()
    {
            return $this->temp;

    }

    public function remainingCookTime($elapsed_minutes)
    {
        return $this->temp - $elapsed_minutes;
            
        // Implement the remainingCookTime method
    }

    public function totalPreparationTime($layers_to_prep)
    {
        return $layers_to_prep*2;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
       return (($layers_to_prep)*2)+$elapsed_minutes ;
    }

    public function alarm()
    {
        return "Ding!";
    }
}
