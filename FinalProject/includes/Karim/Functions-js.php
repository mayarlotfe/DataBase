<script>
    function DropTableStudent() {
			var a=1
	$.post("submit.php", {a:a},
	   function(data) {
		 $('#dvTable').html(data);
	   });
			
			
		}

    function DropTableZoo() {
			var b=1
	$.post("submit.php", {b:b},
	   function(data) {
		 $('#dvTable').html(data);
	   });
	}
	</script>