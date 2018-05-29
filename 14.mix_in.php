<?php 
$arr = ["apple", "banana", "orange"];
?>
<ul>
    <?php for($i=0;$i<count($arr);$i++){?>
        <li><?php echo $arr[$i]; ?></li>
    <?php } ?>
</ul>