<?php
$distance;
function distance($abcisse1,$ordonné1,$abcisse2,$ordonné2){
$distance=sqrt(($abcisse2-$abcisse1)*($abcisse2-$abcisse1)+($ordonné2-$ordonné1)*($ordonné2-$ordonné1));
 return $distance;
}
?>