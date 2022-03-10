<?php include('pages/header.php'); ?>
<section class="contenidos">
	<article class="General" id="admin-general">
		<div class="GTLeft">
			<div class="GTNav">
				<div class="GTNItems">
					<ul class="d-flex justify-content-between">
						<li><h5>Recibidos</h5></li>
						<li><span>15</span></li>
					</ul>
					<div class="table-responsive" style="height: 370px; overflow-y: auto;">
						<table class="table caption-top table-scrool">
							<thead>
								<tr>
									<th>#</th>
									<th>Cliente</th>
									<th>Vehiculo</th>
									<th>Estatus</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Jose Guiti</td>
									<td>Toyota Corolla 1.6</td>
									<td class="GTNIStatus-1">
										<i class="bi bi-check-circle"></i>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Francis Ramos</td>
									<td>Chevrolet Cruse</td>
									<td class="GTNIStatus-1">
										<i class="bi bi-check-circle"></i>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>German Alvatro</td>
									<td>Ford Fiesta</td>
									<td class="GTNIStatus-2">
										<i class="bi bi-eye"></i>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Elizabeth Petri</td>
									<td>Hyunday Elantra</td>
									<td class="GTNIStatus-3">
										<i class="bi bi-eye-slash"></i>
									</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Yessica Angola</td>
									<td>Fiat Palio 1.8</td>
									<td class="GTNIStatus-3">
										<i class="bi bi-eye-slash"></i>
									</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Paulo Terno</td>
									<td>Chevrolet Optra</td>
									<td class="GTNIStatus-3">
										<i class="bi bi-eye-slash"></i>
									</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Luis Contreras</td>
									<td>Kia Picanto</td>
									<td class="GTNIStatus-3">
										<i class="bi bi-eye-slash"></i>
									</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Alvaro Simeta</td>
									<td>Chevrolet Spark</td>
									<td class="GTNIStatus-3">
										<i class="bi bi-eye-slash"></i>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="GTNItems">
					<ul>
						<li class="d-flex justify-content-between">
							<h5>Entregados</h5>
							<span>15</span>
						</li>
					</ul>
				</div>
				<div class="GTNItems">
					<ul>
						<li class="d-flex justify-content-between">
							<h5>Ordenes</h5>
							<span>15</span>
						</li>
					</ul>
				</div>
				<div class="GTNItems">
					<ul>
						<li class="d-flex justify-content-between">
							<h5>Repuestos</h5>
							<span>15</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="GTRight">
			<div class="top_boton_nav">
				<a href="recepcion.php">
					<ul>
						<li>Recepción</li>
						<li><h5>16</h5></li>
					</ul>
				</a>
			</div>

			<div class="top_boton_nav">
				<a href="">
					<ul>
						<li>Despacho</li>
						<li><h5>16</h5></li>
					</ul>
				</a>
			</div>
			
			<div class="top_boton_nav">
				<a href="">
					<ul>
						<li>Mecanica</li>
						<li><h5>16</h5></li>
					</ul>
				</a>
			</div>
			
			<div class="top_boton_nav">
				<a href="">
					<ul>
						<li>Latoneria</li>
						<li><h5>16</h5></li>
					</ul>
				</a>
			</div>
			
			<div class="top_boton_nav">
				<a href="">
					<ul>
						<li>Pintura</li>
						<li><h5>16</h5></li>
					</ul>
				</a>
			</div>
			
			<div class="top_boton_nav">
				<a href="">
					<ul>
						<li>Pulitura</li>
						<li><h5>16</h5></li>
					</ul>
				</a>
			</div>
			
			<!-- <div class="top_boton_nav">
				<a href="">
					<ul>
						<li>Repuestos</li>
						<li><h5>16</h5></li>
					</ul>
				</a>
			</div>
			
			<div class="top_boton_nav">
				<a href="">
					<ul>
						<li>Almacen</li>
						<li><h5>16</h5></li>
					</ul>
				</a>
			</div>
			
			<div class="top_boton_nav">
				<a href="">
					<ul>
						<li>Cotizaciones</li>
						<li><h5>16</h5></li>
					</ul>
				</a>
			</div>  -->
		</div>

		<div class="GBLeft">
			<canvas id="myChart" style="width:100%; height: 100%;"></canvas>
		</div>
		
		<div class="GBRight">
			<div class="GBRUno" style="">
				Calendario
			</div>
			<div class="GBRDos" style="">
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, sed!
			</div>
			<div class="GBRList">
				<?php for ($i=0; $i < 10; $i++) { ?>
					<div id="$i" class="GBRList-Items">
						<figure style="width: 40px; height:40px; border-radius: 50%;">
							<img src="img/perfiles/perfil_1.jpg" width="100%" height="100%" style="object-fit: cover; border-radius: 50%;">
						</figure>
						<ul>
							<li>Carlos Hernandez</li>
							<li>Latonero Principal</li>
						</ul>
						<div>
							<?php echo date('H:m:s'); ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</article>
</section>
<?php include('pages/footer.php') ?>