<section>
	<article class="container-xxl">
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
								<!-- <div class="col-md-4 mb-2">
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
							</div> -->
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