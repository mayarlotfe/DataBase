<script>
function insertTableStudents(name,age,classe,year) {
		console.log("hena");
			var name=name;
			var age=age;
			var classe=classe;
			var year=year;
	$.post("submit.php", {name:name,age:age,classe:classe,year:year},
	   function(data) {
		 $('#dvTable').html(data);
	   });
	}
	function insertTableZoo(name,age) {
		console.log("hena");
			var name=name;
			var age=age;
	$.post("submit.php", {name:name,age:age},
	   function(data) {
		 $('#dvTable').html(data);
	   });
	}
</script>