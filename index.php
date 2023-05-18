<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Form</title>
</head>
<body>

<div class="container pt-4">    
    <div class="row">
        <div class="col-6">

            <!-- form -->
            <form action="risposta.php" method="POST">
            
                <!-- nome -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" placeholder="Inserisci il nome" name="nome" class="form-control" id="nome">
                </div>
            
                <!-- cognome -->
                <div class="mb-3">
                    <label for="cognome" class="form-label">Cognome</label>
                    <input type="text" placeholder="Inserisci il cognome" name="cognome" class="form-control" id="cognome">
                </div>
            
                <!-- password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" id="password" aria-describedby="passwordHelp">
                    <div id="passwordHelp" class="form-text">We'll never share your password with anyone else.</div>
                </div>
            
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>
</div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>