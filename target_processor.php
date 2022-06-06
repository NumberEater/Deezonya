<!DOCTYPE html>
<html>
<head>
<?php
    if($_POST["username"] == "admin") {
        echo "Granted";
    }
    else {
        echo "Denied";
    }
?>
</head>