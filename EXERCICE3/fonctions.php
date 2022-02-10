<?php
$nmbre1;
$nmbre2;
function somme($nmbre1,$nmbre2){
    $somme=($nmbre1+$nmbre2);
    return $somme;
}
function exponentiel($nmbre1,$nmbre2){
    $exponentiel=$nmbre1**$nmbre2;
    return $exponentiel;
}
function difference($nmbre1,$nmbre2){
    $difference=$nmbre1-$nmbre2;
    return $difference;
}
function produit($nmbre1,$nmbre2){
    $produit=$nmbre1*$nmbre2;
    return $produit;
}
function modulo($nmbre1,$nmbre2){
    $modulo=$nmbre1%$nmbre2;
    return $modulo;
}
function division($nmbre1,$nmbre2){
    $division=$nmbre1/$nmbre2;
    return $division;
}
function carré($nmbre1,$nmbre2){
    $carrenmbre1=$nmbre1*$nmbre1;
    echo "le carré de A est ".$carrenmbre1,'<br>';
    $carrenmbre2=$nmbre2*$nmbre2;
    echo "le carré de B  est ".$carrenmbre2;
}
?>