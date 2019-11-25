<?php

$header="MIME-Version: 1.0\r\n";
$header.='From:"PrimFX.com">support@primfx.com>'."\n";
$header.='content-Type:text/html; charset="utf-8"'."\n";
$header.='content-Transfer-Encoding: 8bit';

$to="loicosiewe16@gmail.com";
$message="
<html>
   <body>
        <form method='post' action=treat_message.php?a="."$b>
        <div align='center'> <span style='color:aqua; font-size:1.2em;'>"."tom"."</span><br/>  <br/> Cliques sur  <input type='submit' name='message' value='lien'/> pour valider ton inscription </div>;
        </form>
   </body>
</html>";


$test="Salut les cons";
mail($to, $test, $message, $header);
?>