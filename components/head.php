<?php

$prefix = "";

if($is_home){
    $prefix = ".";
}else{
    $prefix = "..";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organ Donation Drive</title>
    <script src="<?php echo $prefix ?>/tailwind.js"></script>
    <link rel="stylesheet" href="<?php echo $prefix ?>/style.css">
</head>