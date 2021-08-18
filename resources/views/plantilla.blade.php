<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>inicio</title>
    <!–– Css bootstrap ––> 
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
	
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!–– Css pagina login ––>    
    
</head>

<body class="">
	<section class="navbar fixed-top container-fluid fondo-azul">
		<nav class="navbar navbar-expand-lg  ">
			<div class="container">
				<a class="navbar-brand" href="#section1">
					<h1>START BOOTSTRAP</h1>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon "></span>
				</button>
				<div class="collapse navbar-collapse float-right " id="navbarSupportedContent">
					<ul class="navbar-nav  ">
						<li class="nav-item ">
							<a class="nav-link" href="#section2">PORTFOLIO</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#section3">ABOUT
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#section4">CONTACT
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</section>
	
@yield('contenido');

</body>
<footer class="fondo-azul">
	<section class="f-cuerpo text-center">
		<div class="row ">
			<div class="col-md-4 col-12 mt-4">
				<h2>LOCATION</h2>
				<h5>2215 John Daniel Drive
					Clark, MO 65243</h5>
			</div>
			<div class="col-md-4 col-12 mt-4">
				<h2>AROUND THE WEB</h2>
			</div>
			<div class="col-md-4 col-12 mt-4">
				<h2>ABOUT FREELANCER</h2>
				<h5>Freelance is a free to use, MIT licensed Bootstrap theme created by Start Bootstrap .</h5>
			</div>
		</div>
	</section>
	<section class="f-pie text-center ">
		<h6>Copyright © Your Website 2021</h6>
	</section>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>
