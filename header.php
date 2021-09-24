<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photo studio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- nav -->
    <nav>
        <a href="index.php" class="logo"><i class="fas fa-camera"></i>&nbsp;Photogenix</a>
        <ul>
            <li>
                <a href="index.php" class="<?php if($page == 'home') {echo 'active';}?>">Home</a>
            </li>
            <li>
                <a href="about.php" class="<?php if($page == 'about') {echo 'active';}?>">About</a>
            </li>
            <li>
                <a href="pricing.php" class="<?php if($page == 'pricing') {echo 'active';}?>">Pricing</a>
            </li>
            <li>
                <a href="contact.php" class="<?php if($page == 'contact') {echo 'active';}?>">Contact</a>
            </li>
        </ul>
    </nav>