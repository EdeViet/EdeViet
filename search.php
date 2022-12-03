<?php
$search = $_POST['search_input'];

if (empty($search)) {
    return;
}else{
    header("Location: index.php?tu=".$search);
    header('Content-Type: text/html; charset=utf-8');
}
?>