<?php
require_once('cabecera.php');
?>
<body id="signUpPage">

	<div class="signUp">
         <header>
            <h1 class="titulo_registro">Call of Duty Superleague</h1>
            <h2 class="subtitulo_registro">Registro</h2>
        </header>

        <main class="registroMain">
          <form class="registroMain__form" action="../php/registro.php" method="POST">
           
            <div class="form__data">
                <div class="registroMain__form__item">
                    <label>Nombre del Equipo</label>
                    <input class="form__input" type="text" name="team" id="team" placeholder="Ingrese el nombre de tu equipo" required />
                </div>
             
                <div class="registroMain__form__item">
                    <label>Nombre corto</label>
                    <input class="form__input" type="text" name="nombre_corto" id="nombre_corto" placeholder="nombre corto" required/>
                </div>
            </div>
            
             <div class="form__data">
                <div class="registroMain__form__item">

                    <label>Fecha de creacion</label>
                    <input class="form__input" type="date" name="fecha_creacion" id="fecha_creacion" required />
                </div>
                

                <div class="registroMain__form__item">
                    <label>Direccion del responsable</label>
                    <input class="form__input" type="text" name="direccion" id="direccion" placeholder="Ingrese la direccion (Opcional)"  />
                </div>
             </div>
                
           <div class="form__data">
                <div class="registroMain__form__item">
                    <label>Correo</label>
                    <input class="form__input" type="email" name="correo" id="correo" placeholder="Ingrese su correo" required/>
                </div> 
                <div class="registroMain__form__item">
                    <label>Sitio Web</label>
                    <input class="form__input" type="text" name="sitio_web" id="sitio_web" placeholder="ingrese su sitio Web (Opcional)"/>
               </div>
           </div>
            
            <div class="form__data">
                <div class="registroMain__form__item">
                    <label>Nombre de Usuario</label>
                    <input class="form__input" type="text" name="user" id="user" placeholder="nombre de Usuario" required/>
                </div>
                
               <div class="registroMain__form__item">
                    <label>Password</label>
                    <input class="form__input" type="password" name="password" id="password" placeholder="Password" required/>
               </div>
            </div>
          
            <button class="form__btn" type="submit" id="submit">Registrate</button>
          </form>

          <div class="registroMain__enlaces">
               <a class="registro" href="Login.php">¿Tienes cuenta? Inicia Sesión </a>
          </div>
        </main>   
    </div>
</body>
</html>