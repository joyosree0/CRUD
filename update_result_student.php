<?php
	$id = $_GET["id"];	$dept = $_GET["dept"];	$name = $_GET["name"];	$nid = $_GET["nid"];	$birth = $_GET["birth"];	$address = $_GET["address"];	$batch = $_GET["batch"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE student SET dept='$dept', name='$name', nid='$nid', birth='$birth', address='$address', batch='$batch' WHERE id = $id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<p>Record updated:<br>id = $id <br> dept = $dept<br> name = $name <br> nid = $nid<br> birth = $birth <br> address = $address <br> batch = $batch";

	echo "<p><a href=readstudent.php>READ all records</a>";
?>