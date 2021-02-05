<?php include 'includes/head.php';?>

<div id="results"></div>




<?php include 'includes/footer.php';?>


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