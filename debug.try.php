<form method="post">
<input type="text" name="Try" id="Try-text">
<input type="text" name="name" id="Try-text">
<input type="text" name="Guess" id="Try-text">
<input type="text" name="surname" id="Try-text">
<input type="submit" value="submit">
</form>
<div style="padding-top:75.000%;position:relative;"><iframe src="https://gifer.com/embed/758b" width="100%" height="100%" style='position:absolute;top:0;left:0;' frameBorder="0" allowFullScreen></iframe></div>
<pre></pre>
<?php
$name=$_POST["name"];
$Guess=$_POST["Guess"];
$surname=$_POST["surname"];
echo "name = $name guess = $Guess surname = $surname ";
