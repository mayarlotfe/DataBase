<?php

if(isset($col)&&isset($cond)&&isset($table))
{
	if($table=="students")
	{
		if($col=="*")
		{
			echo "<table>";
			 echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>age</th>";
				echo "<th>class</th>";
				echo "<th>year</th>";
            echo "</tr>";
			selectfromstudent();
	echo "</table>";
		}
		if($col=="id")
		{
			echo "<table>";
			echo "<tr>";
                echo "<th>id</th>";
            echo "</tr>";
			selectfromstudentid();
	echo "</table>";
		}
		if($col=="name")
		{
			echo "<table>";
				echo "<tr>";
                echo "<th>name</th>";
            echo "</tr>";
			selectfromstudentname();
	echo "</table>";
		}
		if($col=="age")
		{
			echo "<table>";
			echo "<tr>";
                echo "<th>age</th>";
            echo "</tr>";
			selectfromstudentage();
	echo "</table>";
			
		}
		if($col=="class")
		{
			echo "<table>";
			echo "<tr>";
                echo "<th>class</th>";
			
            echo "</tr>";
			selectfromstudentclass();
	echo "</table>";
		}
		if($col=="year")
		{
			echo "<table>";
			echo "<tr>";
				echo "<th>year</th>";
            echo "</tr>";
			selectfromstudentyear();
	echo "</table>";
		}
		
	}
	else
	{
		if($table=="zoo")
		{
			if($col=="*")
			{
				echo "<table>";
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>age</th>";
            echo "</tr>";
			selectfromzoo();
			}
			if($col=="name")
			{
					echo "<table>";
            echo "<tr>";
                echo "<th>name</th>";
            echo "</tr>";
			selectfromzooname();
			}
			if($col=="age")
			{
					echo "<table>";
            echo "<tr>";
                echo "<th>age</th>";
            echo "</tr>";
			selectfromzooage();
			}
			
			echo "</table>";
		}
	}
}

function selectfromzoo()
{
	$conn = OpenCon();
	$c=$_POST['col'];
	$w=$_POST['cond'];
	$sql = "SELECT ".$c." FROM zoo where ".$w;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr>"
	     ."<td>" .$row["name"]. "</td>" 
		 ."<td>".$row["age"]. "</td>"
		 ."</tr>";
  ;}
mysqli_close($conn);
}
}
function selectfromzooname()
{
	$conn = OpenCon();
	$c=$_POST['col'];
	$w=$_POST['cond'];
	$sql = "SELECT ".$c." FROM zoo where ".$w;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr>"
	     ."<td>" .$row["name"]. "</td>" 
		 ."</tr>";
  ;}
}
mysqli_close($conn);
}
function selectfromzooage()
{
	$conn = OpenCon();
	$c=$_POST['col'];
	$w=$_POST['cond'];
	$sql = "SELECT ".$c." FROM zoo where ".$w;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr>"
		 ."<td>".$row["age"]. "</td>"
		 ."</tr>";
  ;}
}
mysqli_close($conn);
}
function selectfromstudent()
{
	$conn = OpenCon();
	$c=$_POST['col'];
	$w=$_POST['cond'];
	$sql = "SELECT ".$c." FROM students where ".$w;
	echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	 echo "<tr>"
	     ."<td>" . $row["id"]. "</td>" 
		 ."<td>". $row["name"]. "</td>"
		 ."<td>". $row["age"]. "</td>"
		 ."<td>". $row["class"]. "</td>"
		 ."<td>". $row["year"]. "</td>"
		 ."</tr>";
  ;}
}
mysqli_close($conn);
}
function selectfromstudentid()
{
	$conn = OpenCon();
	$c=$_POST['col'];
	$w=$_POST['cond'];
	$sql = "SELECT ".$c." FROM students where ".$w;
	
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	 echo "<tr>"
	     ."<td>" . $row["id"]. "</td>" 
		 ."</tr>";
  ;}
}
mysqli_close($conn);
}
function selectfromstudentname()
{
	$conn = OpenCon();
	$c=$_POST['col'];
	$w=$_POST['cond'];
	$sql = "SELECT ".$c." FROM students where ".$w;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr>" 
		 ."<td>". $row["name"]. "</td>"
		 ."</tr>";
  ;}
}
mysqli_close($conn);
}
function selectfromstudentage()
{
	$conn = OpenCon();
	$c=$_POST['col'];
	$w=$_POST['cond'];
	$sql = "SELECT ".$c." FROM students where ".$w;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	 echo "<tr>"
		 ."<td>". $row["age"]. "</td>"
		 ."</tr>";
  ;}
}
mysqli_close($conn);
}
function selectfromstudentyear()
{
	$conn = OpenCon();
	$c=$_POST['col'];
	$w=$_POST['cond'];
	$sql = "SELECT ".$c." FROM students where ".$w;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	 echo "<tr>"
		 ."<td>". $row["year"]. "</td>"
		 ."</tr>";
  ;}
}
mysqli_close($conn);
}
function selectfromstudentclass()
{
	$conn = OpenCon();
	$c=$_POST['col'];
	$w=$_POST['cond'];
	$sql = "SELECT ".$c." FROM students where ".$w;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	 echo "<tr>"
		 ."<td>". $row["class"]. "</td>"
		 ."</tr>";
  ;}
}
mysqli_close($conn);
}

?>