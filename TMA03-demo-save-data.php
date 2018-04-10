<?php
define('ISITSAFETORUN', TRUE);
error_reporting(E_ALL);
ini_set('display_errors', 1);
$databasename ='techdefs.sqlite';

if (!empty($_POST))
{
    foreach ($_POST as $key => $value)
    {
    $webdata[$key] = $value;
    echo "<p>Extracting key= {$key} value = {$value} </p>";
    }
}
if (array_key_exists('term', $webdata)){
	require 'opendatabase.php'; //open our database
	$sql = "INSERT OR REPLACE INTO 'mydefinitions' ( 'term' , 'description') VALUES (:term ,:description)"; //create the SQLite instruction to add this data to our database
	$stmt = $db->prepare( $sql );
	echo "<p>{$databasename}  {$sql}</p>";
	$stmt->bindValue(':term' ,$webdata['term'], SQLITE3_TEXT);
	$stmt->bindValue(':description' , $webdata['description'], SQLITE3_TEXT);
	$result = $stmt->execute();
	var_dump($result->fetchArray());
}

?>


     
