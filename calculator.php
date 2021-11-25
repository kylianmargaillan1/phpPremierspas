<?php
function start_page($title)
{
?><!DOCTYPE html>
<html lang  ="fr">
<head>
    <title><?php echo  $title; ?></title>
</head><body>
<?php
}
?>
<hr/><br/><strong>Test</strong><br/><hr/>
<?php
function end_page($title) {
?>
</body>
<footer>
   <?php echo $title; ?>
</footer>
}
<?php } ?>