<!DOCTYPE html>
<html>
<head>
<?php
    if($_POST["username"] == "NumberEater" && $_POST["password"] == "Hcqh4799!") {
        echo "Granted";
    }
    else {
        header("Location: ./index.html");
        die();
    }
?>
</head>