<form method="post">
<input type="text" name="Try" id="Try-text">
<input type="text" name="name" id="Try-text">
<input type="text" name="Guess" id="Try-text">
<input type="text" name="surname" id="Try-text">
<input type="submit" value="submit">
</form>

<pre></pre>
<?php
$name=$_POST["name"];
$Guess=$_POST["Guess"];
$surname=$_POST["surname"];
echo "name = $name guess = $Guess surname = $surname ";
