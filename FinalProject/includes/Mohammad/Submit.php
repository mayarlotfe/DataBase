



<?php
//<?php print_r($_POST); 
	$s = @$_POST['s'];
	$z = @$_POST['z'];
	$name = @$_POST['name'];
	$age = @$_POST['age'];
	$classe = @$_POST['classe'];
	$year = @$_POST['year'];
	$col = @$_POST['col'];
	$cond= @$_POST['cond'];
	$table= @$_POST['table'];	
?>


<?php
function OpenCon(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "project";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
	
return $conn;
}
?>



<?php



if(isset($col)&&isset($cond)&&isset($table))
{
	//tranquate students
	if($table=="s"){
		deleteallstudents();

	echo "Tranquated succesfully :) <br /> <br> Table is now empty. <br /> <br>";
	echo "<table>";
	echo "<tr>";
		echo "<th>id</th>";
		echo "<th>name</th>";
		echo "<th>age</th>";
		echo "<th>class</th>";
		echo "<th>year</th>";
	echo "</tr>";
	echo "</table>";


	}

	//tranquate zoo
	if($table=="z"){
		deleteallzoo();

	echo "Tranquated succesfully :) <br /> <br> Table is now empty. <br /> <br>";
	echo "<table>";
	echo "<tr>";
		echo "<th>name</th>";
		echo "<th>age</th>";

	echo "</tr>";
	echo "</table>";


	}
	

	//delete rows from table students
	if($table=="students")
	{
		if($col=="name"||$col=="age"||$col=="class"||$col=="year"||$col=="id")
		{
			if($cond==""){
				echo "condition is not specified, please add condition, example: age = 5 , id = 1 , name = ahmad ...etc <br /> <br>";
			}
			deletefromstudents();
			echo "<table>";
			 echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>age</th>";
				echo "<th>class</th>";
				echo "<th>year</th>";
            echo "</tr>";
			showremainingstudents();
			
			echo "</table>";
		}
		else
			{
			echo "column name is not found, please add a valid column name";
			echo "<br /> column names available : id , name , age , class , year<br>";
			}
		
		
	}
	
	
		//delete rows from table zoo
		if($table=="zoo")
		{	
			if($col=="name"||$col=="age"){
			
				if($cond==""){
					echo "condition is not specified, please add condition, example: age = 5 , name = lion ...etc <br /> <br>";
				}

				deletefromzoo();
				
				
				echo "<table>";
				echo "<tr>";
					echo "<th>name</th>";
					echo "<th>age</th>";
				echo "</tr>";
				showremainingzoo();

				echo "</table>";
	
				

			}else{
				echo "column name is not found, please add a valid column name";
				echo "<br /> column names available : name , age<br>";
			}

			
			
		}
	

}


function deletefromzoo()
{
	$conn = OpenCon();
	$c=$_POST['col'];
	$w=$_POST['cond'];
	$sql = "DELETE FROM zoo where ".$c."=".$w;
$result = $conn->query($sql);

echo "Done :) <br /> <br> any row having ".$c."=".$w." was deleted succesfully. (if found) <br /> <br> Here is the table's current state shown below:-<br /> <br>";


mysqli_close($conn);
}

function deleteallzoo()
{
	$conn = OpenCon();

	$sql = "TRUNCATE TABLE zoo";
$result = $conn->query($sql);


  mysqli_close($conn);
  

}


function showremainingzoo()
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
 
}else{
	echo "Table is currently empty! <br /> <br>";
}

mysqli_close($conn);
}


function deletefromstudents()
{
	$conn = OpenCon();
	$c=$_POST['col'];
	$w=$_POST['cond'];
	$sql = "DELETE FROM students where ".$c."=".$w;
$result = $conn->query($sql);

echo "Done :) <br /> <br> any row having ".$c."=".$w." was deleted succesfully. (if found) <br /> <br> Here is the table's current state shown below:-<br /> <br>";

mysqli_close($conn);
}

function deleteallstudents()
{
	$conn = OpenCon();

	$sql = "TRUNCATE TABLE students";
$result = $conn->query($sql);


  mysqli_close($conn);
  

}

function showremainingstudents()
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
 
}else{
	echo "Table is currently empty! <br /> <br>";
}

mysqli_close($conn);
}




?>