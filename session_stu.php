<?php
    session_start();

    if(isset($_SESSION["stu_id"]) && $_SESSION["stu_id"] === true)
    {
        header("location: stu1.php");
        exit;
    }

?>