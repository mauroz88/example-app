<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <title>login lmz</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
  <!-- Custom styles for this template -->
  <link href="{{asset('css/login.css')}}" rel="stylesheet">
</head>

<body class="text-center">

  <form class="form-signin ">
    <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">INICIAR SESION</h1>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recuerdame
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
  </form>
</body>

</html>