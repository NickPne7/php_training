
<?php
    $num1 = 0;
    $num2 = 0;
    $operand = '+';


    if(isset($_REQUEST['num1'])){
        $num1 = $_REQUEST['num1'];
    }
    if (isset($_REQUEST['num2'])) {
        $num2 = $_REQUEST['num2'];
    }
    if (isset($_REQUEST['operand'])) {
        $operand = $_REQUEST['operand'];
    }


    $risultato = 0;

    switch ($operand) {
        case '+':
            $risultato = $num1 + $num2;
            break;
        case '-':
            $risultato = $num1 - $num2;
            break;
        case '*':
            $risultato = $num1 * $num2;
            break;
        case '/':
            $risultato = $num1 / $num2;
            break;
    }

    echo "<output>Risultato: </output> " . $risultato;

?>