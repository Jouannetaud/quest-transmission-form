<?php 


echo "Merci" . " " . $_POST["name"] . " " . $_POST["lastname"] . " " . "de nous avoir contacté à propos de " . " " . $_POST["sujet"].PHP_EOL;

echo "Un de nos conseiller vous contactera soit à l'adresse" . " " . $_POST["email"] . " " . "ou par téléphone au" . " " . $_POST["tel"] . " " . "dans les plus bref délais pour traiter votre demande  :";

echo $_POST["message"];