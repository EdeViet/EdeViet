<?php

// $search = $_POST['submit'];
if (empty($timkiem)) {
    return;
}else{
    header("Location:search.php?tu=".$timkiem);
    header('Content-Type: text/html; charset=utf-8');
}
?>