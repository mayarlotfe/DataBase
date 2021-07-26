<script>
function selectTable(col,cond,table) {
			var cond=cond;
			var col=col;
			var table=table;
			console.log(cond);
	$.post("Submit.php", {col:col,cond:cond,table:table},
	   function(data) {
		 $('#dvTable').html(data);
	   });
	}
	function selectSTable(col,cond,table) {
			var cond=cond;
			var col=col;
			var table=table;
			console.log(cond);
	$.post("Submit.php", {col:col,cond:cond,table:table},
	   function(data) {
		 $('#dvTable').html(data);
	   });
	}
	</script>