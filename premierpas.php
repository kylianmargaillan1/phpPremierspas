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
<?php
    $jour = date('d/m/Y', strtotime('2021-11-25'));
echo $jour,'<br/>';
    $jour = date('F d, Y, h:i A');
    echo $jour;
?>