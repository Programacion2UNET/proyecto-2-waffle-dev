<?php
require_once('cabecera.php');
?>
<body id="loginPage">

      <div class="login">
          <header>
            <h1 class="titulo">Call of Duty Superleague</h1>
            <h2 class="subtitulo">Login</h2>
          </header>

          <main class="loginMain">
              <form class="loginMain__form" action="../php/login.php" method="POST">
                  
                  <div class="loginMain__form__item">
                    <label>Usuario</label>
                    <input class="form__input i1" type="text" name="user" id="user" placeholder="Ingrese su usuario"/>
                  </div>
                  
                 <div class="loginMain__form__item">
                    <label>Password</label>
                    <input class="form__input" type="password" name="password" id="password" placeholder="Password"/>
                 </div>
                  <br>
                  <br>
                  <button class="form__btn" type="submit" id="submit">Iniciar Sesión</button>
              </form>
                <div class="loginMain__enlaces">
                  <a class="registro" href="SignUp.php">¿No tienes cuenta? Registrate </a>
                </div>
            </main>
      </div>
</body>
</html>