<div id="data">

	<?php 
	
	  echo date("d-m-Y H:i:s");    	
	
	?>

</div>

<script>
	// página carregada
	$(document).ready(function() {

		// Atualizar a cada  segundo
		setInterval(function () {
			$("#data").load("data.php");
		}, 1000);

	});
</script>