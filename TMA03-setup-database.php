<?php
define('ISITSAFETORUN', TRUE);
error_reporting(E_ALL);
ini_set('display_errors', 1);
$databasename ='techdefs.sqlite';
$stylesheet = '';
$javascript ='';
$mycss='';
$pagetitle = 'Create Database and Tables';
require 'html5head.php';
$db = new SQLite3($databasename);
echo"<p>Creating  SQLite database tables on the server</p>";

/*This cannot run without first including the code to open the database */
$sql = 'CREATE TABLE IF NOT EXISTS "mydefinitions" ("term" TEXT PRIMARY KEY NOT NULL , "definition" TEXT)';
$db->exec($sql) or die('Create table failed');

/*Each line above creates one table in the database */ 
echo "<p>Database created.</p>"; 



$sql = "INSERT OR REPLACE INTO 'mydefinitions' VALUES ('AJAX','Acronym for Asynchronous JavaScript and XML, which allows data exchange between web browser and server without a web page being reloaded.')";
$db->exec($sql) or die('add data failed');
$sql = "INSERT OR REPLACE INTO 'mydefinitions' VALUES ('Browser','A web browser (or user-agent) is an application for requesting, retrieving, presenting, and traversing information resources on the World Wide Web')";
$db->exec($sql) or die('add data failed');
$sql = "INSERT OR REPLACE INTO 'mydefinitions' VALUES ('Cache','Stored data that can be accessed locally from a web application.')";
$db->exec($sql) or die('add data failed');
$sql = "INSERT OR REPLACE INTO 'mydefinitions' VALUES ('DNS','The domain name system (DNS) is the means that internet domain names are located and translated into Internet Protocol (IP) addresses. Domain names are easier to remember than IP addresses.')";
$db->exec($sql) or die('add data failed');
$sql = "INSERT OR REPLACE INTO 'mydefinitions' VALUES ('HTML','Hypertext Markup Language – the predominant Markup language for web pages. HTML has been through a number of versions - the last stable version was 4.01 and the xml complaint version is XHTML 1.0')";
$db->exec($sql) or die('add data failed');
$sql = "INSERT OR REPLACE INTO 'mydefinitions' VALUES ('Scalable','Capable of handling increased load without degradation in performance.')";
$db->exec($sql) or die('add data failed');


require 'html5tail.php';
?>
