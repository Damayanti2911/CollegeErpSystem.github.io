<?php
    session_start();

    if(isset($_SESSION["id"]) && $_SESSION["id"] === true)
    {
        header("location: admin_page.php");
        exit;
    }

?>