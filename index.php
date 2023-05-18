<?php

$name = 'Lucas';

$surname = 'Pato';

?>

<h1>Mi chiamo el <?php echo $surname . ' ' . $name ?></h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <!-- form -->
    <form action="risposta.php" method="POST">

        <!-- Nome -->
        <label for="">Nome</label>
        <input type="text" placeholder="Inserisci il nome" name="nome">

        <!-- Cognome -->
        <label for="">Cognome</label>
        <input type="text" placeholder="Inserisci il cognome" name="cognome">

        <!-- Submit -->
        <button type="submit">Invia</button>
    </form>
    
</body>
</html>