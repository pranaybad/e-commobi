<?php
ob_start();
// include header
include("header.php")
//?>
       <?php
      //  include banner
      include("template/_banner-area.php");
      
        // include top sales
        include("template/_topsale.php");
      
        // <!--  !top sales-->

     
        // include _specialprice
        include("template/_specialprice.php");
       

     
        // include _banneradd
        include("template/_banneradd.php");
       

    
   
        // include_newphone
        include("template/_newphone.php");
        

     
        // include _latestblog
        include("template/_latestblog.php");
        ?>





<?php
// include footer
include("footer.php");
?>
