<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        
        $name=trim($name);//sa efface les espaces blancs 
        return mb_substr($name,0,1);// recupere les premieres lettres on prend que 1 caractere(1) le                                            premier caractere(0)
    }

    public function initial(string $name): string
    {
        return mb_strtoupper($this->firstLetter($name)).'.';//recupere la premier lettre en majuscule
        
    }

    public function initials(string $name): string
    {
        $part=explode(' ',$name);// permer d exploiter les chaine de caractere  en tableau 
        $premier=$part[0]; // Jane
        $deux=$part[1];//Doe
        return $this->initial($premier).' '.$this->initial($deux);// J. D.
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $line= $this->initials($sweetheart_a). '  +  ' .$this->initials($sweetheart_b);
        return <<<TEXT
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     {$line}     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
TEXT;                    
    }
}
