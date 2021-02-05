

					
			<script>
			
	$(document).ready(function(){
		LoadData(0);
	});
function LoadData(pagenum){
	$.post('testing?p='+pagenum, function(reponse){
		$('#results').html(reponse);
	});
}
</script>
		
		
		