<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
  <meta charset="utf-8" />
  <title>Ingresas al Sistema</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Funcionarios Gobernacion Guarico" name="description" />
  <meta content="" name="author" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- END THEME GLOBAL STYLES -->
  <!-- BEGIN PAGE LEVEL STYLES -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="css/registry.css" rel="stylesheet">


  <!-- END PAGE LEVEL STYLES -->
  <!-- BEGIN THEME LAYOUT STYLES -->
  <!-- END THEME LAYOUT STYLES -->
  <link rel="shortcut icon" href="favicon.ico" />

</head>

<body>
  <!-- <img src="/images/fusamiebg.jpg" width="100%" height="100%">-->


  <div>
    <div id="entrada_index_login" class="entradaindex_login">
      <form method="POST" action="{{ route('login') }}">
        @csrf

       
        <table width="100%" height="600" cellpadding="0" cellspacing="0" align="center">
          <tbody>
            <tr>
              <td align="center">
              <h1>Inicio de Sesión</h1>
                <table width="25%" class="login ">
                  <tbody>
                    <tr>
                      <td valign="top" align="center">
                        <input autofocus id="email" type="email"
                          class="input_user form-control @error('email') is-invalid @enderror" placeholder="email"
                          name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- <label for="password" style="color:#ffffff;text-shadow: 1px 1px 1px #222122;font-size: 14px;"><b>Contrase&ntilde;a:</b></label>--><br>
                        <input id="password" type="password"
                          class="input_pass form-control @error('password') is-invalid @enderror" placeholder="password"
                          name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror<div style="margin-top:8px;">
                          <div class="col-xs-6 col-sm-6 col-md-6 col-xl-6  mt-6 mb-6"> <br></div>
                          <button type="submit" class="btn btn-primary"
                            title="PRESIONE EL BOTÓN PARA INGRESAR AL SISTEMA">
                            {{ __('Iniciar Sesión') }}
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</body>

</html>