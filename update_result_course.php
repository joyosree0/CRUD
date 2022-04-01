<?php
	$id = $_GET["id"];	$dept = $_GET["dept"];	$title = $_GET["title"];	$credit = $_GET["credit"];	$syllabus = $_GET["syllabus"];	$etc = $_GET["etc"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE course SET dept='$dept', title='$title', credit='$credit', syllabus='$syllabus', etc='$etc' WHERE id = $id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<p>Record updated:<br>id = $id <br> dept = $dept<br> title = $title <br> credit = $credit<br> syllabus = $syllabus <br> etc = $etc";

	echo "<p><a href=readcourse.php>READ all records</a>";
?>