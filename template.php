<!DOCTYPE html> 
<html lang = "en"> 
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <link rel="stylesheet" href="template.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>
  <script src="template.js"></script>
  <title>Technical Terms</title> 
</head>
<body>
<div id="top"></div>
<h1>Technical Term Dictionary</h1>
 <nav id="menu">
 <ul class="main-menu">
  <li><a href="template.php#section1">Search Term</a></li>
  <li><a href="template.php#section2">Add Term</a></li>
  <li><a href="template.php#section3">Edit\Delete Term</a></li>
 </ul>
</nav>
<main class="main-content"> 
<section id="section1">
<h2>SEARCH TERM</h2>
<form id="searchform" name="searchform" action="#" onkeypress="return event.keyCode != 13;">
<input type="text" name="term" placeholder="Type term here..." required>
<input type="button" class="searchforterm" value="Search">
<div id="search">
</div>
<br>
</form>

</section>

<section id="section2">
<h2>ADD TERM</h2>
<form id="addform" method="POST" action="#" onkeypress="return event.keyCode != 13;">
  <p>Term: <input type="text" name="term" ></p>
  <p>Descr: <input type="text" name="description" ></p>
  <input type="button" class="addterm" value="Add term">
</form>
<br><a href="#top">Back to top</a><br><br><br>
</section>

<section id="section3">
<h2>EDIT\DELETE TERM</h2>
<form id="deleteform" name="deleteform" action="#" onkeypress="return event.keyCode != 13;">
<input type="text" name="term" placeholder="Search for term to edit or delete" required>
<input type="button" class="searchtodelete" value="Search">
<br>
<div id="delete" style="overflow-x:auto; max-height:250px; overflow-y: auto; font-size: 0.7em;">
<table id="edit" style="max-width: 100%;">
  <tr>
    <td>Term</td>
    <td>Definition</td>
	<td>Edit</td>
	<td>Delete</td>
  </tr>
  <tr>
	<td>AJAX</td>
	<td>Acronym for Asynchronous JavaScript and XML, which allows data exchange between web browser and server without a web page being reloaded.</td>
	<td><input type="button" value="Edit"></td>
	<td><input type="button" value="Delete"></td>
  </tr>
    <tr>
	<td>Browser</td>
	<td>A web browser (or user-agent) is an application for requesting, retrieving, presenting, and traversing information resources on the World Wide Web</td>
	<td><input type="button" value="Edit"></td>
	<td><input type="button" value="Delete"></td>
  </tr>
    <tr>
	<td>Cache</td>
	<td>Stored data that can be accessed locally from a web application.</td>
	<td><input type="button" value="Edit"></td>
	<td><input type="button" value="Delete"></td>
  </tr>
    <tr>
	<td>AJAX</td>
	<td>Acronym for Asynchronous JavaScript and XML, which allows data exchange between web browser and server without a web page being reloaded.</td>
	<td><input type="button" value="Edit"></td>
	<td><input type="button" value="Delete"></td>
  </tr>
    <tr>
	<td>Browser</td>
	<td>A web browser (or user-agent) is an application for requesting, retrieving, presenting, and traversing information resources on the World Wide Web</td>
	<td><input type="button" value="Edit"></td>
	<td><input type="button" value="Delete"></td>
  </tr>
    <tr>
	<td>Cache</td>
	<td>Stored data that can be accessed locally from a web application.</td>
	<td><input type="button" value="Edit"></td>
	<td><input type="button" value="Delete"></td>
  </tr>
</table><br>
</div>
</form>

<a href="#top">Back to top</a><br><br>
</section>
</main>
</body>

<?php
$databasename = 'techdefs.sqlite';
?>




