<?php
/* ESERCITAZIONE SELFWORK NUMERO 3 */

    $words1 = [ 'vostro', 67, 'essere','colle', 'mi','sempre', ['oscura', 'era', 89, ['mezzo','E'], 'ritrovai',
    'per'], 
    'diritta'
    ];

    $words2 = ['elemento1' => 25.89, 'elemento2' => 'possa','elemento3' => ['Virgilio','Favore','favore',['fortuna']], 'fine' => '!'

    ];

    $words3 = [
      'cammin', 'di', 'mi',['selva', 'stringa' => 'vita'],
    ];

    $words1[] = 'la';//Inserisce un elemento alla fine di un array.
    $words1[0] = 'nostra'; //Sostituita parola "vostra" con "nostra" all'interno dell'array nella variabile $words1.
    $words1[1] = 'via';//Sostituita valore numerico "67" con valore stringa "via" all'interno dell'array nella variabile $words1.
    $words1[6][3][2] = 'nel';//Inserisce un elemento in una posizione precisa all'interno di un array.
    $words2[] = 'del';

/* STAMPIAMO IL CONTENUTO DEGLI ARRAY PER VERIFICARE IL POSIZIONAMENTO DEI VARI ELEMENTI */

    print_r($words1);
    print_r($words2);
    print_r($words3);

/* GENERIAMO LA VARIABILE PROPOSTA NELL'ESERCITAZIONE E CONCATENIAMO GLI ELEMENTI PER VISUALIZZARE A TERMINALE LA FRASE RICHIESTA */

$risultato = $words1[6][3][2] . " " . $words1[6][3][0] . " " . $words2[0] . " " . "cammin" . " " . $words3[1] . " " . $words1[0] . " " . $words3[3]['stringa'] . " \n" . $words3[2] . " " . $words1[6][4] . " " .  "per" . " " . "una" . " " . $words3[3][0] . " " . $words1[6][0] . "," . " \n" . "che" . " " . $words1[8] . " " . $words1[7] . " " . $words1[1] . " " . $words1[6][1] . " " . "smarrita!";

echo  $risultato;


?>