<?php
	$id = $_GET["id"];
	$dept = $_GET["dept"];	$title = $_GET["title"];	$credit = $_GET["credit"];	$syllabus = $_GET["syllabus"];	$etc = $_GET["etc"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO course VALUES ( '$id', '$dept', '$title', '$credit', '$syllabus', '$etc' )" )
		or die("Can not execute query");

	echo "Record inserted:<br> id = $id <br> dept = $dept<br> title = $title <br> credit = $credit<br> syllabus = $syllabus <br> etc = $etc";

	echo "<p><a href=readcourse.php>READ all records</a>";
?>