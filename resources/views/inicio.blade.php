@extends('plantilla');

@section('contenido');
	<section class="section1 text-center fondo-verde " id="section1">
		<div class="align-items-center">
			<img src="{{ asset('img/img1.svg') }}" class="img-logo mx-auto d-block" alt="">
		</div>
		<h1>proyecto lmz</h1>
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
		<div>
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
				<textarea placeholder="MENSAJE" rows="3" file="20" type="text "></textarea>
			</div>
			<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
	</section>
@endsection