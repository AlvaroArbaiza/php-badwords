<?php 
    $strin = $_POST['pass'];

    $stringanuova = str_replace($_POST['pass'], '***', $strin);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Risposta</title>
</head>
<body>

    <div class="container">
        <div class="row aling-items-center pt-4">
            <!-- Dati ricevuti -->
            <div class="card" style="width: 24rem;">
        
                <div class="card-body">
                    <h5 class="card-title">Nome: <?php echo $_POST['nome'] . ' (lenght:' . strlen($_POST['nome']) . ')' ?></h5>
                    <h5 class="card-title">Cognome: <?php echo $_POST['cognome'] . ' (lenght:' . strlen($_POST['cognome']) . ')'?></h5>
                    <h5 class="card-title">Password: <?php echo $stringanuova . ' (lenght:' . strlen($_POST['pass']) . ') '
                         ?></h5>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>