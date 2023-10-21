<?php
if (isset($_GET['status'])){
  echo '<script>alert("Registro Exitoso!");</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
  <script src="https://kit.fontawesome.com/0b9545bc74.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
  <link rel="stylesheet" href="../css/Estilos/styles.css">


  <title>Fernando_Gomez_ID</title>
</head>


<header>
  <nav>
    <div>
      <ul id="main-contain" class="home">
        <li><a href="../html/index.html">Home</a></li>
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
    <h2>Design</h2>    
  </section>
  <section class="text-bloc">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quos eum ipsa libero ducimus necessitatibus.</p>

    <section>
      <section class="section-background parallax1">
        <h2>Creativity</h2>
      </section>

      <section class="text-bloc">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quisquam delectus cum consectetur
          molestiae, perspiciatis autem voluptates explicabo quo. Ex?</p>

        <section>
          <section class="section-background parallax2">
            <h2>FUN !</h2>
          </section>

          <section class="section-background parallax3">
            <!-- BOTON REGISTRARSE  -->
            <button type="button" class="btn_register" data-toggle="modal"
              data-target="#register_modal">Registrate</button>

            <!-- BOTON INGRESAR  -->
            <button class="btn_login" data-toggle="modal" data-target="#login_modal">Ingresa</button>


            <!-- Modal de Registro-->
            <div class="modal fade" id="register_modal" tabindex="-1" role="dialog"
              aria-labelledby="register_modalLabel" aria-hidden="true">
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
                    <form action="../back/registro.php" method="POST">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputnombres">Nombres</label>
                          <input type="text" class="form-control" name="names" id="inputnombres"
                            placeholder="Digite sus nombres" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputapellidos">Apellidos</label>
                          <input type="text" class="form-control" name="lastname" id="inputapellidos"
                            placeholder="Digite sus Apellidos" required>
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
            <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="login_modalLabel">Inicio de Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="POST">
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