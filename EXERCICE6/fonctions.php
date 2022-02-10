<?php

function solutions_de_l_equation($a,$b,$c,&$x0,&$x1,&$x2,&$x){
    
    if ($a==0)
    {
        if ($b==0) 
        {
            
          $e="Absence d inconnue";

        } else {

            $x=(-$c/$b);
            
        }
    } else {

        $delta=$b*$b-4*$a*$c;

        if ($delta>0) {

            $x1=(-$b-sqrt($delta))/2*$a;

            $x2=(-$b+sqrt($delta))/2*$a;
        }
        elseif ($delta==0) {

            $x0=(-$b/$a);
            
        }
        elseif ($delta<0) {

            $o= "pas de solution";
        }
    }
}
    
?>