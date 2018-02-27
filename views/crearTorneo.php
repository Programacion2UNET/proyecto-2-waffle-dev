<?php
require_once('cabecera.php');
?>
<body id="crearTorneoPage">

      <div class="crearTorneo">
          <header>
            <h1 class="titulo">Call of Duty Superleague</h1>
            <h2 class="subtitulo">Crear Torneo</h2>
          </header>

          <main class="crearTorneo__main">
              <form action="../php/crearTorneo.php" method="POST" class="crearTorneo__main__form">

                <div class="form__data">
                  <label for="">Nombre del Torneo</label>
                  <input type="text" name="nombreTorneo" placeholder="Nombre del Torneo" required />
                </div>

                <div class="form__data">
                  <label>Fecha del Torneo</label>
                  <input class="form__input" type="date" name="fechaTorneo" id="fecha_creacion" min="2018-03-01"  required />
                </div>
                <button class="form__btn" type="submit" id="submit">Crear</button>

              </form>

              <div class="enlaces">
                <a href="adminPanel.php" class="form__btn">Regresar</a>
              </div>
          </main>

          <div class="crearTorneo__footer">
            © WaffleDev
          </div>
      </div>
</body>
</html>