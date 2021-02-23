<?php 

session_start();
  // remove all session variables
unset($_SESSION['customerid']);
unset($_SESSION['customer_email']);
 echo "<script type=\"text/javascript\">
                  window.location = \"index\"
                </script>";
// // destroy the session
// session_destroy();
?>
