<!DOCTYPE html>
<html>
<head>
	<title>CoD Superleague</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="shortcut icon" type="image/png" href="../images/icon.png"/>
  <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
</head>
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
                  <input type="text" name="nombreTorneo" placeholder="Nombre del Torneo">
                </div>

                <div class="form__data">
                  <label>Fecha del Torneo</label>
                  <input class="form__input" type="date" name="fechaTorneo" id="fecha_creacion" min="2018-03-01"  required />
                </div>
                <button class="form__btn" type="submit" id="submit">Crear</button>
              </form>
          </main>

          <div class="crearTorneo__footer">
            © WaffleDev
          </div>
      </div>
</body>
</html>