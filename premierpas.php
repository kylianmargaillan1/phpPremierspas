<?php

    function start_page($title = "teeeest")
    {
?><!DOCTYPE html>
<html lang  ="fr">
<head>
    <title><?php echo  $title; ?></title>
</head><body>
<?php
    }
?>
<hr/><br/><strong>Test, rayaya</strong><br/><hr/>
<?php
    function end_page($title) {
        ?>
</body>
<footer>
    <title> <?php echo $title; ?> </title>
</footer>
    }
<?php } ?>
