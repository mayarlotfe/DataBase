<?php
if (isset($name)){
	if(isset($year)) {
    echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>age</th>";
                echo "<th>class</th>";
				echo "<th>year</th>";
            echo "</tr>";
				insertTableStudent();
	showstudents();
	echo "</table>";

}
else
{
	 echo "<table>";
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>age</th>";
            echo "</tr>";
				insertTableZoo();
	showzoo();
	echo "</table>";
	
}
}
function insertTableStudent(){
	$n =$_POST['name'];
	$a =$_POST['age'];
	$c =$_POST['classe'];
	$y =$_POST['year'];
	
	$conn = OpenCon();
	$sql = "INSERT INTO students(name,age,class,year)
VALUES ('$n','$a','$c','$y');";
mysqli_query($conn, $sql);
mysqli_close($conn);
}

function showstudents()
{
	$conn = OpenCon();
	$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr>"
          ."<td>". $row["id"]."</td>"
	     ."<td>" . $row["name"]. "</td>" 
		 ."<td>". $row["age"]. "</td>"
		 ."<td>". $row["class"]. "</td>"
		 ."<td>". $row["year"]. "</td>"
		 ."</tr>";
  ;}
} 
}
function insertTableZoo(){
	$n =$_POST['name'];
	$a =$_POST['age'];
	
	$conn = OpenCon();
	$sql = "INSERT INTO zoo(name,age)
VALUES ('$n','$a');";
mysqli_query($conn, $sql);
mysqli_close($conn);
}
function showzoo()
{
	$conn = OpenCon();
	$sql = "SELECT * FROM zoo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr>"
	     ."<td>" . $row["name"]. "</td>" 
		 ."<td>". $row["age"]. "</td>"
		 ."</tr>";
  ;}
}
mysqli_close($conn);
}
?>