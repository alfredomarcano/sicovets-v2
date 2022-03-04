<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sicovets - Sistema de Control para Vehiculos de Talleres y Seguros</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="icons/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/grid.css">
	<script type="text/javascript" src="js/Chart.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="H-Header">
			<figure class="HH-Img">
				<img src="img/company.png" alt="" width="100%" height="100%">
			</figure>
			<div class="H-Btn">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="HH-Title">
				<span>Company</span>
			</div>
		</div>
		<nav> 
			<ul>
				<li>
					<a href="" class="N-items">
						<i class="bi bi-grid"></i>
						<div class="N-span">
							<span>Dashboard</span>
							<span>15</span>
						</div>
					</a>
				</li>
				<li>
					<a href="" class="N-items">
						<i class="bi bi-file-richtext"></i>
						<div class="N-span">
							<span>Revisión</span>
							<span>15</span>
						</div>
					</a>
				</li>
				<li>
					<a href="" class="N-items">
						<i class="bi bi-card-checklist"></i>
						<div class="N-span">
							<span>Recepción</span>
							<span>15</span>
						</div>
					</a>
				</li>
				<li>
					<a href="" class="N-items">
						<i class="bi bi-diagram-3"></i>
						<div class="N-span">
							<span>Distribución</span>
							<span>15</span>
						</div>
					</a>
				</li>
				<li>
					<a href="" class="N-items">
						<i class="bi bi-clipboard-check"></i>
						<div class="N-span">
							<span>Estatus</span>
							<span>15</span>
						</div>
					</a>
				</li>
				<li>
					<a href="" class="N-items">
						<i class="bi bi-list-check"></i>
						<div class="N-span">
							<span>Entregados</span>
							<span>15</span>
						</div>
					</a>
				</li>
				<li>
					<a href="" class="N-items">
						<i class="bi bi-ui-checks"></i>
						<div class="N-span">
							<span>Ordenes</span>
							<span>15</span>
						</div>
					</a>
				</li>
				<li>
					<a href="" class="N-items">
						<i class="bi bi-journal-check"></i>
						<div class="N-span">
							<span>Cotizaciones</span>
							<span>15</span>
						</div>
					</a>
				</li>
				<li>
					<a href="" class="N-items">
						<i class="bi bi-inboxes-fill"></i>
						<div class="N-span">
							<span>Respuesto</span>
							<span>15</span>
						</div>
					</a>
				</li>
			</ul>
		</nav>
		<div class="H-Footer">
			<figure class="HF-img">
				<img src="img/perfil.png" alt="" width="100%" height="100%">
			</figure>
			<div class="HF-Data">
				<ul class="HF-items">
					<li>Name User</li>
					<li>Nameuser@mail.com</li>
				</ul>
				<a href="index.php" class="HF-setting">
					<i class="bi bi-three-dots-vertical"></i>
				</a>
			</div>
		</div>
	</header>
	<section class="contenidos">
		<article class="General" id="admin-general">
			<div class="GTLeft">
				<div class="GTNav">
					<div class="GTNItems">
						<ul class="d-flex justify-content-between">
							<li><h5>Recibidos</h5></li>
							<li><span>15</span></li>
						</ul>
						<div class="table-responsive">
							<table class="table caption-top">
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
				<canvas id="myChart" style="width:100%;"></canvas>
			</div>
			<div class="GBRight">
				<div class="table-responsive">
					<table class="table caption-top">
					  <caption>Lista Asistencia</caption>
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">First</th>
					      <th scope="col">Last</th>
					      <th scope="col">Handle</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>@mdo</td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Jacob</td>
					      <td>Thornton</td>
					      <td>@fat</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Larry</td>
					      <td>the Bird</td>
					      <td>@twitter</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Larry</td>
					      <td>the Bird</td>
					      <td>@twitter</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Larry</td>
					      <td>the Bird</td>
					      <td>@twitter</td>
					    </tr>
					  </tbody>
					</table>	
				</div>
			</div>
		</article>
	</section>
	<footer>
		<!-- <ul>
			<li>lorem</li>
			<li>lorem</li>
			<li>lorem</li>
			<li>lorem</li>
			&copy;<script>document.write(new Date().getFullYear());</script>
		</ul> -->
	</footer>

	<script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
</script>
</body>
</html>