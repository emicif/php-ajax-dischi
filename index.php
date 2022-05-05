


<?php

//phpinfo()

include(__DIR__ . '/data.php');

/*Stampiamo i dischi solo con l’utilizzo di PHP, 
  che stampa direttamente i dischi in pagina: 
  al caricamento della pagina ci saranno tutti i dischi.
*/
    foreach($dischi as $item){
        echo('Autore è ' . $item['author'] . '<br>');
        echo('Genere è ' . $item['genre'] . '<br>');
        
        echo('Title è ' . $item['title'] . '<br>');
        echo('Anno è ' . $item['year'] . '<hr>');
    };

?>

