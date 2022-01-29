<div id="output">Some content</div>

<script>
	// página carregada
	$(document).ready(function() {

		$("#data").load("data.php");

		// botão clicado
		$("#button").click(function() {

			$.post("content.php", {
				name:"John", age:"34"
			}, 
			function(responseText, statusText, xhr) {
				// console.log(responseText);
				$('#output').html(responseText);
			});

			// mudando saída
			// $("#output").html("Button working");

			// usando ajax com método get()
			/*
			$.get("content.php", function(responseText, statusText, xhr) {
				console.log(responseText);
				if (statusText == "error") {
					$("#output").html("NOT FOUND");
				}
				console.log(statusText);
				console.log(xhr);
				$("#output").html(responseText);
			});
			*/

			// iniciar ajax aqui com método load()
			/*
			$("#output").load("content.php", function(responseText, statusText, xhr) {
				console.log(responseText);
				if (statusText == "error") {
					$("#output").html("NOT FOUND");
				}
				console.log(statusText);
				console.log(xhr);
			});
			*/
			
		});

		// Atualizar a cada 3 décimos de segundo
		// setInterval(function () {
		// 	$("#data").load("data.php");
		// }, 1000);


	});
</script>