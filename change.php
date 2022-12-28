<?php

// $search = $_POST['submit'];
echo $timkiem;
if (empty($timkiem)) {
    return;
}else{
    header("Location:search.php?tu=".$timkiem);
    header('Content-Type: text/html; charset=utf-8');
}
?>