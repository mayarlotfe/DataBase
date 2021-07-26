<script>
function deleteTable(col,cond,table) {
			var cond=cond;
			var col=col;
			var table=table;
			console.log(cond);
			console.log(col);

			
	$.post("includes/Mohammad/Submit.php", {col:col,cond:cond,table:table},
	   function(data) {
		   console.log(data);
		 $('#dvTable').html(data);
	   });
	}
	
	function tranqTable(col,cond,table) {
			var cond=cond;
			var col="tranquate";
			var table=table;
			
	$.post("includes/Mohammad/Submit.php", {col:col,cond:cond,table:table},
	   function(data) {
		   console.log(data);
		 $('#dvTable').html(data);
		
	   });
	}
	</script>