<!DOCTYPE html>
<html>
<head>
<?php
    if($_POST["username"] == "NumberEater" && $_POST["password"] == "Hcqh4799!") {
        header("Location: ./old/index.html");
        die();
    }
    else {
        header("Location: ./index.html");
        die();
    }
?>
</head>