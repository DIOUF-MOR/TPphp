<?php
    session_start();
     include 'fonctions.php';

    if (isset($_POST['btn'])) {
        $coefa = $_POST['coefa'];
        $coefb = $_POST['coefb'];
        $coefc = $_POST['coefc'];

        $_SESSION['coefa']=$coefa;
        $_SESSION['coefb']=$coefb;
        $_SESSION['coefc']=$coefc;

        $a=$_SESSION['coefa'];
        $b=$_SESSION['coefb'];
        $c=$_SESSION['coefc'];
       

        if (((!empty($a) || $a==0) && is_numeric($a)) && (((!empty($b) || $b==0)) && is_numeric($b)) && (((!empty($c) || $c==0)) && is_numeric($c))) 
        {
            if ($a==0 && $b==0) {

                header('location:index.php?no=1');

            } else {

                solutions_de_l_equation($a,$b,$c,$x0,$x1,$x2,$x);       

                $_SESSION['x0'] =$x0;

                $_SESSION['x1'] =$x1;

                $_SESSION['x2'] =$x2;

                $_SESSION['x'] =$x;
                
                header('location:index.php');
            }
            
            
        }else {
            header('location:index.php?ok=0');
        }
    }
   
?>