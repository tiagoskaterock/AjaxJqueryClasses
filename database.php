<hr class="mt-4">

<h6>Using Ajax with Post and PHP to connect to a Database</h6>

<p id="mensagem" class="p-2 bg-success text-light rounded font-weight-bolder">Message</p>

<input type="text" name="ajax-input-database-first-name" id="ajax-input-database-first-name" class="form-control mb-2" placeholder="First Name">

<input type="text" name="ajax-input-database-last-name" id="ajax-input-database-last-name" class="form-control mb-2" placeholder="Last Name">

<input type="text" name="ajax-input-database-age" id="ajax-input-database-age" class="form-control mb-2" placeholder="Age">


<button class="btn btn-success mt-3 mb-2" id="btn-ajax-database">Database Ajax</button>

<p id="saida-ajax-database"></p>

<script>

	$(document).ready(function() {

		function limpa_mensagem() {
			$("#mensagem").addClass("d-none");
		}

		function limpa_form() {
			$("#ajax-input-database-first-name").val("");
			$("#ajax-input-database-last-name").val("");
			$("#ajax-input-database-age").val("");
		}

		function mostra_mensagem() {
			$("#mensagem").removeClass("d-none");
			$("#mensagem").removeClass("bg-warning");			
			$("#mensagem").addClass("bg-success");			
		}

		function mostra_mensagem_de_erro() {
			$("#mensagem").removeClass("d-none");			
			$("#mensagem").removeClass("bg-success");			
			$("#mensagem").addClass("bg-warning");
			if (true) {}			
			$("#mensagem").html("Todos campos precisam estar preenchidos");			
		}

		$("#ajax-input-database-first-name").click(function() {
			limpa_mensagem();
		});

		$("#ajax-input-database-last-name").click(function() {
			limpa_mensagem();
		});

		$("#ajax-input-database-age").click(function() {
			limpa_mensagem();
		});

		limpa_mensagem();

		$("#btn-ajax-database").click(function() {

			let first_name = $("#ajax-input-database-first-name").val();
			let last_name = $("#ajax-input-database-last-name").val();
			let age = $("#ajax-input-database-age").val();

			if (first_name != "" && last_name != "" && age != "") {
				$.ajax({
					url: "conn.php",
					data: {first_name:first_name, last_name:last_name, age:age},
					type: "POST"
				})

				.done(function(responseText, statusText, xhr) {
					mostra_mensagem();
					$("#mensagem").html("Added: " + first_name + " " + last_name + ", " + age + " years old.");
					limpa_form();
				});

			}
			else {
				mostra_mensagem_de_erro();
			}


		});

	});

</script>