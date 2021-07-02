<?php
ob_start();
// include header
include("header.php")
//?>
   <?php
    
      
        // include cart
        count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');
        // include _wishilist_template.php
        count($product->getData('wishlist')) ? include ('Template/_wishilist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');
     
        // <!--  !top sales-->
        
        // include_newphone
        include("template/_newphone.php");
        
      
     

        ?>



<?php
// include footer
include("footer.php");
?>
