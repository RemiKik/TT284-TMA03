<?php
if(!defined('ISITSAFETORUN')) {
   die('Cannot be run on its own'); 
}
echo '<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="' .$stylesheet . '">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="' . $javascript . '"></script>  

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>' . $pagetitle . '</title>
    '. $mycss .'

</head>

<body>' 

?>
