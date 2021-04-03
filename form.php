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
  <input type="text" id="name" name="name" required>
  <span class="error">* <?php echo $nameErro;?></span>
  </p>
  
  <p>
  <label for="lastname">Lastname</label>
  <input type="text" id="lastname" name="lastname" required>
  <span class="error">* <?php echo $lastnameErr;?></span>
  </p>
  
  <p>
  <label for="email">Email</label>
  <input type="email" id="email" name="email" required>
  <span class="error">* <?php echo $emailErr;?></span>
  </p>

  <p>
  <label for="tel">Numéro téléphone</label>
  <input type="tel" id="tel" name="tel" required>
  <span class="error">* <?php echo $telErr;?></span>
  </p>
  
  <p>
  <select name="sujet" id="sujet" placeholder = "sujet" required>
  <span class="error">* <?php echo $sujetErr;?></span>
   
    <option>Sujet</option>
    <option>Rendez vous</option>
    <option>info</option>
    <option>demande</option>
  </select>
  </p>
  
  <p>
  <label for="message">Message</label>
  <textarea id="message" name="message" required>
  <span class="error">* <?php echo $messageErr;?></span>
  </textarea>
  </p>
  
  <p>
  <input type="submit" value="Envoyer">
  </p>
 
  

  </form>
</html>