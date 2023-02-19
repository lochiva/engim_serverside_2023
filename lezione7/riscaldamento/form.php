<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // write code to read data from $_POST array
    // read happy value from $_POST array
    $happy= $_POST['happy'] ?? 'undefined';
    switch ($happy) {
        case 'si':
            $message= 'sarà una bella giornata';
            break;
        case 'no':
            $message=  'con un bel riscaldamento tuto cambia';
            break;
     
        default:
            $message =  'caso non previsto';
            break;
    }
    echo $message;

} else {
    // display form
    echo '<form method="post">
        sei felice oggi ? 
        <input type="radio" name="happy" value="si">si 
        <input type="radio" name="happy" value="no">no 
        <input type="submit" value="submit">
        </form>';

}