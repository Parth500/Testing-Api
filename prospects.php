<?php
 
 class prospectsCla{

 	function prospectsFun(){
 	
 	$db=mysqli_connect("localhost","root","","mydb");

 	$sql="select * from prospects";

 	$res=mysqli_query($db,$sql);

 	if(!$res){
 		die("Query Error");
 	}

 	$data = [];
 	while ($row=mysqli_fetch_assoc($res)) {
 		$data[]=$row;
 	}
 	echo json_encode($data);
 	exit;
 	}
 }

 ?>