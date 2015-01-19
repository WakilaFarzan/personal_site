<?php


//print_r($_ENV);

$value=$_SERVER;
?>
<ul>
    <?php
foreach($value as $key=>$info) {
    ?>

    <li><?php echo $key."-".$info ?></li>
<?php }?>


</ul>