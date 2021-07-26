<?php
if (isset($a)) {
  
	dropTableStudent();
}
if (isset($b)) {
 
	dropTableZoo();
}
function dropTableStudent(){
	$conn = OpenCon();
	$sql = "DROP TABLE Students";
mysqli_query($conn, $sql);
mysqli_close($conn);
}
function dropTableZoo(){
	$conn = OpenCon();
	$sql = "DROP TABLE Zoo";

mysqli_query($conn, $sql);
mysqli_close($conn);
}

?>