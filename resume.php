<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // le formulaire a été soumis en utilisant la méthode POST
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $mail = $_POST['mail'];
    // traitez les données du formulaire ici
}
if (!isset($_POST['name']) || !isset($_POST['firstname']) || !isset($_POST['mail'])) {
    header('Location: error.php');
    exit;
}
if (empty($_POST['name']) || empty($_POST['firstname']) || empty($_POST['mail'])) {
    header('Location: error.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <br>
    <?= 'Bonjour, ' . $_POST['name'] . ' ' . $_POST['firstname'] ?>
    <br>
    <p>Votre demande à bien été prise en compte</p>
    <?= 'Objet: ' . $_POST['object'] ?>
    <br>
    <?= 'Votre message:  ' . '<br>' . $_POST['message'] ?>



</body>

</html>