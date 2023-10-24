<?php
if (isset($_GET['status'])) {
  if ($_GET['status'] == 1) {
    echo '<script>alert("Registro Exitoso!");</script>';
  }
  if ($_GET['status'] == 2) {
    echo '<script>alert("El usuario ya se encuentra registrado");</script>';
  }
  if ($_GET['status'] == 3) {
    echo '<script>alert("Acceso Denegado");</script>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="Portfolio">
  <meta name="author" content="Luis Fernando Gómez Parada">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.3.67/css/materialdesignicons.min.css">
  <script src="https://kit.fontawesome.com/0b9545bc74.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/Estilos/styles.css">
  <title>Fernando_Gomez_ID</title>

</head>


<header>
  <nav>
    <div>
      <ul id="main-contain" class="home">
        <li><a href="../html/index.php">Home</a></li>
        <li><a href="../html/fun.html">Fun</a></li>
        <li><a href="../html/about.html">About</a></li>
        <!-- <li><a href="#">Services</a></li> -->
      </ul>
    </div>
  </nav>
</header>


<body>
  <!-- Container element -->

  <section class="section-background parallax">
    <div>
    <video autoplay muted loop>
            <source src="https://player.vimeo.com/external/535950529.sd.mp4?s=31702bc51cf2a829edbac94e33ba4d7400efc40b&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
        </video>
        <h2>Design</h2>
    </div>
    
  </section>
  <section class="text-bloc">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima fuga debitis quasi eius aliquid sapiente? Cumque blanditiis quibusdam, ex totam aliquam provident alias culpa, sit illo, eum doloribus doloremque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi reprehenderit voluptatum aperiam pariatur numquam praesentium recusandae, ipsa at iusto eveniet, distinctio sunt dolore nemo veniam maiores vitae deserunt cum ducimus.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima fuga debitis quasi eius aliquid sapiente? Cumque blanditiis quibusdam, ex totam aliquam provident alias culpa, sit illo, eum doloribus doloremque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi reprehenderit voluptatum aperiam pariatur numquam praesentium recusandae, ipsa at iusto eveniet, distinctio sunt dolore nemo veniam maiores vitae deserunt cum ducimus.</p>
    <section>
      <section class="section-background parallax1">
        <h2>Mountain</h2>
      </section>

      <section class="text-bloc">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima fuga debitis quasi eius aliquid sapiente? Cumque blanditiis quibusdam, ex totam aliquam provident alias culpa, sit illo, eum doloribus doloremque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi reprehenderit voluptatum aperiam pariatur numquam praesentium recusandae, ipsa at iusto eveniet, distinctio sunt dolore nemo veniam maiores vitae deserunt cum ducimus.</p>
        <section>

          <section class="section-background parallax2">
            <h2>Sea</h2>
          </section>
          <section class="section-background parallax3">
            <h2>Galaxy</h2>
          </section>

          <section class="section-background parallax3">
            <!-- BOTON REGISTRARSE  -->
            <button type="button" class="btn_register" data-toggle="modal" data-target="#register_modal">Registrate</button>

            <!-- BOTON INGRESAR  -->
            <button class="btn_login" data-toggle="modal" data-target="#login_modal">Ingresa</button>


            <!-- Modal de Registro-->
            <div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="register_modalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="register_modalLabel">Registro de Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Formulario de Registro START-->
                    <form action="../back/register.php" method="POST">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputnombres">Nombres</label>
                          <input type="text" class="form-control" name="names" id="inputnombres" placeholder="Digite sus nombres" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputapellidos">Apellidos</label>
                          <input type="text" class="form-control" name="lastname" id="inputapellidos" placeholder="Digite sus Apellidos" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputfecha_nacimiento">Fecha de Nacimiento</label>
                          <input type="date" class="form-control" name="birth" id="inputfecha_nacimiento" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputnumero_id">Número de Identificación (Usuario)</label>
                          <input type="text" class="form-control" name="id_person" id="inputnumero_id" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputemail">Correo Electrónico</label>
                          <input type="email" class="form-control" name="email" id="inputemail" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputcontra">Contraseña</label>
                          <input type="password" class="form-control" name="pass" id="inputcontra" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputcontra">Contraseña 2</label>
                          <input type="password" class="form-control" name="pass2" id="inputcontra" required>
                        </div>
                      </div>
                      <button name="register_btn" type="submit" class="btn_login">Registrarse</button>
                      <button type="reset" class="btn_register">Limpiar</button>
                    </form>
                    <!-- Formulario de Registro END--> ...
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal de Login-->
            <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="login_modalLabel">Inicio de Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="../back/login.php" method="POST">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputnumero_id">Número de Identificación (usuario)</label>
                          <input type="text" class="form-control" name="id_person" id="inputnumero_id" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputcontra">Contraseña</label>
                          <input type="password" class="form-control" name="pass" id="inputcontra" required>
                        </div>
                      </div>
                      <button name="login_btn" type="submit" class="btn_login">Ingresa</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </section>
        </section>

        <script src="../js/script.js"></script><!--con defer--- Igual que tener el script abajo  -->

</body>


</html>