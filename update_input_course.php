<?php
	$id = $_GET["id"];
	$dept = $_GET["dept"];
	$title = $_GET["title"];	$credit = $_GET["credit"];	$syllabus = $_GET["syllabus"];	$etc = $_GET["etc"];
?>

<h1>Update Course Record</h1>

<form method=get action=update_result_course.php>

	<input type=hidden name=id value='<?php echo $id; ?>'> <br>

	title: <input type=text name=title value='<?php echo $title; ?>'>
	<p>		dept: <input type=text name=dept value='<?php echo $dept; ?>'>	<p>		credit: <input type=text name=credit value='<?php echo $credit; ?>'>	<p>		syllabus: <input type=text name=syllabus value='<?php echo $syllabus; ?>'>	<p>	
	etc: <input type=text name=etc value='<?php echo $etc; ?>'>
	<p>
	<input type=submit value=Update>
</form>