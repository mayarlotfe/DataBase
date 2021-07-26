<script>
    function GenerateTableStudent() {
			var s=1
	$.post("submit.php", {s:s},
	   function(data) {
		 $('#dvTable').html(data);
	   });
			
			
		}

    function GenerateTableZoo() {
			var z=1
	$.post("submit.php", {z:z},
	   function(data) {
		 $('#dvTable').html(data);
	   });
	}
	</script>