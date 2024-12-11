<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Chat Organizacional</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Correo</label>
          <input type="text" name="email" placeholder="Ingrese su correo" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required oninput="validatePassword()">
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Ingresar">
        </div>
      </form>
      <div class="link">No tienes cuenta? <a href="index.php">Registrate</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
  <script>
    function validatePassword() {
      var passwordInput = document.getElementById('password');

      // Elimina los espacios en blanco al principio y al final de la cadena
      passwordInput.value = passwordInput.value.trim();

      // Actualiza el valor de los campos en el formulario
      if (passwordInput.value !== passwordInput.value.trim()) {
        passwordInput.setCustomValidity('La contraseña no debe contener espacios en blanco.');
      } else {
        passwordInput.setCustomValidity('');
      }
    }
  </script>
</body>

</html>
