<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>inicio</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
	<section class="section1 text-center fondo-verde " id="section1">
		<div class="align-items-center">
			<img src="{{ asset('img/img1.svg') }}" class="img-logo mx-auto d-block" alt="">
		</div>
		<h1>START BOOTSTRAP</h1>
		--------------
		<i class="fas  fa-star "></i>
		--------------
		<h3>Graphic Artist - Web Designer - Illustrator</h3>
	</section>
	<section class="section2 text-center fondo-blanco" id="section2">
		<h1>PORTFOLIO</h1>
		--------------
		<i class="fas  fa-star "></i>
		--------------
		<div >
			<img src="{{ asset('img/img2.png') }}" class="img-2 " alt="">
			<img src="{{ asset('img/img2.png') }}" class="img-2 " alt="">
			<img src="{{ asset('img/img2.png') }}" class="img-2 " alt="">
			<img src="{{ asset('img/img2.png') }}" class="img-2 " alt="">
			<img src="{{ asset('img/img2.png') }}" class="img-2 " alt="">
			<img src="{{ asset('img/img2.png') }}" class="img-2 " alt="">
		</div>


	</section>
	<section class="section3 text-center fondo-verde" id="section3" style="background: #1abc9c">
		<h1>ABOUT</h1>
		<div class="row	" style=" margin-right: 0px;margin-left: 0px;">
			<div class="col-md-6 p-3 col-12">
				<p class="h6">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
			</div>
			<div class="col-md-6 p-3 col-12">
				<p class="h6">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
			</div>
			<div>
			<button type="button" class="btn btn-outline-light">Free Dowload...!</button>
			</div>
			
		</div>
	</section>
	<section class="section4 text-center container" id="section4">
		<h1>CONTACTO</h1>
		--------------
		<i class="fas  fa-star "></i>
		--------------
		<form>
			<div class="mb-3">
				<input placeholder="NOMBRE" type="text" class="form-control" id="exampleInputText" aria-describedby="textlHelp">
			</div>
			<div class="mb-3">				
				<input placeholder="EMAIL" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="mb-3">				
				<input placeholder="TELEFONO" type="phone" class="form-control" id="exampleInputPhone">
			</div>
			<div>
				<textarea placeholder="MENSAJE" rows="3" file="20" type="text " ></textarea>
			</div>
			<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
	</section>
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

</html>