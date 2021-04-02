<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
</head>
<body>
  

  
  <form action="thanks.php" method="post">
  
  <p>
  <label for="name">Name</label>
  <input type="text" id="name" name="name">
  </p>
  
  <p>
  <label for="lastname">Lastname</label>
  <input type="text" id="lastname" name="lastname">
  </p>
  
  <p>
  <label for="email">Email</label>
  <input type="email" id="email" name="email">
  </p>

  <p>
  <label for="tel">Nméro téléphone</label>
  <input type="tel" id="tel" name="tel">
  </p>
  
  <p>
  <select name="sujet" id="sujet" placeholder = "sujet">
   
    <option>Sujet</option>
    <option>Rendez vous</option>
    <option>info</option>
    <option>demande</option>
  </select>
  </p>
  
  <p>
  <label for="message">Message</label>
  <textarea id="message" name="message">
  </textarea>
  </p>
  
  <p>
  <input type="submit" value="Envoyer">
  </p>
 
  

  </form>
</html>