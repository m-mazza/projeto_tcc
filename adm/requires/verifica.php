<?php @session_start();
   if ((!isset($_SESSION['sslogado'])) or ($_SESSION['sslogado'] != "S" )) {
       echo"<script>self.location='login'</script>";
       exit;
   }
?>
