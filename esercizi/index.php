<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prove</title>
        <link rel="stylesheet" href = "stile.css">
    </head>
    <body>
        <h1>Esercizi PHP</h1>
        <p>Blocco per l'esecuzione di esercizi PHP</p>
        <div id="blocco">
            
            <form action= "<?php $_SERVER['PHP_SELF']?>" method="get">


                <fieldset>
                    <legend>Calcolatrice</legend>
                    <label>Numero 1</label>
                    <input type="number" name="num1">
                    <label>operazione</label>
                    <select id="operazione" name="operazione">

                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>

                    </select>
                    <label>Numero 2</label>
                    <input type="number" name="num2">
                    <br>
                    
                </fieldset>
               <input type="submit" value="calcola">
            </form>
            <hr>

            <?php
                include "script.php";
            ?>


        </div>
    </body>
</html>