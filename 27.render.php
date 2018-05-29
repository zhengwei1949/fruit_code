<?php
$str = file_get_contents('./fruit.txt');
$arr = explode("\n", $str);
foreach ($arr as $key => $value) {
    $result[] = explode("|", $value);
}
// print_r($result);
?>
<ul>
    <?php foreach ($result as $key => $value) { ?>
        <li>
            <img src="<?php echo $value[1] ?>" alt="">
            <a href="#"><?php echo $value[2]; ?></a>
        </li>
    <?php 
} ?>
</ul>
