<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	</head>
	<body>
		
		<?php 

			foreach ($articulos as &$articulo) {
				echo '<div class="row">
						<div class="col s12 m6">
							<div class="card blue-grey darken-1">
								<div class="card-content white-text">
									<span class="card-title">'.$articulo["descripcion"].'</span>
									<p>Esta es la descripcion del articulo'.$articulo["descripcion"].'.</p>
								</div>
								<div class="card-action">
									<a href="#">USD '.$articulo["precio"].'</a>
									<a onclick="agregar_articulo('.$articulo["id_articulo"].')" href="#">Agregar</a>
								</div>
							</div>
						</div>
					</div>';
 			  	
			}





		?>

		<a onclick="pagar()" class="waves-effect waves-light btn"><i class="material-icons left"></i>Pagar</a>
		
		

<!-- <div class="row">
			<div class="col s12 m6">
				<div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<span class="card-title">Card Title</span>
						<p>I am a very simple card. I am good at containing small bits of information.
						I am convenient because I require little markup to use effectively.</p>
					</div>
					<div class="card-action">
						<a href="#">This is a link</a>
						<a href="#">This is a link</a>
					</div>
				</div>
			</div>
		</div> -->

	<script>
		// (function() {
			var carrito = [];

			function agregar_articulo(id_articulo) {
				carrito.push({
					'id_articulo' : id_articulo,
					'cantidad' : 0
					});
			};
			   // your page initialization code here
			   // the DOM will be available here

			// })();
		function pagar() {
			var ajax = new XMLHttpRequest();
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4 && ajax.status == 200) {
					var response = ajax.responseText;
				}
			};
			ajax.open("POST", URL, true);
			ajax.setRequestHeader("Content-type", "application/json");
			ajax.send(carrito);
		    
		}
	</script>
	</body>
</html>