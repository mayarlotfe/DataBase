<?php
if (isset($s)) {
   echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>age</th>";
                echo "<th>class</th>";
				echo "<th>year</th>";
            echo "</tr>";
	echo "</table>";
	createTableStudent();
}
if (isset($z)) {
   echo "<table>";
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>age</th>";
            echo "</tr>";
	echo "</table>";
	createTableZoo();
}
function createTableStudent(){
	$conn = OpenCon();
	$sql = "CREATE TABLE Students (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	age INT(9) NOT NULL,
	class VARCHAR(50),
	year INT(4) NOT NULL
)";
mysqli_query($conn, $sql);
mysqli_close($conn);
}
function createTableZoo(){
	$conn = OpenCon();
	$sql = "CREATE TABLE Zoo (
	name VARCHAR(30) NOT NULL,
	age INT(9) NOT NULL
)";
mysqli_query($conn, $sql);
mysqli_close($conn);
}

?>