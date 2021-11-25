<?php

function start_page($title)
{
?><!DOCTYPE html>
<html lang  ="fr">
<head>
    <title><?php echo $title ?></title>
</head><body>
<?php
}
?>

<op1>

</op1>

<op2>

</op2>
<input checked="checked" type="radio" name="op" value="*"/>*<br/>
<input type="radio" name="op" value="+"/>+<br/>
<input type="radio" name="op" value="-"/>-<br/>
<input type="radio" name="op" value="/"/>
<?php
function end_page($title) {
?>
</body>
<footer>
   <?php echo $title; ?>
</footer>
}
<?php } ?>