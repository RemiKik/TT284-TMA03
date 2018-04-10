<?php
define('ISITSAFETORUN', TRUE);
error_reporting(E_ALL);
ini_set('display_errors', 1);
$databasename ='techdefs.sqlite';
$stylesheet = '';
$javascript ='';
$mycss='';
$pagetitle = 'Extract data from Table';
require 'html5head.php';//do not edit this row
require 'opendatabase.php';//do not edit this row
require 'sformdata.php';//do not edit this row
//$webdata['term'] = "s";// this row sets your search term to be any term that contains the letter 's'. 
$sql='select term , definition from mydefinitions where term like :term'; //do not edit this row
$stmt = $db->prepare( $sql); //do not edit this row
$stmt->bindValue(":term" , '%'.$webdata['term'].'%' , SQLITE3_TEXT); //do not edit this row
$result = $stmt->execute(); //do not edit this row
echo '<table id="searchresult">';
while ($row = $result->fetchArray()){ //do not edit this row
    echo '<tr>' . '<td>' . htmlspecialchars($row['term'])  .'</td>'. '<th>' . htmlspecialchars($row['definition']).'</th>'.'</tr>';
}
echo '</table>';

?>


     
