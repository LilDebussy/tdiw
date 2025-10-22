<?php
	include_once __DIR__ . "/connectaBD.php";
	$con = connectaBD();

	// if (isset($_REQUEST['grau')) //si no está seteado el valor le da el 1
	// 	grau = $_REQUEST['grau'];
	// else
	// 	grau = 1;

	//$grau = (isset($_REQUEST['grau'])) ? $_REQUEST['grau'] : 1; //si no está seteado el valor le da el 1

	$grau = $_REQUEST['grau'] ?? 1; //si es null le da el valor 1

	$query = "SELECT id,nom FROM mencions WHERE grau=" . $grau;
	$resultSet = pg_query($con, $query) or die("Error sql");
	$rows = pg_fetch_all($resultSet);
	foreach($rows as $row){
		echo "<option value='" . $row['id'] . "'>" . $row['nom'] . "</option>\n";
	}
	pg_close($con);
?>
	