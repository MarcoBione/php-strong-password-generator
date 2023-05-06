<?php 
//file function loaded
include __DIR__ . '/functions.php';

include './template.php';

?>

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
                <form action="index.php">
                    <div>
                        <div class="_mypassword mb-5">
                            <p class="m-0"><?php echo $psw; ?></p>
                        </div>
                    </div>

                    <div>
                        <button class="btn btn-outline-warning" type="submit">Torna alla Home</button>
                    </div>
                </form>
            </div>
            

            
            </main>

            <footer class="d-flex align-items-center p-4">
                <h5 class="text-white-50 m-0 fs-6">Powered by PHP | Developed with &hearts; by Marco</h5>
            </footer>
        </div>
        
    </div>

</body>
</html>