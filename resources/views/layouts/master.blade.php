<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<title> @yield('title') || RestaurantSystem</title>
</head>
<body>
	<div id="wrapper" class="d-flex">
		<div id="siderbar-wrapper" class="border-end bg-white">
			<div class="sidebar-heading border-bottom bg-light">Nombre Restaurant</div>
			<div class="list-group list-group-flush">
				<a href="" class="list-group-item list-group-item-action list-group-item-light p-3">
					Dashboard
				</a>
				<a href="" class="list-group-item list-group-item-action list-group-item-light p-3">
					Ordenes
				</a>
				<a href="" class="list-group-item list-group-item-action list-group-item-light p-3">
					Clientes
				</a>
				<a href="" class="list-group-item list-group-item-action list-group-item-light p-3">
					Empleados
				</a>
				<a href="" class="list-group-item list-group-item-action list-group-item-light p-3">
					Configuracion
				</a>
				<a href="" class="list-group-item list-group-item-action list-group-item-light p-3">
					Salir
				</a>
			</div>
		</div>
	</div>


	@yield('content')


	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>