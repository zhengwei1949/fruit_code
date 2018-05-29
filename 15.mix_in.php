<?php 
$arr = ["apple", "banana", "orange"];
?>
<ul>
    <?php foreach ($arr as $key => $value) { ?>
        <li><?php echo $value; ?></li>
    <?php } ?>
</ul>