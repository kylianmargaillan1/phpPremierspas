<?php

function start_page($titre = 'calculator')
{
?><!DOCTYPE html>
<html lang  ="fr">
<head>
    <title><?php echo $titre ; ?></title>
</head><body>
<?php
}
?>
<hr/><br/><strong>Test</strong><br/><hr/>
<?php
function end_page($titre) {
?>
</body>
<footer>
   <?php echo $titre; ?>
</footer>
}
<?php } ?>