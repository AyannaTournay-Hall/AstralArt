<!DOCTYPE html>
<!--
     Author: Ayanna Tournay-Hall & Joseph Wiles
     Date: 05/7/19
     File: astralArt.html
     Purpose: Final Project
-->

<html>
   
    <head>

 <title>Astral Art</title>
        <link rel="stylesheet" type="text/css" href="astralArt.css">
    </head>
    
    <body>
        
      <h3><?php
        
            $name= $_POST['name'];
            $lineArt= $_POST['lineArt'];
            $bWArt= $_POST['bWArt'];
            $colorArt= $_POST['colorArt'];
        
        $subtotal= ($lineArt * 10)+($bWArt * 15)+($colorArt * 20);
        $tax= $subtotal * .07;
        $total= $subtotal + $tax;
            
        print("<p>Thank you $name for visiting! </p>");
        print("<p>Your estimated subtotal is $".number_format($subtotal,2).".</p>");
        print("<p>Your estimated tax is $".number_format($tax,2).".</p>");
        print("<p>Your estimated total is $".number_format($total,2).".</p>")
        
        
          ?></h3>
    </body>
    
</html>