<div id="json"></div>


<script>
	$(document).ready(function() {

		$('#btn-json').click(function() {

			let myOut = "";

			$.getJSON('json.json', function(rText) {

				$.each(rText, function(a, Obj) {

					myOut = myOut + Obj.id + ", " + Obj.name + ", " + Obj.email + "<br>";

				});

				$("#json").html(myOut);

			});


		});



		
	});
</script>