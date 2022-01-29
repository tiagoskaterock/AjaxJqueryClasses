<input type="text" name="myName" id="myName" class="form-control mt-4" placeholder="Name">
<input type="text" name="myAge" id="myAge" class="form-control mt-4" placeholder="Age">

<button class="btn btn-warning mt-2" id="btn3">Click here</button>

<div id="pessoa"></div>

<script>

	$(document).ready( function() {

		$("#btn3").click(function() {

			let nome = $("#myName").val();
			let idade = $("#myAge").val();

			$.post("content.php", {
				name:nome, age:idade
			}, 
			function(responseText, statusText, xhr) {
				// console.log(responseText);
				$('#pessoa').html(responseText);
			});



		});

	});

</script>