<?php 
$result = [
    ["1", "./img/apple1.jpg", "苹果"],
    ["2", "./img/orange1.jpg", "橙子"],
    ["3", "./img/banana1.jpg", "香蕉"]
];
?>
<ul>
    <?php foreach ($result as $key => $value) { ?>
        <li>
            <img src="<?php echo $value[1]?>" alt="">
            <a href="#"><?php echo $value[2];?></a>
        </li>
    <?php } ?>
</ul>
