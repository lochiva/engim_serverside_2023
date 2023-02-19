<?php
// scrivere una funzione concatena che ricevendo due stringhe ne restituisce una stringa
// composta dalla concatenazione delle due 
function concatena($stringa1,$stringa2){
    return $stringa1.$stringa2;
}

// scrivere una funzione concatena_con_spazio che riceve due stringhe e restituisce una stringa concatenando con spazio
function concatena_con_spazio($stringa1,$stringa2){
    return $stringa1." ".$stringa2;
}

// scrivere una funziona concatena_stringhe che ricevendo un array di stringhe e restituisce una stringa composta dalla concatenazione dei valori dell'array
function concatena_stringhe($array){
    $stringa="";
    for($i=0;$i<count($array);$i++){
        $stringa=$stringa.$array[$i];
    }
}
// scrivere la funzione concatena_stringhe_con_spazio che riceve un array di stringhe e restituisce una stringa composta dalla concatenazione dei valori dell'array con lo spazio
function concatena_stringhe_con_spazio($array){
    $stringa="";
    for($i=0;$i<count($array);$i++){
        $stringa=$stringa.$array[$i]." ";
    }       
}

// riscrivere le funzioni concatena_stringhe e concatena_stringhe_con_spazio usando l'istruzione foreach. I nomi delle funzioni devono avere come desinenza _2 
