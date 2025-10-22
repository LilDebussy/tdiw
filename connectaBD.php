<?php
function connectaBD(){
	$servidor = "deic-docencia.uab.cat";
	$port = "5432";
	$DBnom = "tdiw-w15";
	$usuari = "tdiw-w15";
	$clau = "tdiw-w15";
	$connexio = pg_connect("host=$servidor port=$port dbname=$DBnom user=$usuari password=$clau") or die("Error connexio DB"._pg_last_error());
	return($connexio);
}
?>
