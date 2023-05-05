<?php 
/*
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
*/


if(isset($_GET['pswnum'])){
    $numOfCaracthers=$_GET['pswnum'];
    
    $psw = genPassword($numOfCaracthers);
    //chiamo la funzione qua e gli passo il numero!
    echo $psw;
    
}
function genPassword ($numOfCaracthers){
    //echo $numOfCaracthers;
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#!"$%&/=^'; //character aviable
    $password = substr(str_shuffle($chars), 0, $numOfCaracthers);
    return $password;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP|Secure PSW gen</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- my CSS -->
    <link rel="stylesheet" href="./CSS/master.css">
</head>
<body>

<header>
    <div class="container text-center">
       <h1>Crea la tua password</h1>
        <p>in modo semplice e veloce!</p> 
    </div>
</header>

<main class="d-flex justify-content-center">
    <div class="_mycontainer">

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">

            <div>
                <p class="fw-semibold">Inserisci il numero di caratteri:</p>
                <input type="number" class="form-control" placeholder="Min 8 - Max 32" min="8" max="32" required name="pswnum">
            </div>

            <div class="py-3">
                <button type="submit" class="btn btn-outline-warning">Submit</button>
            </div>

        </form>
    </div>
</main>

<footer>
    
</footer>
    
</body>
</html>
