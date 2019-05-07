<?php

	if(isset($_POST['name']) && isset($_POST['subname']) && isset($_POST['email']))
	{
		$destinatario = "aespino@tecasoymas.com";

		$asunto = $_POST["subject"];

		$cuerpo = "Nombre: ".$_POST["name"]." ".$_POST["subname"]."\n\n";

		$cuerpo .= "E-mail: ".$_POST["email"]."\n\n";

		$cuerpo .= "Mensaje:\n".$_POST["message"]."\n\n";

		$headers .= "From: contacto@tecasoymas.com \n\n";

		mail($destinatario, $asunto, $cuerpo, $headers);

?>
			
        <div class="alert fixed alert-success text source color white show">
          <div class="row">
            <div class="message">
              <p>¡Tu mensaje ha sido enviado correctamente! ¡Pronto nos pondremos en contacto contigo!</p>
            </div>
          </div>
          <button class="unstyled destroy"></button>
        </div>
<?php
		
	}

?>