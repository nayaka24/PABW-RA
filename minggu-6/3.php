<?php
$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
sort($data);

$arrlenght=count($data);
for($x=0;$x<$arrlenght;$x++){
	echo $data[$x];
	echo "<br>";
}
?>