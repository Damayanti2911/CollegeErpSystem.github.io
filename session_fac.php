<?php
    session_start();

    if(isset($_SESSION["fac_id"]) && $_SESSION["fac_id"] === true)
    {
        header("location: fac1.php");
        exit;
    }

?>