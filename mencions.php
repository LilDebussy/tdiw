<?php
	include_once __DIR__ . "/connectaBD.php";
	$con = connectaBD();
	$query = "SELECT id,nom FROM mencions WHERE grau=" . $_REQUEST['grau'];
	$resultSet = pg_query($con, $query) or die("Error sql");
	$rows = pg_fetch_all($resultSet);
	foreach($rows as $row){
		echo "<option value='" . $row['id'] . "'>" . $row['nom'] . "</option>\n";
	}
	pg_close($con);
?>
