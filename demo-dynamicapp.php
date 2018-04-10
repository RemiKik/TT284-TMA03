<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('ISITSAFETORUN', TRUE); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="appstyles.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="appscript-demo.js"></script>
    <script src="moment.js"></script>
</head>
    <body >
        <h1>Dynamic App - Demo</h1>
        <p>Some of the JavaScript uses the jquery and jquery mobile libraries.</p>
        <p>Some functions are run as soon as the page fully loads.</p>
        <div><span id="mytime">Time is displayed here</span></div>
        <div id="maincontent">Note that this div is updated after submitting the form</div>
        <div id="showsave">Show results of save here</div>
        <p>Note that the submission of this form will be intercepted by the JavaScript in appscript-demo.js without refreshing the whole page. </p>
        <h2>Add a new user to the database</h2>
        <form action="" name="myform" id="myform">
          New User name: <input type="text" name="username"><br>
          New Password: <input type="text" name="hashpass"><br>
          Their real name: <input type="text" name="realname"><br>
          
          </form>
        ​​​​​​​<div><input type=button class="activitybutton" value="Add New User" id="mytest" ></div>
         
    </body>
</html>
