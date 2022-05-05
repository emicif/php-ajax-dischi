<?php

//phpinfo()

include(__DIR__ . '/data.php');

/*
echo('<pre>');
var_dump($data);
echo('</pre>');
*/

foreach($data as $item){
    echo('Autore è ' . $item['author'] . '<br>');
    echo('Genere è ' . $item['genre'] . '<br>');
    
    echo('Title è ' . $item['title'] . '<br>');
    echo('Anno è ' . $item['year'] . '<hr>');
};


?>