<?php

function start_page($title)
{
?><!DOCTYPE html>
<html lang  ="fr">
<head>
    <title>calculator <?php echo $title; ?></title>
</head><body>
<?php
}
?>
<form action='calculator.php' method='post'>
<op1>
    <input type="text" name= "op1"/
</op1>
<op2>
<input type="text" name="op2"
</op2>
<input checked="checked" type="radio" name="op" value="*"/>*<br/>
<input type="radio" name="op" value="+"/>+<br/>
<input type="radio" name="op" value="-"/>-<br/>
<input type="radio" name="op" value="/"/>
</form>
<?php
function end_page($title) {
?>
</body>
<footer>
   <?php echo $title; ?>
</footer>
}
<?php } ?>