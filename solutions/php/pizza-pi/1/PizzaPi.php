<?php

class PizzaPi
{
    
    public function calculateDoughRequirement($pizza,$persons)
    {
        $gram =$pizza * (($persons*20)+200);
        return $gram;
    
    }

    public function calculateSauceRequirement($pizza,$volume)
    {
        $quantite= $pizza * 125/$volume;
        return $quantite;

        
    }

    public function calculateCheeseCubeCoverage($fromage,$epaisseur,$diametre)
    {
        return floor($fromage**3/($epaisseur * pi()*$diametre));
        
    }

    public function calculateLeftOverSlices($pizza,$amis)
    {
        $nbpart=$pizza*8;
        return $nbpart % $amis;
        
        
    }
}
