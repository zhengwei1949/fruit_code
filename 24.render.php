<?php
$str = "1|./img/apple1.jpg|苹果\n2|./img/banana1.jpg|香蕉\n3|./img/orange1.jpg|橙子";
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
