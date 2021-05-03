<?php
include "./config/db.php";
//GET VISTORS
$user_ip = $_SERVER['REMOTE_ADDR'];
$check_ip = mysqli_query($conn, "SELECT visitorip FROM traffic WHERE page ='home' and visitorip ='$user_ip'");
if(mysqli_num_rows($check_ip) >=1)
{
    //not unique user
}
else
{
    $insertQuery = mysqli_query($conn, "INSERT INTO traffic (page, visitorip) VALUE ('home','$user_ip')");
}
?>
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=description content="The Vineyard Mall is a world class state-of-the-art facility which features luxurious retail shop spaces, elegant food court and restaurant, serene relaxation spot and nightlife entertainment area and so much more located on Woji road, GRA Phase two, Port Harcourt, Rivers State, Nigeria.">
    <meta name=author content="ThankGod Okoro">
    <meta property="og:url" content="https://www.iverify.ng"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="The Vineyard Mall&trade; :: All you need under one roof"/>
    <meta name="og:description" content="The Vineyard Mall is a world class state-of-the-art facility which features luxurious retail shop spaces, elegant food court and restaurant, serene relaxation spot and nightlife entertainment area and so much more located on Woji road, GRA Phase two, Port Harcourt, Rivers State, Nigeria.">
    <meta name="keywords" content="Shopping, Vineyard, Vineyard Mall, Shopping mall in Port Harcourt, Shopping Mall, KFC, KFC in Port Harcourt, Kenturkey Fried Chicken, Kids zone, Play ground, Kids fun games, Night Life in Port Harcourt, Night Life, Food, Meals, Arcade, Play station in Port Harcout, Event center, Wedding reception, Event hall, Rentals, Shppoing Mart, Vineyard mart, Woji road, GRA Phase 2, Port harcourt, Rivers State">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://i.imgur.com/ElAvRTS.png"/>
    <title>The Vineyard Mall&trade; :: All you need under one roof</title>
    <link rel="stylesheet" href="./assets/css/vendor.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />

  </head>
  <body>