<div id="output">Some content</div>

<script>
	// página carregada
	$(document).ready(function() {

		$("#data").load("data.php");

		// botão clicado
		$("#button").click(function() {

			// mudando saída
			// $("#output").html("Button working");

			// iniciar ajax aqui
			$("#output").load("content.phpp", function(responseText, statusText, xhr) {
				console.log(responseText);
				if (statusText == "error") {
					$("#output").html("NOT FOUND");
				}
				console.log(statusText);
				console.log(xhr);
			});
			
		});

		// Atualizar a cada 3 décimos de segundo
		setInterval(function () {
			$("#data").load("data.php");
		}, 1000);


	});
</script>