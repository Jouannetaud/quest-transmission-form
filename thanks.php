<?php 








function test_input()
{
    $email = test_input($_POST["email"]);
    

    
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $emailErr = "format email invalide";
        
    }
    if (empty($_POST["email"])) {
        $emailErro = "Email is required";
        echo $emailErro;
      } else {
        $email = test_input($_POST["email"]);
      }

    if (empty($_POST["name"])) {
        $nameErr = "Remplir le champ name";
        echo $nameErr;
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Remplir le champs lastname";
        echo $lastnameErr;
    } else {
        $lastname = test_input($_POST["lastname"]);
    }
 
    if (empty($_POST["tel"])) {
        $telErr = "Remplir le champ numéro de téléphone";
        echo $telErr;
    } else {
        $tel = test_input($_POST["tel"]);
    }
    if (empty($_POST["sujet"])) {
        $sujetErr = "Choisissez un sujet";
        echo $sujetErr;
    } else {
        $sujet = test_input($_POST["sujet"]);
    }
    if (empty($_POST["message"])) {
        $messageErr = "écrire un message";
            echo $messageErr;
    } else {
        $message = test_input($_POST["message"]);  
    }

}
echo "Merci" . " " . $_POST["name"] . " " . $_POST["lastname"] . " " . "de nous avoir contacté à propos de " . " " . $_POST["sujet"].PHP_EOL;
echo "Un de nos conseiller vous contactera soit à l'adresse" . " " . $_POST["email"] . " " . "ou par téléphone au" . " " . $_POST["tel"] . " " . "dans les plus bref délais pour traiter votre demande  :";
echo $_POST["message"];