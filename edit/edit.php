<!DOCTYPE html>
<!-- Limestone United Way Project - Joe Addison and Josh Hickman-->
<html lang="en">
<head>



		<title>United Way Edit Page</title>
		<meta charset = "utf-8" />

		<style type = "text/css">
			@import "../index.css";			
		</style>


	</head>

<body>
<div id="center">
<form action="save.php" method="post">

The following html tags are supported:
<h1>&lt;h1&gt;Text&lt;/h1&gt;</h1>
<h2>&lt;h2&gt;Text&lt;/h2&gt;</h2>
A horizonal line using &lt;hr&gt;
<hr>

<textarea rows="20" cols="80" name="content">
<?
$fn = "insert.html";
$fn = ereg_replace ("<br>", "\r", ' '.implode("",file($fn)));
$fn = strip_tags($fn, '<h1><h2><h3><h4><hr>');
//$fn = trim($fn, " ");

print $fn;

?> 
</textarea><br>
<input type="submit" value="Save"> 

</form>
</div>
</body>
</html>