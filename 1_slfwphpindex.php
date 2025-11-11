<!-- Traccia 1:
Installare PHP
Definisci 4 variabili:
Integer
Float
String
Boolean
A schermo, fai comparire il tipo di dato delle varie variabili.
Trasforma quelle variabili in costanti, utilizzando le best practice viste a lezione.
Pusha il codice su GitHub con il nome php_01_nome_cognome. Integra anche le altre tracce e poi pusha tutto. -->

<?php

/* ------- DICHIARAZIONE VARIABILI ------- */

    $integer = 78;
    $float = 7.7;
    $string = 'ciao sono Dario';
    $boolean = true;

/* ------- VERIFICHIAMO LA TIPOLOGIA DI DATI PRESENTI NELLE VARIABILI ------- */

    var_dump($integer);
    var_dump($float);
    var_dump($string);
    var_dump($boolean);

    /* CONVERTO LE VARIABILI IN CONSTANTI */

    const INTERO = 78;
    const VIRGOLA = 7.7;
    const STRINGA = 'CIAO DARIO';
    const BOOLEANO = false;

    var_dump(INTERO);
    var_dump(VIRGOLA);
    var_dump(STRINGA);
    var_dump(BOOLEANO);
    
?>