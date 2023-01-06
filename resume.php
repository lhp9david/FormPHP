<?php
if(!isset($_GET['name']) || !isset($_GET['firstname']) || !isset($_GET['mail'])){
    header('Location: error.php');
    exit;
}
if(empty($_GET['name']) || empty($_GET['firstname']) || empty($_GET['mail'])){
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
    <?= 'Bonjour, ' .$_GET['name'] .' ' .$_GET['firstname'] ?>
    <br>
    <p>Votre demande à bien été prise en compte</p>
    <?= $_GET['object']?>
    <br>
    <?= 'Votre message:  ' .'<br>' .$_GET['message']?>

</body>
</html>