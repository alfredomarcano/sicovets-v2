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
		<article class="container-xxl">
			<div id="recepciones" class="mb-3">
				<div class="row">
					<div class="col-md-3">
						<ul class="bg-white br-2 p-2 rec">
							<li class="text-center d-flex justify-content-between align-items-center">
								<h3>Recepción</h3><h6><?php echo date('d-m-Y'); ?></h6>
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
								<h4 class="text-center mb-3" style="margin-bottom: 0.5rem;">Funcionamientos del Vehiculo</h4>
								<div class="row">
									<div class="col-md-5 mb-2">
										<div class="row func-veh">
											<div class="col-md-4 text-center mb-3">
												<select name="" id="" class="form-control">
													<option value="" selected="selected" disabled="disabled">Llaves</option>
													<option value="">Llave y Control</option>
													<option value="">Llave</option>
												</select>
											</div>
											<div class="col-md-4 text-center mb-3">
												<select name="" id="" class="form-control">
													<option value="" selected="selected" disabled="disabled">Radio</option>
													<option value="">Completo</option>
													<option value="">Sin frontal</option>
													<option value="">No Funciona</option>
												</select>
											</div>
											<div class="col-md-4 text-center mb-3">
												<select name="" id="" class="form-control">
													<option value="" selected="selected" disabled="disabled">Estinguidor</option>
													<option value="">Completo</option>
													<option value="">Sin Presinto</option>
													<option value="">No Hay</option>
												</select>
											</div>
											<div class="col-md-12 text-center mb-3">
												<ul class="d-flex mb-0 w-100 justify-content-between">
													<li>
														<select name="" id="" class="form-control">
															<option value="" selected="selected" disabled="disabled">Luz DR</option>
															<option value="">100%</option>
															<option value="">75%</option>
															<option value="">50%</option>
															<option value="">25%</option>
															<option value="">0%</option>
														</select>
													</li>
													<li>
														<select name="" id="" class="form-control">
															<option value="" selected="selected" disabled="disabled">Luz DL</option>
															<option value="">100%</option>
															<option value="">75%</option>
															<option value="">50%</option>
															<option value="">25%</option>
															<option value="">0%</option>
														</select>
													</li>
													<li>
														<select name="" id="" class="form-control">
															<option value="" selected="selected" disabled="disabled">Luz TR</option>
															<option value="">100%</option>
															<option value="">75%</option>
															<option value="">50%</option>
															<option value="">25%</option>
															<option value="">0%</option>
														</select>
													</li>
													<li>
														<select name="" id="" class="form-control">
															<option value="" selected="selected" disabled="disabled">Luz TL</option>
															<option value="">100%</option>
															<option value="">75%</option>
															<option value="">50%</option>
															<option value="">25%</option>
															<option value="">0%</option>
														</select>
													</li>
												</ul>
											</div>
											<div class="col-md-12 text-center mb-3">
												<ul class="d-flex mb-0 w-100 justify-content-between">
													<li>
														<select name="" id="" class="form-control">
															<option value="" selected="selected" disabled="disabled">Espejo LR</option>
															<option value="">Completo</option>
															<option value="">Sin Vidrio</option>
															<option value="">Sin Tapa</option>
															<option value="">Sin Cruce</option>
															<option value="">No Hay</option>
														</select>
													</li>
													<li>
														<select name="" id="" class="form-control">
															<option value="" selected="selected" disabled="disabled">Espejo LI</option>
															<option value="">Completo</option>
															<option value="">Sin Vidrio</option>
															<option value="">Sin Tapa</option>
															<option value="">Sin Cruce</option>
															<option value="">No Hay</option>
														</select>
													</li>
													<li>
														<select name="" id="" class="form-control">
															<option value="" selected="selected" disabled="disabled">Espejo Cen</option>
															<option value="">Completo</option>
															<option value="">Sin Vidrio</option>
															<option value="">Sin Gancho</option>
															<option value="">No Hay</option>
														</select>
													</li>
												</ul>
											</div>
											<div class="col-md-4 text-center mb-3">
												<select name="" id="" class="form-control">
													<option value="" selected="selected" disabled="disabled">Gato</option>
													<option value="">Si</option>
													<option value="">No</option>
												</select>
											</div>
											<div class="col-md-4 text-center mb-3">
												<select name="" id="" class="form-control">
													<option value="" selected="selected" disabled="disabled">Llave Cruz</option>
													<option value="">Si</option>
													<option value="">No</option>
												</select>
											</div>
											<div class="col-md-4 text-center mb-3">
												<select name="" id="" class="form-control">
													<option value="" selected="selected" disabled="disabled">Herramientas</option>
													<option value="">Si</option>
													<option value="">No</option>
												</select>
											</div>
											<div class="col-md-4 text-center mb-3">
												<select name="" id="" class="form-control">
													<option value="" selected="selected" disabled="disabled">Caucho Emer</option>
													<option value="">Completo</option>
													<option value="">Desinflado</option>
													<option value="">Sin caucho</option>
													<option value="">No</option>
												</select>
											</div>
											<div class="col-md-4 text-center mb-3">
												<select name="" id="" class="form-control">
													<option value="" selected="selected" disabled="disabled">Limpia Par</option>
													<option value="">Ambos</option>
													<option value="">Cepillo LD</option>
													<option value="">Cepillo LI</option>
													<option value="">No hay</option>
												</select>
											</div>
											<div class="col-md-4 text-center mb-3">
												<select name="" id="" class="form-control">
													<option value="" selected="selected" disabled="disabled">Tapa Caucho</option>
													<option value="">4 tapas</option>
													<option value="">3 tapas</option>
													<option value="">2 tapas</option>
													<option value="">1 tapas</option>
													<option value="">No Hay</option>
												</select>
											</div>
											<div class="col-md-6 text-center mb-3">
												<select name="" id="" class="form-control">
													<option value="" selected="selected" disabled="disabled">Combustible Gasolina</option>
													<option value="">Full</option>
													<option value="">3/4</option>
													<option value="">1/2</option>
													<option value="">1/4</option>
													<option value="">Reserva</option>
													<option value="">No tiene</option>
												</select>
											</div>
											<div class="col-md-6 text-center mb-3">
												<select name="" id="" class="form-control">
													<option value="" selected="selected" disabled="disabled">Combustible Gas</option>
													<option value="">Full</option>
													<option value="">3/4</option>
													<option value="">1/2</option>
													<option value="">1/4</option>
													<option value="">Reserva</option>
													<option value="">No tiene</option>
												</select>
											</div>
										</div>
										<table class="table table-striped">
											<thead>
												<tr>
													<th>#</th>
													<th>Descripcion</th>
													<th class="w-25">Acción</th>
												</tr>
											</thead>
											<tbody>
												<?php for ($i=0; $i < 12; $i++) { ?>
													<tr id="$i">
														<td><?php echo $i+1; ?></td>
														<td></td>
														<td>
															<input class="form-check-input bg-green" type="checkbox" id="inlineCheckbox1" value="option1">
															<input class="form-check-input bg-yellow" type="checkbox" id="inlineCheckbox2" value="option2">
															<input class="form-check-input bg-red" type="checkbox" id="inlineCheckbox3" value="option3">
														</td>
													</tr>0
												<?php } ?>
											</tbody>
										</table>
									</div>
									<div class="col-md-7 mb-2 text-center">
										<label for="" class="">Detalles Vehiculo</label>
										<figure class="bg-white">
											<img src="img/Car-seccion.jpg" alt="" class="w-100 h-100">
										</figure>
									</div>
								</div>
							</div>
							<div class="br-2 mt-2 px-3 py-2" style="background: #c4c4c423;">
								<h4 class="text-center mb-3" style="margin-bottom: 0.5rem;">Fotos</h4>
								<div class="galery-vehiculo">
									<?php for($j=0; $j < 8; $j++){ ?>
										<figure id="$j">
											<!-- <img src="" alt=""> -->
											<i class="bi bi-images"></i>
										</figure>
									<?php } ?>
								</div>
							</div>
							<div class="br-2 mt-2 px-3 py-2" style="background: #c4c4c423;">
								<div class="row">
									<div class="col-md-7">
										<h4 class="text-center" style="margin-bottom: 0.5rem;">Observacion</h4>
										<textarea class="form-control mb-2" name="" id="" cols="30" rows="15"></textarea>
									</div>
									<div class="col-md-5 text-center">
										<h4 for="">Firma Cliente</h4>
										<figure class="bg-white" style="height: 8rem;">
											<img src="" alt="">
										</figure>
										<h4 for="">Firma Encargado</h4>
										<figure class="bg-white" style="height: 8rem;">
											<img src="" alt="">
										</figure>
									</div>
								</div>
							</div>
							<div class="br-2 mt-2 px-3 py-2" style="background: #c4c4c423;">
								<ul class="d-flex justify-content-between mb-0">
									<li class="d-flex justify-content-between align-items-center">
										<span class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalAsignacion">Asignar</span>
										<span style="font-size: 1.3rem; padding-left: 10px">
											<i class="bi bi-x-circle circle-active" style="color: red;"></i>
											<i class="bi bi-check-circle circle-disabled" style="color: green"></i>
										</span>
									</li>
									<li>
										<button class="btn btn-primary">Guardar</button>
										<span class="btn btn-danger">Cancelar</span>
									</li>
								</div>
							</div>

							<!-- Modal para asignar los trabajos a realizar -->
							<div id="ModalAsignacion" class="modal">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
									        <h5 class="modal-title">Asignaciones</h5>
									        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									    </div>
									    <div class="modal-body">
											<div class="row">
												<div class="col-md-6">
													<label for="">Mecanico</label>
													<select name="" id="" class="form-control">
														<option value="" disabled="disabled" selected="selected">Selecciona</option>
														<option value="">
															<span>(6)</span><h5>Jorge Gomez</h5>
														</option>
														<option value="">
															<span>(3)</span><h5>Raul Martinez</h5>
														</option>
														<option value="">
															<span>(2)</span><h5>Gerardo Lopez</h5>
														</option>
														<option value="">
															<span>(7)</span><h5>Carlos Perez</h5>
														</option>
													</select>
												</div>
												<div class="col-md-6">
													<label for="">Latonería</label>
													<select name="" id="" class="form-control">
														<option value="" disabled="disabled" selected="selected">Selecciona</option>
														<option value="">
															<span>(6)</span><h5>Jorge Gomez</h5>
														</option>
														<option value="">
															<span>(3)</span><h5>Raul Martinez</h5>
														</option>
														<option value="">
															<span>(2)</span><h5>Gerardo Lopez</h5>
														</option>
														<option value="">
															<span>(7)</span><h5>Carlos Perez</h5>
														</option>
													</select>
												</div>
												<div class="col-md-6">
													<label for="">Pintura</label>
													<select name="" id="" class="form-control">
														<option value="" disabled="disabled" selected="selected">Selecciona</option>
														<option value="">
															<span>(6)</span><h5>Jorge Gomez</h5>
														</option>
														<option value="">
															<span>(3)</span><h5>Raul Martinez</h5>
														</option>
														<option value="">
															<span>(2)</span><h5>Gerardo Lopez</h5>
														</option>
														<option value="">
															<span>(7)</span><h5>Carlos Perez</h5>
														</option>
													</select>
												</div>
												<div class="col-md-6">
													<label for="">Pulitura</label>
													<select name="" id="" class="form-control">
														<option value="" disabled="disabled" selected="selected">Selecciona</option>
														<option value="">
															<span>(6)</span><h5>Jorge Gomez</h5>
														</option>
														<option value="">
															<span>(3)</span><h5>Raul Martinez</h5>
														</option>
														<option value="">
															<span>(2)</span><h5>Gerardo Lopez</h5>
														</option>
														<option value="">
															<span>(7)</span><h5>Carlos Perez</h5>
														</option>
													</select>
												</div>
											</div>
										</div>
										<div class="modal-footer">
									        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
									        <button type="button" class="btn btn-primary asignar">Guardar</button>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="despachos" class="mb-3">
				<div class="row">
					<div class="col-md-3">
						<ul class="bg-white br-2 p-2 rec">
							<li class="text-center d-flex justify-content-between align-items-center">
								<h3>Despacho</h3><h6><?php echo date('d-m-Y'); ?></h6>
							</li>
							<li id="$i" class="d-flex justify-content-between align-items-center mt-2 rec-items-active">
								<figure class="mb-0">
									<!-- <img src="" alt=""> -->
									<i class="bi bi-truck" style="font-size:2rem"></i>
								</figure>
								<div class="text-end">
									<h5>CD8AS88</h5>
									<span>Jose Gonzalez - Dorado</span>
								</div>
							</li>
							<?php for($i=0; $i < 5; $i++) { ?>
								<li id="$i" class="d-flex justify-content-between align-items-center mt-2 rec-items">
									<figure class="mb-0">
										<!-- <img src="" alt=""> -->
										<i class="bi bi-truck" style="font-size:2rem"></i>
									</figure>
									<div class="text-end">
										<h5>AB41DR65</h5>
										<span>Carlos Moreno - Plata</span>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="col-md-9">
						<div class="bg-white br-2 p-3 pb-3 rec">
							<div class="br-2 mt-2 px-3 py-2" style="background: #c4c4c423;">
								<h4 class="text-center" style="margin-bottom: 0.5rem;">Datos Generales</h4>
								<div class="row justify-content-between">
									<div class="col-md-4">
										<ul>
											<li><h3>Jose Gonzalez</h3></li>
											<li><i class="bi bi-house"></i> V-7745896</li>
											<li><i class="bi bi-whatsapp"></i> 0414-000-0000</li>
											<li><i class="bi bi-envelope"></i> josegonzalez@mail.com</li>
											<li><i class="bi bi-geo-alt"></i> Edo - Aragua</li>
										</ul>
									</div>
									<div class="col-md-4">
										<ul>
											<li><h3>Toyota</h3></li>
											<li><i class="bi bi-house"></i> Corolla XLS - 2010</li>
											<li><i class="bi bi-card-text"></i> CD8AS88</li>
											<li><i class="bi bi-palette"></i> Dorado</li>
											<li><i class="bi bi-calendar-check"></i> 14-05-2020</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="br-2 mt-2 px-3 py-2" style="background: #c4c4c423;">
								<h4 class="text-center" style="margin-bottom: 0.5rem;">Modificaciones</h4>
								<div class="row">
									<div class="col-md-6">
										<figure>
											<img src="" alt="">
										</figure>
									</div>
									<div class="col-md-6">
										<figure>
											<img src="" alt="">
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<!-- <script type="text/javascript">
		$('.asignar').on('click', function(){
			removeClass('bi-x-circle');
			addClass('bi-check-circle');
		});
	</script> -->
</body>
</html>