<?php

$con = mysqli_connect('localhost', 'root', '', 'census');


$tables = array();

$result = mysqli_query($con,"SHOW TABLES");
while ($row = mysqli_fetch_row($result)) {
	$tables[] = $row[0];
}

$return = '';

foreach ($tables as $table) {
	$result = mysqli_query($con, "SELECT * FROM ".$table);
	$num_fields = mysqli_num_fields($result);

	$return .= 'DROP TABLE '.$table.';';
	$row2 = mysqli_fetch_row(mysqli_query($con, 'SHOW CREATE TABLE '.$table));
	$return .= "\n\n".$row2[1].";\n\n";

	for ($i=0; $i < $num_fields; $i++) {
		while ($row = mysqli_fetch_row($result)) {
			$return .= 'INSERT INTO '.$table.'VALUES(';
			for ($j=0; $j < $num_fields; $j++) {
				$row[$j] = addslashes($row[$j]);
				if (isset($row[$j])) {
					$return .= '"'.$row[$j].'"';} else { $return .= '""';}
					if($j<$num_fields-1){ $return .= ','; }
				}
				$return .= ");\n";
			}
		}
		$return .= "\n\n\n";

}


$handle = fopen('backup.sql', 'w+');
fwrite($handle, $return);
fclose($handle);

?>
  <script type="text/javascript">
    alert("Backup successfully taken!");
    window.location.href="../home/";
  </script>
<?php


?>
