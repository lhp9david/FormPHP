<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <form action="resume.php" method="get">

    <div>
      <label for="name">Votre nom: </label>
      <input type="text" name="name" id="name"><span class="validName"></span>
    </div>

    <div>
      <label for="firstname">Votre prénom: </label>
      <input type="text" name="firstname" id="firstname"><span class="validFirstName"></span>
    </div>
    <div>
      <label for="mail">Votre mail: </label>
      <input type="email" name="mail" id="mail"><span class="validMail"></span>
    </div>

    <label for="object">Objet:</label>

    <select name="object" id="object">
     
      <option value="Demande d'informations">Demande d'informations</option>
      <option value="Demande de retour">Demande de retour</option>
      <option value="autre">Autre</option>

    </select>
    <div>

      <div> <label for="message">votre message:</label></div>
      <textarea id="message" name="message" rows="5" cols="33">
        </textarea>
    </div>
    <input id="submit" type="submit" value="Valider">
  </form>
</body>
<script src="script.js"></script>

</html>