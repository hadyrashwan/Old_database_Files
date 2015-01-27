<!DOCTYPE html>
<html>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet"> -->
<link href="login-CSS(Style).css" rel="stylesheet">
<div class="testbox">
<body>
<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>
<h1>You Session Has Ended </h1>
 <a href="login-CSS.html" class="button">Login ?</a>
