<?php

// just simple connecting with localhost 

$connect= new mysqli("localhost","root","","school_manage");
if($connect){

}else{

	echo "Connection Failed";
	exit();

}

?>
