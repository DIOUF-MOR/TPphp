<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO6</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

       <h6>Résolution d'equation </h6>
    <form class="fmlre" method="POST" action="controller.php">
        <label for="coefa">le coeficient de X²</label><br>
        <input class="form1" type="text" name="coefa"><br><br>
        <label for="coefb">le coeficient de X</label><br>
        <input class="form1" type="text" name="coefb"><br><br>
        <label for="coefc">le coef independent</label><br>
        <input class="form1" type="text" name="coefc"><br><br>
        <input type="submit"  value="valider" name="btn"><br>
    </form>
   <?php 
        
       
 
            if(empty($_SESSION['x1']) && empty($_SESSION['x0']) && empty($_SESSION['x']))
            {
                // echo 'pas de solution';
              

            }else{

                if(!empty($_SESSION['x1']))
                {
                    echo "X1 = ".$_SESSION['x1']." et X2=".$_SESSION['x2'];
                    
                }else{
                    if(!empty($_SESSION['x0']))
                    {
                        echo "X0 = ".$_SESSION['x0'];
                        

                    }else{
                        if (!empty($_SESSION['x'])) {

                            echo "X = ".$_SESSION['x'];
                        }
                    }
                }

            }
            if (isset($_GET['no'])) {
                echo"<p style='color:red'>Abssence d inconnue</p>";
            }
        
    
        if(isset($_GET['ok']))
        {
            echo "<p style='color:red'>Revoir votre saisie</p>";
        }
        
   ?>
</body>
</html>

