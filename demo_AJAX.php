<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('ISITSAFETORUN', TRUE);

$databasename ='demo.sqlite';
echo "<h2>This is the start of data returned from the server</h2>";
if (!empty($_POST))
{
    foreach ($_POST as $key => $value)
    {
    $webdata[$key] = $value;
    echo "<p>Extracting key= {$key} value = {$value} </p>";
    }
}
if (array_key_exists('username', $webdata)){
	require 'opendatabase.php'; //open our database
	$encryptedpassword = password_hash($webdata['hashpass'], PASSWORD_DEFAULT);
	$sql = "INSERT OR REPLACE INTO 'people' ( 'username' , 'hashpass' , 'realname') VALUES (:username ,:hashpass,:realname)"; //create the SQLite instruction to add this data to our database
	echo "<p>{$databasename}  {$sql}</p>";
	$stmt = $db->prepare( $sql );
	$stmt->bindValue(':username' ,$webdata['username'], SQLITE3_TEXT);
	$stmt->bindValue(':hashpass',$encryptedpassword, SQLITE3_TEXT);
	$stmt->bindValue(':realname' , $webdata['realname'], SQLITE3_TEXT);
	$result = $stmt->execute();
	var_dump($result->fetchArray());
}
	echo "<h2>This is the end of data returned from the server</h2>";
?>

