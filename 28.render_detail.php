<?php
$id = 2;
$str = file_get_contents('./fruit.txt');
$arr = explode("\n", $str);
foreach ($arr as $key => $value) {
    $result[] = explode("|", $value);
}
foreach ($result as $key => $value) {
    if($value[0] == $id){
        print_r($value);
        break;
    }
}
?>
