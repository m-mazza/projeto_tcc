<?php
    session_start();
    setcookie (session_id(), "", time() - 1);
    session_destroy();
    session_write_close();
    header ("location:index.php");
?>
