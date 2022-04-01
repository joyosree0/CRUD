<?php
	$id = $_GET["id"];
	$dept = $_GET["dept"];	$name = $_GET["name"];	$nid = $_GET["nid"];	$birth = $_GET["birth"];	$address = $_GET["address"];	$batch = $_GET["batch"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO student VALUES ( '$id', '$dept', '$name', '$nid', '$birth', '$address' , '$batch')" )
		or die("Can not execute query");

	echo "Record inserted:<br> id = $id <br> dept = $dept<br> name = $name <br> nid = $nid<br> birth = $birth <br> address = $address <br> batch = $batch";

	echo "<p><a href=readstudent.php>READ all records</a>";
?>