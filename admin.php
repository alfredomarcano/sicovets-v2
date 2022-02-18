<!DOCTYPE html>
<html>
<head>
	<title>Sicovets - Sistema de Control para Vehiculos de Talleres y Seguros</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="icons/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<nav>
			<figure>
				<img src="img/logo3.png" alt="" class="w-100 h-100">
			</figure>
			<ul>
				<li>
					<i class="bi bi-house"> </i>
					<span>Dashboard</span>
				</li>
				<li>
					<i class="fas fa-car"> </i>
					<span>Revisión</span>
				</li>
				<li>
					<i class="fas fa-office"> </i>
					<span>Recepción</span>
				</li>
				<li>
					<i class="fas fa-user"> </i>
					<span>Distribución</span>
				</li>
				<li>
					<i class="fas fa-user"> </i>
					<span>Estatus</span>
				</li>
				<li>
					<i class="fas fa-user"> </i>
					<span>Entregados</span>
				</li>
				<li>
					<i class="fas fa-user"> </i>
					<span>Ordenes</span>
				</li>
				<li>
					<i class="fas fa-user"> </i>
					<span>Cotizaciones</span>
				</li>
				<li>
					<i class="fas fa-user"> </i>
					<span>Respuesto</span>
				</li>
			</ul>
			<ul>
				<li><a href=""><i class="bi bi-house"></i></a></li>
			</ul>
		</nav>
	</header>
	<section class="contenidos">
		<article>
			<div class="general">
				<div class="top_general container-xxl">
					<div class="top_nav">
						<ul>
							<li class="d-flex justify-content-between">
								<h5>Recibidos</h5>
								<span>15</span>
							</li>
							<li class="d-flex justify-content-between">
								<h5>Entregados</h5>
								<span>15</span>
							</li>
							<li class="d-flex justify-content-between">
								<h5>Ordenes</h5>
								<span>15</span>
							</li>
							<li class="d-flex justify-content-between">
								<h5>Repuestos</h5>
								<span>15</span>
							</li>
						</ul>
					</div>
					<div class="top_recibidos">
						<ul>
							<li>Recepción</li>
							<li><h5>16</h5></li>
						</ul>
					</div>
					<div class="top_despacho">
						<ul>
							<li>Despacho</li>
							<li><h5>16</h5></li>
						</ul>
					</div>
					<div class="top_mecanica">
						<ul>
							<li>Mecanica</li>
							<li><h5>16</h5></li>
						</ul>
					</div>
					<div class="top_latoneria">
						<ul>
							<li>Latoneria</li>
							<li><h5>16</h5></li>
						</ul>
					</div>
					<div class="top_pintura">
						<ul>
							<li>Pintura</li>
							<li><h5>16</h5></li>
						</ul>
					</div>
					<div class="top_pulitura">
						<ul>
							<li>Pulitura</li>
							<li><h5>16</h5></li>
						</ul>
					</div>
				</div>
			</div>
		</article>
		<article class="container-xxl mb-2">
			<div class="row">
				<div class="col-md-3">
					<ul class="bg-white br-2 p-2 rec">
						<li class="text-center">
							<h3>Recepción</h3>
						</li>
							<li id="$i" class="d-flex justify-content-between align-items-center mt-2 rec-items rec-items-active">
								<figure class="mb-0">
									<!-- <img src="" alt=""> -->
									<i class="bi bi-person-circle" style="font-size:2rem"></i>
								</figure>
								<div class="text-end">
									<h5>Carlos Moreno</h5>
									<span>jas</span>
								</div>
							</li>
						<?php for ($i=0; $i < 10; $i++) { ?>
							<li id="$i" class="d-flex justify-content-between align-items-center mt-2 rec-items">
								<figure class="mb-0">
									<!-- <img src="" alt=""> -->
									<i class="bi bi-person-circle" style="font-size:2rem"></i>
								</figure>
								<div class="text-end">
									<h5>Carlos Moreno</h5>
									<span>jas</span>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-md-9">
					<div class="bg-white br-2 p-3 pb-3 rec">
						<div class="br-2 mt-2 px-3 py-2" style="background: #c4c4c423;">
							<h4 class="text-center" style="margin-bottom: 0.5rem;">Datos Personales</h4>
							<div class="row">
								<div class="col-md-4 mb-2">
									<label for="">Nombres</label>
									<input type="text" class="form-control" placeholder="Nombres">
								</div>
								<div class="col-md-4 mb-2">
									<label for="">Apellidos</label>
									<input type="text" class="form-control" placeholder="Apellidos">
								</div>
								<div class="col-md-4 mb-2">
									<label for="">Teléfono</label>
									<input type="text" class="form-control" placeholder="(0) 000-000-0000">
								</div>
								<div class="col-md-1 mb-2">
									<label for="">Doc.</label>
									<select name="" id="" class="form-control">
										<option value="">...</option>
										<option value="">V</option>
										<option value="">E</option>
										<option value="">J</option>
									</select>
								</div>
								<div class="col-md-2 mb-2">
									<label for="">Cedula / Rif</label>
									<input type="text" class="form-control" placeholder="00000000-0">
								</div>
								<div class="col-md-3 mb-2">
									<label for="">Correo</label>
									<input type="text" class="form-control" placeholder="email@mail.com">
								</div>
								<div class="col-md-6 mb-2">
									<label for="">Dirección</label>
									<input type="text" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
								</div>
							</div>
						</div>

						<div class="br-2 mt-2 px-3 py-2" style="background: #c4c4c423;">
							<h4 class="text-center" style="margin-bottom: 0.5rem;">Datos Vehiculo</h4>
							<div class="row">
								<div class="col-md-3 mb-2">
									<label for="">Marca</label>
									<input type="text" class="form-control" placeholder="text content">
								</div>
								<div class="col-md-4 mb-2">
									<label for="">Modelo</label>
									<input type="text" class="form-control" placeholder="text content">
								</div>
								<div class="col-md-2 mb-2">
									<label for="">Año</label>
									<input type="text" class="form-control" placeholder="text content">
								</div>
								<div class="col-md-3 mb-2">
									<label for="">Color</label>
									<input type="text" class="form-control" placeholder="text content">
								</div>
								<div class="col-md-3 mb-2">
									<label for="">Placa</label>
									<input type="text" class="form-control" placeholder="text content">
								</div>
								<div class="col-md-3 mb-2">
									<label for="">Serial</label>
									<input type="text" class="form-control" placeholder="text content">
								</div>
								<div class="col-md-3 mb-2">
									<label for="">Kilometrajes</label>
									<input type="text" class="form-control" placeholder="text content">
								</div>
								<div class="col-md-3 mb-2">
									<label for="">Fecha Recepción</label>
									<input type="text" class="form-control" placeholder="text content">
								</div>
							</div>
						</div>

						<div class="br-2 mt-2 px-3 py-2" style="background: #c4c4c423;">
							<h4 class="text-center" style="margin-bottom: 0.5rem;">Funcionamientos del Vehiculo</h4>
							<div class="row">
								<div class="col-md-4 mb-2">
									<div class="row">
										<div class="col-md-6">
											<label for="">Title</label>
											<input type="text" class="form-control" placeholder="text content">
										</div>
										<div class="col-md-6">
											<label for="">Title</label>
											<input type="text" class="form-control" placeholder="text content">
										</div>
										<div class="col-md-6">
											<label for="">Title</label>
											<input type="text" class="form-control" placeholder="text content">
										</div>
										<div class="col-md-6">
											<label for="">Title</label>
											<input type="text" class="form-control" placeholder="text content">
										</div>
										<div class="col-md-6">
											<label for="">Title</label>
											<input type="text" class="form-control" placeholder="text content">
										</div>
										<div class="col-md-6">
											<label for="">Title</label>
											<input type="text" class="form-control" placeholder="text content">
										</div>
										<div class="col-md-6">
											<label for="">Title</label>
											<input type="text" class="form-control" placeholder="text content">
										</div>
										<div class="col-md-6">
											<label for="">Title</label>
											<input type="text" class="form-control" placeholder="text content">
										</div>
										<div class="col-md-6">
											<label for="">Title</label>
											<input type="text" class="form-control" placeholder="text content">
										</div>
										<div class="col-md-6">
											<label for="">Title</label>
											<input type="text" class="form-control" placeholder="text content">
										</div>
										<div class="col-md-6">
											<label for="">Title</label>
											<input type="text" class="form-control" placeholder="text content">
										</div>
										<div class="col-md-6">
											<label for="">Title</label>
											<input type="text" class="form-control" placeholder="text content">
										</div>
									</div>
								</div>
								<div class="col-md-8 mb-2">
									<label for="">Estado del Vehiculo</label>
									<figure class="bg-white">
										<img src="" alt="">
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="container-xxl">
				<div class="row">
					<div class="col-md-4 p-3">
						<div class="bg-white p-2 h-100">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quae cupiditate quidem non consequatur delectus eius, vero nam totam, quibusdam nobis repellendus, iste amet cum rerum dolor error, molestias harum.
						</div>
					</div>
					<div class="col-md-4 p-3">
						<div class="bg-white p-2 h-100">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur fugit voluptates officiis dolores modi, ab facilis, quam, laboriosam quisquam animi rerum voluptate iste dolor. Veritatis deleniti nam tempora vel culpa.
						</div>
					</div>
					<div class="col-md-4 p-3">
						<div class="bg-white p-2 h-100">
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, laborum omnis. Quam, molestiae quaerat, dignissimos tempora praesentium numquam dicta explicabo voluptatibus aut assumenda, quae eos quo commodi est, eveniet eius!
						</div>
					</div>
				</div>
			</div> -->
		</article>
	</section>
	<footer>
		<ul>
			<li>lorem</li>
			<li>lorem</li>
			<li>lorem</li>
			<li>lorem</li>
		</ul>
	</footer>
</body>
</html>