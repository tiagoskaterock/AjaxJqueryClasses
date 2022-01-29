<button class="btn btn-primary mt-2" id="btn-json2">Json 2</button>

<div id="json2"></div>


<script>
	$(document).ready(function() {

		$('#btn-json2').click(function() {

			let myOut = "";

			$.getJSON('json2.json', function(rText) {

				$.each(rText, function(a, Obj) {

					myOut = myOut + Obj.id + ", " + Obj.name + ", " + Obj.email + "<br>";

				});

				$("#json2").html(myOut);

			});


		});



		
	});
</script>