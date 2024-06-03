<?php
include 'header.php';
?>    
<h1>Contacto</h1>
<main>
    <section>
        <form  class="formulario" action="create_contact.php" method="POST">
            <fieldset>
                <legend>Contactame enviando tus datos</legend>
                <div class="contenedor campos">
                    <div class="campo">

                        <div>
                            <label for="">nombre:</label>
                            <input class="imput-text" type="text" name="nombre" placeholder="Tu nombre">
                        </div>
                    </div>
                    <div class="campo">

                        <div>
                            <label for="">telefono</label>
                            <input class="imput-text" type="tel" name="telefono" placeholder="Tu teléfono">
                        </div>
                    </div>
                    <div class="campo">

                        <div>
                            <label for="">correo</label>
                            <input class="imput-text" type="email" name="correo" placeholder="Tu correo">
                        </div>
                    </div>
                    <div class="campo">

                        <div>
                            <label for="">mensaje</label>
                            <textarea class="imput-text" name="mensaje" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div>
                        <input class="boton" type="submit" value="enviar">
                    </div>
                </div>
            </fieldset>
        </form>
    </section>

<?php
    include 'footer.php';
?>