<!DOCTYPE html>
<!-- Limestone United Way Project - Joe Addison and Josh Hickman-->
<html lang="en">
<head>
		<title>United Way Edit Page</title>
		<meta charset = "utf-8" />
	</head>

<body>



<?
$fn = "insert.html";
$content = $_POST['content'];
$content = ereg_replace ("/\r\n|\n\r|\r|\n/", "<br>", $content);
$content = trim($content, "\t\n\r\0\X0B ");
$content = rtrim($content, "<br> ");
$fp = fopen($fn,"w") or die ("Error opening file in write mode!");
fputs($fp,"<p>");
fputs($fp,$content);
fputs($fp,"</p>");
fclose($fp) or die ("Error closing file!");
echo "<meta http-equiv=\"refresh\" content=\"0; url=edit.php\" />\n";
?>

</body>
</html>
