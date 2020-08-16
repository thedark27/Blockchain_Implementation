<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mycart.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<style>

</style>
</head>
<body>
<?php include_once 'header.php' ?>
<?php include_once 'menu.php' ?>
<div class='container'>
<div class='row' style='margin-top:100px'>
<div class='col-sm-12'>
<h2 align='center'><a href="add.php">Click Here</a> To Add a New Block To the Block Chain.</h2>
<?php
                        $fhandle = fopen("number.txt","r");
                        $serial = fread($fhandle,filesize("number.txt"));
                        strval($serial);
                        $p=$serial-1;
                        echo "<h2 align='center'><a href='seedata.php?pid=$p'>Click Here </a>To See The Data of Previous Blocks.</h2>";
                        ?>
</div>
</div>
</div>
</body>
</html>