<?php	require_once('db_connect.php');	$connect = mysqli_connect( HOST, USER, PASS, DB )		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM course" )		or die("Can not execute query");
	echo "<table border> \n";	echo "<th>id</th> <th>dept</th> <th>title</th> <th>credit</th> <th>syllabus</th> <th>etc</th> <th>Delete</th> <th>Update</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {		extract( $rows );		echo "<tr>";		echo "<td> $id </td>";		echo "<td> $dept </td>";		echo "<td> $title </td>";		echo "<td> $credit </td>";		echo "<td> $syllabus </td>";		echo "<td> $etc </td>";		echo "<td> <a href = 'delete_course.php?id=$id'> Delete </a> </td>";		echo "<td> <a href = 'update_input_course.php?id=$id&dept=$dept&title=$title&credit=$credit&syllabus=$syllabus&etc=$etc'> Update </a> </td>";		echo "</tr> \n";	}
	echo "</table> \n";
	echo "<p><a href=create_input_course.php>CREATE a new record</a>";?>