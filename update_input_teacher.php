<?php
	$id = $_GET["id"];
	$dept = $_GET["dept"];
	$name = $_GET["name"];	$nid = $_GET["nid"];	$birth = $_GET["birth"];	$address = $_GET["address"];	$etc = $_GET["etc"];
?>

<h1>Update Record</h1>

<form method=get action=update_result_teacher.php>

	<input type=hidden name=id value='<?php echo $id; ?>'> <br>

	name: <input type=text name=name value='<?php echo $name; ?>'>
	<p>		dept: <input type=text name=dept value='<?php echo $dept; ?>'>	<p>		nid: <input type=text name=nid value='<?php echo $nid; ?>'>	<p>		birth: <input type=date name=birth value='<?php echo $birth; ?>'>	<p>		address: <input type=text name=address value='<?php echo $address; ?>'>	<p>	
	etc: <input type=text name=etc value='<?php echo $etc; ?>'>
	<p>
	<input type=submit value=Update>
</form>