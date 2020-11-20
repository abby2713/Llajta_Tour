<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>LLAJTA TOUR</title>
	<meta charset="UTF-8">
	<meta name="description" content="loans HTML Template">
	<meta name="keywords" content="loans, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap," rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/all.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<a href="index.html" class="site-logo">
			<img src="img/logoBC.png" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="index.html" class="active">Inicio</a></li>
				<li><a href="index.html">Acerca de nosotros</a></li>
				<li><a href="#">Atractivos</a>	
					<ul class="sub-menu">
						<li><a href="provincias.html">Provincias</a></li>
						<li><a href="index.html">Gastronomia</a></li>
						<li><a href="index.html">Folklore</a></li>
					</ul>
				</li>
				<li><a href="experiencias.html">Experiencias</a></li>
				<li><a href="galeria.html">Galeria</a></li>
				<li><a href="#"><i class="fas fa-language"></i> Idiomas</a>	
					<ul class="sub-menu">
						<li><a href="#">Español</a></li>
						<li><a href="#">Ingles</a></li>
					</ul>
				 
				</li>
			</ul>
			<!-- 
			<div class="header-right">
				<a href="#" class="hr-btn"><i class="flaticon-029-telephone-1"></i>Emergencia</a>
				<div class="hr-btn hr-btn-2">+45 332 65767 42</div>
			</div>
			-->
		</nav>
	</header>

	<!-- Header Section end -->

	<!-- Table Section -->
	<section class="table-section">
	<div class="container-table">
  		<h3>Lista Usuarios</h3>
  		<div class="row">
    		<div class="col-sm-12">
      			<div class="card">
        			<div class="card-body">
        				<div class="Buttons float-right" >
							<form action="registrarUsuario.php" method="POST">
								<button type="submit" class="btn btn-sm">Agregar Usuario</button>								
  								<a href="index.html" class="btn btn-sm">Cerrar Sesion</a>
  								<a href="IUAdmin.php" class="btn btn-sm">Volver</a>
							</form>
 						</div>
 						<div class="table-responsive">
 							<table class="table">
					   		<thead>
					     		<tr>
					       		<th>No.</th>
					       		<th>Nombre</th>
					       		<th>Login</th>71747786
					       		<th>Password</th>HT-8J4J-Q3VG-XNBW
					       		<th>Rol</th>
					     		</tr>
					   		</thead>
   							<tbody style="align-content:center">

 
 					<?php
						$sql="SELECT * FROM usuarios where Estado=1";
						$execonsulta=$mysqli->query($sql);

						if(mysqli_num_rows($execonsulta)>0)
						{
							$indice=1;
							while ($row=mysqli_fetch_array($execonsulta)) 
							  	{
					?>
							    <tr>
							       <td><?php echo $indice; ?></td>
							       <td><?php echo $row['apellidoPaterno'],' ',$row['apellidoMaterno'],' ',$row['nombres']; ?></td>
							       <td><?php echo $row['login']; ?></td>
							       <td><?php echo md5($row['password']); ?></td>
							       <td><?php echo $row['tipo']; ?></td>							      
							       <td>
							        <form action="modificarUsuario.php" method="POST">
										<input type="hidden" name="idusuario" value="<?php echo $row['idUsuario']; ?>"></input>
							           	<button type="submit" class="btn btn-success btn btn-sm" id="Modificar"><i class="far fa-edit"></i></button>
							        </form>
							       	</td>
							       	<td>
							       	<form action="eliminarUsuariodb.php" method="POST">
										<input type="hidden" name="idusuario" value="<?php echo $row['idUsuario']; ?>"></input>
							           	<button type="submit" class="btn btn-danger btn btn-sm" id="Eliminar"><i class="far fa-trash-alt"></i></button>
							        </form>
							       	</td>
							    </tr>
				    <?php
				    $indice++;
								}
						}
					?>
   							</tbody>
 							</table>   
 						</div>
        			</div>
      			</div>
    		</div>
  		</div>
	</div>
	</section>
	<!-- Table Section end -->

	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<a href="index.html" class="footer-logo">
				<img src="img/logoBC.png" alt="">
			</a>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>What we do</h2>
						<ul>
							<li><a href="#">Loans</a></li>
							<li><a href="#">Car loans</a></li>
							<li><a href="#">Debt consolidation loans</a></li>
							<li><a href="#">Home improvement loans</a></li>
							<li><a href="#"> Wedding loans</a></li>
							<li><a href="#">Innovative Finance ISA</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>About us</h2>
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Our story</a></li>
							<li><a href="#">Meet the board</a></li>
							<li><a href="#">Meet the leadership team</a></li>
							<li><a href="#">Awards</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Legal</h2>
						<ul>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Loans2go principles</a></li>
							<li><a href="#">Website terms</a></li>
							<li><a href="#">Cookie policy</a></li>
							<li><a href="#">Conflicts policy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Site Info</h2>
						<ul>
							<li><a href="#">Support</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Sitemap</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="social-links">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-pinterest"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
			<br>
			<br>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Llajta Tour <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
