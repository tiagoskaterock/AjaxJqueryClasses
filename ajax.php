<hr>

<label>Ajax</label>

<br>

<button class="btn btn-danger mt-2 mb-2" id="btn-ajax">Ajax</button>

<input type="text" name="ajax-input" id="ajax-input" class="form-control" placeholder="Using Ajax here">

<script>
	
	$(document).ready(function() {

		$("#btn-ajax").click(function() {

			let formData = $("#ajax-input").val();

			$.ajax({

				url: "coisas.php",
				data: {name:formData, age:50},
				type: "POST"

			})
			.done(function(responseText, statusText, xhr) {
				$("#saida-ajax").html(formData);
			});

		})

	});

</script>

<div id="saida-ajax"></div>