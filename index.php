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
$psw = 'la tua password sarà qui';

if(isset($_GET['pswnum'])){

    $max = 32;
    $min = 8;

    //check if number is alterated
    if($_GET['pswnum'] <= $max && $_GET['pswnum'] >= $min ){
       
        $numOfCaracthers=$_GET['pswnum'];
        $psw = genPassword($numOfCaracthers);
    }else{
        $psw='qualcosa è andato storto';
    }
}

//PSW Generator
function genPassword ($numOfCaracthers){
    //echo $numOfCaracthers;
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#!"$%&/=^'; //character aviable
    $password = substr(str_shuffle($chars), 0, $numOfCaracthers); //sorting n° characters from string randomly
    return $password; //return password from function call
}

?>

<!-- base html template -->
<?php 
include __DIR__ . '/template.php';
?>
<!-- end base html template -->

<body>

    <div class="_mywrapper">
        <div class="_myblur">

            <header class="p-4">
                <div>
                   <h2 class="_mytxt">PSW.</h2>
                    <h2 class="_mytxt">GEN.rator  -V1</h2>
                </div>
            </header>

            <main class="d-flex flex-column justify-content-start align-items-center p-4">

                <div class="_mycontainer mb-5">

                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">

                        <div>
                            <p class="fw-semibold">Inserisci il numero di caratteri:</p>
                            <input type="number" class="form-control bg-secondary text-white-50 shadow shadow-none" placeholder="Min 8 - Max 32" min="8" max="32" required name="pswnum">
                        </div>

                        <div class="py-3">
                            <button type="submit" class="btn btn-outline-warning">GEN.</button>
                        </div>

                    </form>
                </div>

                <div>
                    <div class="_mypassword">
                        <p class="m-0"><?php echo $psw ?></p>
                    </div>
                </div>

            </main>

            <footer class="d-flex align-items-center p-4">
                <h5 class="text-white-50 m-0 fs-6">Powered by PHP | Developed with &hearts; by Marco</h5>
            </footer>
        </div>
        
    </div>

</body>
</html>
