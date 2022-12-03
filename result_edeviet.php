<?php
require_once('connection.php');

function get_tu_ede($conn , $term){	
    
	$result = mysqli_query($conn, "SELECT * FROM test.test WHERE tu LIKE '%".$term."%' ORDER BY nghia ASC");	
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	return $data;
}

if (isset($_GET['term'])) {
	$getData = get_tu_ede($conn, $_GET['term']);
	$dataList = array();
	foreach($getData as $tu){
		$dataList[] = $tu['tu'];
	}
	echo json_encode($dataList);
}
?>